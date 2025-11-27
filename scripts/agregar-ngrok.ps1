# Script para agregar dominio de ngrok a NextCloud usando occ (método oficial)
# Uso: .\agregar-ngrok.ps1 -Dominio "abc123.ngrok.io"

param(
    [Parameter(Mandatory=$true)]
    [string]$Dominio
)

$CONTAINER_NAME = "tienda-nextcloud"

# Limpiar el dominio (quitar https:// y /)
$Dominio = $Dominio -replace '^https?://', '' -replace '/$', ''

Write-Host "`n🔧 Agregando dominio de ngrok: $Dominio" -ForegroundColor Cyan
Write-Host "📝 Usando comando oficial de NextCloud (occ)..." -ForegroundColor Yellow

# Obtener los dominios actuales
$currentDomains = docker exec $CONTAINER_NAME php /var/www/html/occ config:system:get trusted_domains
$domainCount = 0
$domainExists = $false

if ($currentDomains) {
    # Contar las líneas que no están vacías (cada dominio es una línea)
    $lines = $currentDomains -split "`n" | Where-Object { $_.Trim() -ne "" }
    $domainCount = $lines.Count
    
    # Verificar si el dominio ya existe
    foreach ($line in $lines) {
        $cleanLine = $line.Trim()
        if ($cleanLine -eq $Dominio) {
            $domainExists = $true
            break
        }
    }
}

# Si el dominio ya existe, no hacer nada
if ($domainExists) {
    Write-Host "ℹ️  El dominio '$Dominio' ya está en la lista de dominios confiables" -ForegroundColor Yellow
    Write-Host "✅ No es necesario agregarlo nuevamente" -ForegroundColor Green
    exit 0
}

# El siguiente índice es simplemente el número de dominios actuales
$nextIndex = $domainCount

Write-Host "📊 Dominios actuales: $domainCount" -ForegroundColor Gray

# Agregar el dominio usando occ
Write-Host "➕ Agregando dominio en el índice $nextIndex..." -ForegroundColor Yellow
docker exec $CONTAINER_NAME php /var/www/html/occ config:system:set trusted_domains $nextIndex --value=$Dominio

if ($LASTEXITCODE -eq 0) {
    Write-Host "✅ Dominio agregado exitosamente" -ForegroundColor Green
    Write-Host "🔄 Reiniciando contenedor de NextCloud..." -ForegroundColor Yellow
    docker restart $CONTAINER_NAME
    
    Start-Sleep -Seconds 3
    
    Write-Host "`n✅ ¡Listo! El dominio está configurado" -ForegroundColor Green
    Write-Host "📝 Ahora puedes acceder a NextCloud desde:" -ForegroundColor Cyan
    Write-Host "   https://$Dominio" -ForegroundColor White
    Write-Host ""
    Write-Host "💡 Tip: Si cambias la URL de ngrok, ejecuta este script nuevamente con la nueva URL" -ForegroundColor Yellow
} else {
    Write-Host "❌ Error al agregar el dominio" -ForegroundColor Red
    Write-Host "💡 Intenta verificar que el contenedor esté corriendo: docker ps | grep nextcloud" -ForegroundColor Yellow
    exit 1
}

