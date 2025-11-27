# Script PowerShell para agregar un dominio de ngrok a NextCloud trusted_domains

param(
    [Parameter(Mandatory=$true)]
    [string]$Dominio
)

$CONTAINER_NAME = "tienda-nextcloud"
$CONFIG_FILE = "/var/www/html/config/config.php"

Write-Host "🔧 Agregando dominio: $Dominio a NextCloud..." -ForegroundColor Cyan

# Extraer solo el dominio sin https://
$Dominio = $Dominio -replace '^https?://', '' -replace '/$', ''

# Leer el archivo config.php actual
Write-Host "📖 Leyendo configuración actual..." -ForegroundColor Yellow
$configContent = docker exec $CONTAINER_NAME cat $CONFIG_FILE

# Verificar si el dominio ya existe
if ($configContent -match "['`"]$Dominio['`"]") {
    Write-Host "ℹ️  El dominio ya existe en la lista" -ForegroundColor Yellow
    exit 0
}

# Crear un script PHP temporal para agregar el dominio
$phpScript = @"
<?php
`$configFile = '$CONFIG_FILE';
`$config = include `$configFile;

// Verificar si el dominio ya existe
if (!isset(`$config['trusted_domains'])) {
    `$config['trusted_domains'] = array();
}

// Agregar el dominio si no existe
`$domain = '$Dominio';
if (!in_array(`$domain, `$config['trusted_domains'])) {
    `$config['trusted_domains'][] = `$domain;
    echo "✅ Dominio agregado: `$domain\n";
} else {
    echo "ℹ️  El dominio ya existe en la lista\n";
    exit(0);
}

// Generar el contenido del archivo PHP
`$content = "<?php\n`$CONFIG = array (\n";
foreach (`$config as `$key => `$value) {
    if (`$key === 'trusted_domains') {
        `$content .= "  'trusted_domains' =>\n  array (\n";
        foreach (`$value as `$index => `$domain) {
            `$content .= "    `$index => '`$domain',\n";
        }
        `$content .= "  ),\n";
    } elseif (is_array(`$value)) {
        `$content .= "  '`$key' =>\n  array (\n";
        foreach (`$value as `$subkey => `$subvalue) {
            if (is_array(`$subvalue)) {
                `$content .= "    `$subkey =>\n    array (\n";
                foreach (`$subvalue as `$k => `$v) {
                    `$content .= "      '`$k' => '`$v',\n";
                }
                `$content .= "    ),\n";
            } else {
                `$content .= "    '`$subkey' => '`$subvalue',\n";
            }
        }
        `$content .= "  ),\n";
    } else {
        if (is_bool(`$value)) {
            `$content .= "  '`$key' => " . (`$value ? 'true' : 'false') . ",\n";
        } else {
            `$content .= "  '`$key' => '`$value',\n";
        }
    }
}
`$content .= ");\n";

file_put_contents(`$configFile, `$content);
chmod(600, `$configFile);
chown('www-data:www-data', `$configFile);
"@

# Guardar el script temporal
$tempFile = [System.IO.Path]::GetTempFileName()
$phpScript | Out-File -FilePath $tempFile -Encoding UTF8

# Copiar el script al contenedor y ejecutarlo
Write-Host "📝 Ejecutando script de actualización..." -ForegroundColor Yellow
docker cp $tempFile "${CONTAINER_NAME}:/tmp/add_trusted_domain.php"
docker exec $CONTAINER_NAME php /tmp/add_trusted_domain.php

if ($LASTEXITCODE -eq 0) {
    Write-Host "✅ Dominio agregado exitosamente" -ForegroundColor Green
    Write-Host "🔄 Reiniciando contenedor de NextCloud..." -ForegroundColor Yellow
    docker restart $CONTAINER_NAME
    Write-Host "✅ ¡Listo! El dominio $Dominio ya está configurado" -ForegroundColor Green
    Write-Host ""
    Write-Host "📝 Ahora puedes acceder a NextCloud desde: https://$Dominio" -ForegroundColor Cyan
} else {
    Write-Host "❌ Error al agregar el dominio" -ForegroundColor Red
    exit 1
}

# Limpiar archivo temporal
Remove-Item $tempFile -ErrorAction SilentlyContinue

