#!/bin/bash
# Script para exportar la base de datos y prepararla para GitHub
# Uso: ./export-db-for-github.sh

echo "=== Exportando Base de Datos para GitHub ==="

# Crear directorio de backup si no existe
mkdir -p ../database/backup

# Exportar desde el contenedor de MongoDB
echo "Exportando base de datos desde contenedor..."
docker exec tienda-mongodb mongodump \
  --uri="mongodb://admin:admin123@localhost:27017/tienda?authSource=admin" \
  --out=/tmp/backup

# Copiar backup fuera del contenedor
echo "Copiando backup fuera del contenedor..."
docker cp tienda-mongodb:/tmp/backup ../database/backup

# Comprimir el backup
echo "Comprimiendo backup..."
cd ../database
tar -czf tienda-backup-$(date +%Y%m%d-%H%M%S).tar.gz backup/

echo "✅ Backup creado en: database/tienda-backup-*.tar.gz"
echo ""
echo "📝 Para importar en otro entorno:"
echo "   1. Descomprimir: tar -xzf tienda-backup-*.tar.gz"
echo "   2. Importar: docker exec -i tienda-mongodb mongorestore --uri='mongodb://admin:admin123@localhost:27017/tienda?authSource=admin' /tmp/backup/tienda"

