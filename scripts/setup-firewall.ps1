# Configura firewall y mitigación básica de DDoS en Windows.
# Ejecutar en PowerShell como Administrador.

param(
    [switch]$Reset
)

function Assert-Admin {
    $currentUser = [Security.Principal.WindowsIdentity]::GetCurrent()
    $principal = New-Object Security.Principal.WindowsPrincipal($currentUser)
    if (-not $principal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)) {
        Write-Error "Debes ejecutar este script con privilegios de Administrador."
        exit 1
    }
}

Assert-Admin

if ($Reset.IsPresent) {
    Write-Host "[INFO] Eliminando reglas previas del proyecto..."
    Get-NetFirewallRule -DisplayName "Tienda *" -ErrorAction SilentlyContinue | Remove-NetFirewallRule
}

Write-Host "[INFO] Configurando las políticas por defecto (Block inbound / Allow outbound)..."
Set-NetFirewallProfile -Profile Domain,Public,Private -DefaultInboundAction Block -DefaultOutboundAction Allow

$ports = 22,80,443,3001,8081,9090
foreach ($port in $ports) {
    $ruleName = "Tienda Allow TCP $port"
    if (-not (Get-NetFirewallRule -DisplayName $ruleName -ErrorAction SilentlyContinue)) {
        Write-Host "[INFO] Habilitando puerto $port/tcp"
        New-NetFirewallRule -DisplayName $ruleName `
            -Direction Inbound `
            -Protocol TCP `
            -LocalPort $port `
            -Action Allow `
            -Profile Domain,Public,Private `
            -Description "Regla automática para la plataforma Tienda (TP Final)"
    }
}

Write-Host "[INFO] Ajustando parámetros de protección anti-DDoS..."
netsh advfirewall set global statefulftp disable | Out-Null
netsh advfirewall set global logdroppedconnections enable | Out-Null
netsh advfirewall set global logallowedconnections enable | Out-Null
netsh interface tcp set global synattackprotect=enabled | Out-Null

$icmpRule = Get-NetFirewallRule -DisplayName "File and Printer Sharing (Echo Request - ICMPv4-In)" -ErrorAction SilentlyContinue
if ($icmpRule) {
    Set-NetFirewallRule -InputObject $icmpRule -Enabled False | Out-Null
}

Write-Host "[INFO] Configuración finalizada. Verifica con 'Get-NetFirewallProfile' y 'Get-NetFirewallRule \"Tienda *\"'."

