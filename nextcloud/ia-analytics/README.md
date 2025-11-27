# Módulo de IA para Análisis de Datos

Este módulo analiza la analítica de datos generada por Prometheus y produce informes automáticos de desempeño.

## Características

- **Análisis de Métricas**: Analiza métricas de CPU, memoria, red y requests HTTP
- **Detección de Anomalías**: Usa Isolation Forest para detectar comportamientos anómalos
- **Generación de Reportes**: Genera reportes en formato PDF y JSON
- **Recomendaciones Automáticas**: Proporciona recomendaciones basadas en el análisis

## Uso

### Ejecutar Análisis Manualmente

```bash
# Ejecutar el análisis
docker-compose --profile ia run --rm ia-analytics

# Los reportes se generan en nextcloud/reportes/
```

### Programar Ejecución Automática

Puedes usar un cron job o un scheduler para ejecutar el análisis periódicamente:

```bash
# Ejecutar cada 24 horas
docker-compose --profile ia run --rm ia-analytics
```

## Configuración

Variables de entorno disponibles:

- `PROMETHEUS_URL`: URL de Prometheus (por defecto: `http://prometheus:9090`)
- `OUTPUT_DIR`: Directorio de salida para reportes (por defecto: `/app/reportes`)

## Salida

El módulo genera:

1. **Reporte PDF**: `reporte_desempeno_YYYYMMDD_HHMMSS.pdf`
   - Resumen de métricas
   - Anomalías detectadas
   - Recomendaciones

2. **Análisis JSON**: `analisis_YYYYMMDD_HHMMSS.json`
   - Datos estructurados del análisis
   - Métricas procesadas
   - Anomalías con detalles

Los archivos se guardan en `nextcloud/reportes/` y están disponibles en NextCloud.

