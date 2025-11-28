@echo off
REM Script para exportar la base de datos y prepararla para GitHub (Windows)
REM Uso: export-db-for-github.bat

echo === Exportando Base de Datos para GitHub ===

REM Crear directorio de backup si no existe
if not exist "..\database\backup" mkdir "..\database\backup"

REM Exportar desde el contenedor de MongoDB
echo Exportando base de datos desde contenedor...
docker exec tienda-mongodb mongodump --uri="mongodb://admin:admin123@localhost:27017/tienda?authSource=admin" --out=/tmp/backup

REM Copiar backup fuera del contenedor
echo Copiando backup fuera del contenedor...
docker cp tienda-mongodb:/tmp/backup ..\database\backup

REM Comprimir el backup (requiere 7-Zip o similar)
echo Comprimiendo backup...
cd ..\database
for /f "tokens=2-4 delims=/ " %%a in ('date /t') do set mydate=%%c%%a%%b
for /f "tokens=1-2 delims=/:" %%a in ('time /t') do set mytime=%%a%%b
set mytime=%mytime: =0%
7z a tienda-backup-%mydate%-%mytime%.zip backup\*

echo.
echo Backup creado en: database\tienda-backup-*.zip
echo.
echo Para importar en otro entorno:
echo    1. Descomprimir el archivo .zip
echo    2. Importar: docker exec -i tienda-mongodb mongorestore --uri="mongodb://admin:admin123@localhost:27017/tienda?authSource=admin" /tmp/backup/tienda

pause

