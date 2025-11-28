#!/bin/bash
# Script de backup automático para MongoDB
# Este script realiza backups de la base de datos MongoDB y los almacena con fecha/hora

set -e

# Configuración (puede ser sobrescrita por variables de entorno)
MONGODB_URI=${MONGODB_URI:-"mongodb://admin:admin123@mongo1:27017,mongo2:27017,mongo3:27017/?authSource=admin&replicaSet=myReplicaSet"}
BACKUP_DIR="/backups"
RETENTION_DAYS=${RETENTION_DAYS:-7}  # Retener backups por 7 días por defecto
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
BACKUP_NAME="tienda-backup-${TIMESTAMP}"

# Crear directorio de backup si no existe
mkdir -p "${BACKUP_DIR}"

echo "========================================="
echo "Iniciando backup de MongoDB"
echo "Fecha: $(date)"
echo "========================================="

# Realizar el backup usando mongodump
echo "Ejecutando mongodump..."
mongodump \
  --uri="${MONGODB_URI}" \
  --out="${BACKUP_DIR}/${BACKUP_NAME}" \
  --gzip

if [ $? -eq 0 ]; then
    echo "✅ Backup completado exitosamente: ${BACKUP_NAME}"
    
    # Comprimir el backup en un archivo tar.gz
    echo "Comprimiendo backup..."
    cd "${BACKUP_DIR}"
    tar -czf "${BACKUP_NAME}.tar.gz" "${BACKUP_NAME}"
    
    if [ $? -eq 0 ]; then
        echo "✅ Backup comprimido: ${BACKUP_NAME}.tar.gz"
        
        # Eliminar el directorio sin comprimir para ahorrar espacio
        rm -rf "${BACKUP_NAME}"
        
        # Calcular el tamaño del backup
        BACKUP_SIZE=$(du -h "${BACKUP_NAME}.tar.gz" | cut -f1)
        echo "📦 Tamaño del backup: ${BACKUP_SIZE}"
        
        # Limpiar backups antiguos
        echo "Limpiando backups antiguos (más de ${RETENTION_DAYS} días)..."
        find "${BACKUP_DIR}" -name "tienda-backup-*.tar.gz" -type f -mtime +${RETENTION_DAYS} -delete
        
        BACKUPS_REMOVED=$(find "${BACKUP_DIR}" -name "tienda-backup-*.tar.gz" -type f | wc -l)
        echo "✅ Limpieza completada. Backups restantes: ${BACKUPS_REMOVED}"
        
        echo "========================================="
        echo "✅ Proceso de backup finalizado exitosamente"
        echo "========================================="
    else
        echo "❌ Error al comprimir el backup"
        exit 1
    fi
else
    echo "❌ Error al realizar el backup"
    exit 1
fi

