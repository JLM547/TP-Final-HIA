# Script para resolver conflictos de merge en archivos TypeScript, HTML y CSS
# Mantiene la version de HEAD (antes de =======)

$files = Get-ChildItem -Path "proyectofrontendgrupo13/frontend/src" -Recurse -Include *.ts,*.html,*.css

foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    if ($content -match "<<<<<<< HEAD|=======|>>>>>>> master") {
        Write-Host "Resolviendo conflictos en: $($file.FullName)"
        
        $lines = Get-Content $file.FullName
        $output = @()
        $inConflict = $false
        $keepHead = $false
        
        foreach ($line in $lines) {
            if ($line -match "^<<<<<<< HEAD") {
                $inConflict = $true
                $keepHead = $true
                continue
            }
            elseif ($line -match "^=======") {
                $keepHead = $false
                continue
            }
            elseif ($line -match "^>>>>>>> master") {
                $inConflict = $false
                $keepHead = $false
                continue
            }
            elseif ($inConflict -and $keepHead) {
                $output += $line
            }
            elseif ($inConflict -and -not $keepHead) {
                # Skip lines from master
                continue
            }
            else {
                $output += $line
            }
        }
        
        $output | Set-Content $file.FullName
        Write-Host "  Conflictos resueltos"
    }
}

Write-Host ""
Write-Host "Proceso completado."
