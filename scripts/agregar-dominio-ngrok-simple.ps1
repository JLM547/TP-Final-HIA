# Script simple para agregar dominio de ngrok a NextCloud
# Uso: .\agregar-dominio-ngrok-simple.ps1 -Dominio "abc123.ngrok.io"

param(
    [Parameter(Mandatory=$true)]
    [string]$Dominio
)

$CONTAINER_NAME = "tienda-nextcloud"
$CONFIG_FILE = "/var/www/html/config/config.php"

# Limpiar el dominio (quitar https:// y /)
$Dominio = $Dominio -replace '^https?://', '' -replace '/$', ''

Write-Host "`n🔧 Agregando dominio: $Dominio" -ForegroundColor Cyan

# Leer el archivo config.php actual
$configContent = docker exec $CONTAINER_NAME cat $CONFIG_FILE

# Verificar si el dominio ya existe
if ($configContent -match "['`"]$([regex]::Escape($Dominio))['`"]") {
    Write-Host "ℹ️  El dominio ya existe en la lista" -ForegroundColor Yellow
    exit 0
}

# Encontrar la línea de trusted_domains y agregar el nuevo dominio
$lines = $configContent -split "`n"
$newLines = @()
$inTrustedDomains = $false
$trustedDomainsCount = 0
$domainAdded = $false

foreach ($line in $lines) {
    if ($line -match "^\s*'trusted_domains'\s*=>") {
        $inTrustedDomains = $true
        $newLines += $line
    }
    elseif ($inTrustedDomains -and $line -match "^\s*array\s*\(") {
        $newLines += $line
    }
    elseif ($inTrustedDomains -and $line -match "^\s*(\d+)\s*=>\s*'([^']+)',") {
        $trustedDomainsCount = [int]$matches[1]
        $newLines += $line
    }
    elseif ($inTrustedDomains -and $line -match "^\s*\),") {
        if (-not $domainAdded) {
            $newIndex = $trustedDomainsCount + 1
            $indent = "    "
            $newLines += "$indent$newIndex => '$Dominio',"
            $domainAdded = $true
        }
        $newLines += $line
        $inTrustedDomains = $false
    }
    else {
        $newLines += $line
    }
}

# Si no se encontró la sección, usar método alternativo
if (-not $domainAdded) {
    Write-Host "⚠️  No se pudo encontrar la sección trusted_domains, usando método alternativo..." -ForegroundColor Yellow
    
    # Método alternativo: usar occ command de NextCloud
    Write-Host "📝 Usando comando occ de NextCloud..." -ForegroundColor Yellow
    docker exec $CONTAINER_NAME php /var/www/html/occ config:system:set trusted_domains $trustedDomainsCount --value=$Dominio
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "✅ Dominio agregado usando occ" -ForegroundColor Green
    } else {
        Write-Host "❌ Error al agregar dominio" -ForegroundColor Red
        exit 1
    }
} else {
    # Escribir el archivo actualizado
    $newContent = $newLines -join "`n"
    $tempFile = [System.IO.Path]::GetTempFileName()
    $newContent | Out-File -FilePath $tempFile -Encoding UTF8
    
    # Copiar al contenedor
    docker cp $tempFile "${CONTAINER_NAME}:${CONFIG_FILE}.new"
    docker exec $CONTAINER_NAME bash -c "mv ${CONFIG_FILE}.new $CONFIG_FILE && chmod 600 $CONFIG_FILE && chown www-data:www-data $CONFIG_FILE"
    
    Remove-Item $tempFile -ErrorAction SilentlyContinue
    
    Write-Host "✅ Dominio agregado al archivo config.php" -ForegroundColor Green
}

# Reiniciar el contenedor
Write-Host "🔄 Reiniciando contenedor..." -ForegroundColor Yellow
docker restart $CONTAINER_NAME

Write-Host "`n✅ ¡Listo! El dominio $Dominio está configurado" -ForegroundColor Green
Write-Host "📝 Accede a: https://$Dominio`n" -ForegroundColor Cyan

