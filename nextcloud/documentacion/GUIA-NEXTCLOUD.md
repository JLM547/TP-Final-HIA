# Guía de Uso de NextCloud - Proyecto Final Grupo 13

## ¿Qué es NextCloud?

NextCloud es una plataforma de gestión documental y colaboración que permite:
- **Almacenar** documentación técnica del proyecto
- **Compartir** archivos con el equipo de forma segura
- **Colaborar** en tiempo real
- **Versionar** documentos (historial de cambios)
- **Centralizar** toda la información del proyecto

## Funcionalidades Principales

### 1. Almacenamiento Centralizado
- Todas las carpetas del proyecto en un solo lugar
- Acceso desde cualquier dispositivo
- Sincronización automática

### 2. Compartir Archivos
- **Compartir con usuarios**: Invitar miembros del equipo
- **Enlaces compartidos**: Generar links con contraseña
- **Control de permisos**: Solo lectura, edición, etc.

### 3. Colaboración
- Comentarios en archivos
- Notificaciones de cambios
- Historial de versiones

### 4. Seguridad
- Control de acceso por usuario
- Encriptación de datos
- Auditoría de accesos

## Estructura de Carpetas del Proyecto

### 📁 Documentacion HIA
Contiene toda la documentación técnica:
- README.md del proyecto
- docker-compose.yml
- Configuraciones de servicios
- Manuales de instalación

### 📁 Reportes HIA
Reportes generados:
- Reportes de desempeño del sistema
- Reportes generados por IA (PDF y JSON)
- Métricas de Prometheus y Grafana

### 📁 Backups HIA
Respaldo de configuración:
- Backups de base de datos MongoDB
- Exports de configuración
- Snapshots del sistema

### 📁 Logs HIA
Registros del sistema:
- Logs de aplicación
- Logs de Docker
- Logs de monitoreo

## Cómo Usar NextCloud

### Acceder
1. Abrir navegador en: `http://localhost:8080`
2. Usuario: `admin`
3. Contraseña: `admin123`

### Subir Archivos
1. Clic en botón "+" → "Subir archivo"
2. O arrastrar archivos desde el explorador

### Compartir con el Grupo
1. Clic derecho en carpeta/archivo
2. Seleccionar "Compartir"
3. Generar enlace o invitar usuarios

### Ver Historial de Versiones
1. Clic derecho en archivo
2. Seleccionar "Detalles" o "Versiones"
3. Ver y restaurar versiones anteriores

## Ventajas para el Proyecto

✅ **Centralización**: Todo en un solo lugar accesible
✅ **Colaboración**: El equipo puede trabajar juntos
✅ **Seguridad**: Control de quién accede a qué
✅ **Trazabilidad**: Historial de cambios y versiones
✅ **Accesibilidad**: Disponible desde cualquier dispositivo

## Integración con el Proyecto

NextCloud se integra con:
- **Docker Compose**: Servicio contenerizado
- **Módulo de IA**: Genera reportes automáticos en carpeta Reportes
- **Prometheus/Grafana**: Métricas y análisis
- **MongoDB**: Backups de base de datos

## Para la Presentación

Demostrar:
1. ✅ NextCloud funcionando
2. ✅ Estructura de carpetas organizada
3. ✅ Funcionalidad de compartir
4. ✅ Historial de versiones
5. ✅ Reportes generados por IA (opcional)

---

**Nota**: Este documento está almacenado en NextCloud como ejemplo de gestión documental.

