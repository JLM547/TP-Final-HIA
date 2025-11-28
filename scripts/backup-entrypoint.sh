#!/bin/bash
# Entrypoint para el contenedor de backup automático
# Configura cron para ejecutar backups periódicamente

# No usar set -e aquí para permitir manejo de errores más flexible
set +e

# Variables de configuración
BACKUP_SCHEDULE=${BACKUP_SCHEDULE:-"0 2 * * *"}  # Por defecto: 2 AM diariamente
RETENTION_DAYS=${RETENTION_DAYS:-7}

echo "========================================="
echo "Configurando Backup Automático de MongoDB"
echo "========================================="
echo "Horario de backup: ${BACKUP_SCHEDULE}"
echo "Retención de backups: ${RETENTION_DAYS} días"
echo "========================================="

# Los scripts ya tienen permisos de ejecución del Dockerfile
# No intentar chmod en volumen montado como solo lectura

# Crear el archivo crontab en /etc/cron.d/
# Nota: Los archivos en /etc/cron.d/ deben incluir el usuario (root en este caso)
echo "${BACKUP_SCHEDULE} root /scripts/mongodb-backup.sh >> /var/log/backup.log 2>&1" > /etc/cron.d/mongodb-backup

# Agregar nueva línea al final (requerido por cron)
echo "" >> /etc/cron.d/mongodb-backup

# Dar permisos al archivo crontab
chmod 0644 /etc/cron.d/mongodb-backup

# Crear directorio de logs si no existe
mkdir -p /var/log
touch /var/log/backup.log

echo "✅ Configuración de cron completada"
echo "📋 Para ver los logs: docker logs tienda-mongodb-backup"
echo "📋 Para ver logs de backup: docker exec tienda-mongodb-backup tail -f /var/log/backup.log"

# Ejecutar un backup inicial (opcional)
if [ "${RUN_INITIAL_BACKUP}" = "true" ]; then
    echo "Ejecutando backup inicial..."
    /scripts/mongodb-backup.sh
fi

# Limpiar cualquier PID anterior de cron
rm -f /var/run/crond.pid || true

# Iniciar el servicio cron
echo "🚀 Iniciando servicio cron..."
service cron start || /etc/init.d/cron start || true

# Esperar un momento para que cron se inicie
sleep 2

# Verificar que cron está corriendo
if pgrep cron > /dev/null; then
    echo "✅ Cron está corriendo correctamente"
else
    echo "⚠️  Cron no está corriendo, intentando iniciar en foreground..."
    # Mantener el contenedor corriendo y ejecutar cron en foreground
    exec cron -f
fi

# Mantener el contenedor corriendo
echo "✅ Contenedor de backup listo. Esperando horarios programados..."
tail -f /var/log/backup.log

