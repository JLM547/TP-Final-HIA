# Proyecto Final - Grupo 13

Proyecto completo con backend y frontend para el trabajo práctico final, dockerizado con monitoreo en tiempo real.

Todo esto se encuentra alojado en el reposirio :

https://github.com/JLM547/TP-Final-HIA

El cual esta en publico para su libre acceso 

## 👥 Integrantes

- FLORES, Jonatan Uziel
- MORALES, Jeremias Leonel
- MORALES, Malena Ayelen
- GUTIERREZ, Sergio Leonardo
- VELAZQUEZ, Gonzalo Nicolas

## 📁 Estructura del Proyecto

```
DEFINITIVOTPFinal-PYSW/
├── proybackendgrupo13/          # Backend (Node.js + Express + MongoDB)
│   ├── controllers/            # Controladores de la API
│   ├── models/                 # Modelos de MongoDB/Mongoose
│   ├── routes/                 # Rutas de la API
│   ├── middleware/             # Middleware (autenticación, etc.)
│   ├── services/               # Servicios (email, etc.)
│   ├── scripts/                # Scripts auxiliares
│   ├── Dockerfile              # Configuración Docker para backend
│   ├── config.example.js       # Plantilla de configuración
│   ├── config.js               # Configuración del backend
│   ├── database.js             # Conexión a MongoDB
│   ├── index.js                # Punto de entrada del servidor
│   ├── package.json
│   └── README.md               # Instrucciones del backend
│
├── proyectofrontendgrupo13/    # Frontend (Angular)
│   └── frontend/
│       ├── src/
│       │   └── app/
│       │       ├── core/       # Servicios core (auth, interceptors)
│       │       ├── data/       # Servicios de datos
│       │       ├── features/   # Módulos de funcionalidades
│       │       │   ├── admin/  # Panel de administración
│       │       │   ├── auth/   # Autenticación (login, register)
│       │       │   ├── cliente/# Funcionalidades de cliente
│       │       │   ├── productos/# Gestión de productos
│       │       │   └── ...     # Otros módulos
│       │       └── shared/     # Componentes compartidos
│       ├── public/             # Archivos estáticos
│       ├── Dockerfile          # Configuración Docker para frontend
│       ├── nginx.conf          # Configuración Nginx
│       ├── angular.json        # Configuración de Angular
│       ├── package.json
│       └── README.md           # Instrucciones del frontend
│
├── prometheus/                 # Configuración de Prometheus
│   └── prometheus.yml
│
├── grafana/                     # Configuración de Grafana
│   ├── provisioning/           # Configuración automática
│   │   ├── datasources/        # Fuentes de datos
│   │   └── dashboards/         # Configuración de dashboards
│   └── dashboards/             # Dashboards JSON
│       ├── system-metrics.json
│       ├── mongodb-metrics.json
│       └── backend-metrics.json
│
├── database/                    # Scripts de inicialización
│   └── init-mongo.js
│
├── keys/                        # Archivos keyFile para MongoDB Replica Set
│   ├── key1/                    # Key para nodo primario (mongo1)
│   ├── key2/                    # Key para nodo secundario (mongo2)
│   └── key3/                   # Key para nodo secundario (mongo3)
│
├── scripts/                     # Scripts auxiliares del proyecto
│   ├── init-entrypoint.sh      # Script de inicialización del nodo MongoDB
│   ├── mongo_setup.sh          # Script de configuración del Replica Set
│   ├── create-admin.sh         # Script para crear usuario administrador
│   ├── export-db-for-github.sh  # Script para exportar BD (Linux/macOS)
│   ├── export-db-for-github.bat # Script para exportar BD (Windows)
│   ├── generate-selfsigned-cert.sh # Generar certificados HTTPS (Linux/macOS)
│   ├── generate-selfsigned-cert.ps1 # Generar certificados HTTPS (Windows)
│   ├── setup-firewall.sh       # Configurar firewall (Linux)
│   ├── setup-firewall.ps1      # Configurar firewall (Windows)
│   ├── agregar-ngrok.ps1       # Scripts para ngrok
│   └── ...                     # Otros scripts
│
├── docs/                        # Documentación del proyecto
│   └── seguridad.md            # Documentación completa de medidas de seguridad
│
├── nextcloud/                   # Gestión Documental (NextCloud)
│   ├── documentacion/          # Documentación técnica
│   ├── reportes/               # Reportes generados
│   ├── backups/                # Backups de configuración
│   ├── logs/                   # Logs del sistema
│   └── ia-analytics/           # Módulo de IA para análisis
│       ├── analytics_ai.py     # Script de análisis con IA
│       ├── Dockerfile
│       ├── requirements.txt
│       └── README.md
│
├── ssl/                         # Certificados TLS/SSL (generados)
│   ├── cert.pem                # Certificado
│   └── key.pem                 # Clave privada
│
├── docker-compose.yml           # Orquestación de todos los servicios
├── .env.example                 # Plantilla de variables de entorno
├── .env                         # Variables de entorno (no versionado)
└── README.md                    # Este archivo
```

## 🚀 Inicio Rápido

### Opción 1: Docker (Recomendado) 🐳

**Requisitos:**
- Docker Desktop instalado (Windows/Mac) o Docker Engine (Linux)
- Docker Compose (incluido en Docker Desktop)

**Pasos:**

1. **Clonar el repositorio:**
```bash
git clone <tu-repositorio>
cd DEFINITIVOTPFinal-PYSW
```

2. **Configurar variables de entorno (opcional):**
```bash
# Copiar el archivo de ejemplo
cp .env.example .env
# Editar .env con tus valores (JWT_SECRET, GOOGLE_CLIENT_ID, etc.)
```

3. **Construir e iniciar todos los servicios:**
```bash
docker-compose up -d --build
```

4. **Verificar que todos los servicios estén corriendo:**
```bash
docker-compose ps
```

5. **Acceder a los servicios:**
   - **Frontend**: http://localhost:8080
   - **Backend API**: http://localhost:3000/api
   - **Mongo Express**: http://localhost:8081 (usuario: `admin`, contraseña: `admin123`)
   - **Prometheus**: http://localhost:9090
   - **Grafana**: http://localhost:3001 (usuario: `admin`, contraseña: `admin` por defecto)
   - **NextCloud**: http://localhost:8082 (usuario: `admin`, contraseña: `admin123` por defecto)

**Comandos útiles:**
```bash
# Ver logs de todos los servicios
docker-compose logs -f

# Ver logs de un servicio específico
docker-compose logs -f backend

# Detener todos los servicios
docker-compose down

# Detener y eliminar volúmenes (⚠️ elimina datos de MongoDB)
docker-compose down -v

# Reiniciar un servicio específico
docker-compose restart backend
```

### Opción 2: Desarrollo Local (Sin Docker)

#### Backend

1. Navegar a la carpeta del backend:
```bash
cd proybackendgrupo13
```

2. Instalar dependencias:
```bash
npm install
```

3. Configurar el proyecto:
```bash
cp config.example.js config.js
# Editar config.js con tus valores
```

4. Asegurarse de que MongoDB esté corriendo

5. Iniciar el servidor:
```bash
npm run dev
```

El backend estará disponible en `http://localhost:3000`

#### Frontend

1. Navegar a la carpeta del frontend:
```bash
cd proyectofrontendgrupo13/frontend
```

2. Instalar dependencias:
```bash
npm install
```

3. Iniciar el servidor de desarrollo:
```bash
ng serve
# o
npx ng serve
```

El frontend estará disponible en `http://localhost:4200`

## 📝 Notas Importantes

- **Backend**: Asegúrate de crear el archivo `config.js` desde `config.example.js` antes de ejecutar el servidor
- **MongoDB**: El backend requiere MongoDB corriendo. Configura la URI en `config.js`
- **Puertos**: 
  - Backend: `3000` (configurable)
  - Frontend: `4200` (por defecto de Angular)

## 👥 Para el Grupo

Cuando clones el repositorio:

1. **Backend**: 
   - Ejecuta `npm install` en `proybackendgrupo13/`
   - Copia `config.example.js` a `config.js` y configura tus valores
   - Asegúrate de tener MongoDB corriendo

2. **Frontend**:
   - Ejecuta `npm install` en `proyectofrontendgrupo13/frontend/`
   - Ejecuta `ng serve` o `npx ng serve`

3. **Listo**: Ambos servidores deberían estar corriendo y comunicándose correctamente.

## 📊 Monitoreo y Métricas

El proyecto incluye **Prometheus** y **Grafana** para monitoreo en tiempo real:

### Prometheus
- **URL**: http://localhost:9090
- Recopila métricas cada 15 segundos
- Métricas de:
  - Contenedores Docker (CPU, memoria, red)
  - MongoDB (operaciones, conexiones, consultas)
  - Backend (requests, errores, tiempo de respuesta)

### Grafana
- **URL**: http://localhost:3001
- **Usuario por defecto**: `admin`
- **Contraseña por defecto**: `admin` (cambiar en primera sesión)
- **Dashboards incluidos**:
  - Sistema - Métricas Generales (CPU, memoria, red por contenedor)
  - MongoDB - Métricas de Base de Datos (operaciones, conexiones, tamaño)
  - Backend - Métricas de Aplicación (requests, errores, latencia)

### Configuración de Grafana

1. Acceder a http://localhost:3001
2. Login con `admin` / `admin`
3. Cambiar la contraseña cuando se solicite
4. Los dashboards se cargarán automáticamente desde `/grafana/dashboards/`

## 🗄️ Base de Datos

### Exportar Base de Datos

Para exportar la base de datos y subirla a GitHub:

```bash
# Desde el contenedor de MongoDB
docker exec tienda-mongodb mongodump --uri="mongodb://admin:admin123@localhost:27017/tienda?authSource=admin" --out=/tmp/backup

# Copiar el backup fuera del contenedor
docker cp tienda-mongodb:/tmp/backup ./database/backup

# Comprimir
cd database
tar -czf tienda-backup.tar.gz backup/
```

### Importar Base de Datos

```bash
# Descomprimir el backup
cd database
tar -xzf tienda-backup.tar.gz

# Importar al contenedor
docker exec -i tienda-mongodb mongorestore --uri="mongodb://admin:admin123@localhost:27017/tienda?authSource=admin" /tmp/backup/tienda
```

## 🗄️ MongoDB Replica Set - Cluster de Alta Disponibilidad

El proyecto incluye un **cluster de MongoDB con Replica Set** configurado para alta disponibilidad y redundancia de datos.

### Arquitectura del Cluster

El cluster está compuesto por **3 nodos MongoDB** configurados como Replica Set:

1. **mongo1 (tienda-mongodb)**: Nodo primario
   - Puerto: `27017`
   - Hostname: `mongo1`
   - Prioridad: 3 (más alta)
   - Container: `tienda-mongodb`

2. **mongo2**: Nodo secundario
   - Puerto: `27018` (mapeado desde 27017)
   - Hostname: `mongo2`
   - Prioridad: 2
   - Container: `mongo2`

3. **mongo3**: Nodo secundario
   - Puerto: `27019` (mapeado desde 27017)
   - Hostname: `mongo3`
   - Prioridad: 1
   - Container: `mongo3`

### Características del Replica Set

- **Nombre del Replica Set**: `myReplicaSet`
- **Alta Disponibilidad**: Si el nodo primario falla, uno de los secundarios se convierte en primario automáticamente
- **Replicación de Datos**: Los datos se replican automáticamente entre todos los nodos
- **Seguridad**: Utiliza keyFile para autenticación entre nodos
- **Configuración Automática**: El script `mongo_setup.sh` inicializa el replica set automáticamente

### Seguridad con KeyFile

El cluster utiliza **keyFile** para autenticación entre nodos:

- **Ubicación**: `/keys/key1/key`, `/keys/key2/key`, `/keys/key3/key`
- **Permisos**: 400 (solo lectura para el propietario)
- **Propietario**: 999:999 (usuario MongoDB)
- **Generación Automática**: El script `init-entrypoint.sh` genera las keys automáticamente si no existen

### Scripts de Configuración

#### `scripts/init-entrypoint.sh`
Script que se ejecuta al iniciar el nodo primario:
- Crea y configura los archivos keyFile con permisos correctos
- Inicia MongoDB con configuración de replica set
- Asegura que las keys tengan permisos 400

#### `scripts/mongo_setup.sh`
Script que configura el replica set:
- Espera 20 segundos para que todos los nodos estén listos
- Inicializa el replica set con la configuración de los 3 nodos
- Define las prioridades de cada nodo

### Verificar Estado del Cluster

Para verificar el estado del replica set:

```bash
# Conectarse al nodo primario
docker exec -it tienda-mongodb mongosh -u admin -p admin123

# Dentro de mongosh, ejecutar:
rs.status()
```

Esto mostrará:
- Estado de cada nodo (PRIMARY, SECONDARY, etc.)
- Información de sincronización
- Última operación replicada
- Tiempo de respuesta de cada nodo

### Conectarse al Cluster

#### Desde la aplicación (Backend)
El backend se conecta automáticamente al nodo primario:
```
mongodb://admin:admin123@mongo-db:27017/tienda?authSource=admin
```

#### Desde la línea de comandos
```bash
# Conectarse al nodo primario
docker exec -it tienda-mongodb mongosh -u admin -p admin123

# Conectarse a un nodo secundario específico
docker exec -it mongo2 mongosh -u admin -p admin123
docker exec -it mongo3 mongosh -u admin -p admin123
```

### Comandos Útiles del Replica Set

```bash
# Ver estado del replica set
rs.status()

# Ver configuración actual
rs.conf()

# Verificar qué nodo es el primario
rs.isMaster()

# Forzar elección de nuevo primario (solo en caso de emergencia)
rs.stepDown()
```

### Troubleshooting

#### Si un nodo no se une al cluster:
1. Verificar que todos los nodos estén corriendo: `docker-compose ps`
2. Verificar logs: `docker logs tienda-mongodb`
3. Verificar permisos de keyFile: `docker exec tienda-mongodb ls -la /keys/key1/key`
4. Reiniciar el servicio de setup: `docker-compose restart mongosetup`

#### Si el nodo primario no inicia:
- Verificar que el keyFile tenga permisos 400
- Verificar logs para errores de permisos
- Eliminar los archivos key y dejar que se regeneren automáticamente

### Notas Importantes

- **Primera ejecución**: El script `mongo_setup.sh` se ejecuta automáticamente al levantar los servicios
- **Persistencia**: Los datos se almacenan en volúmenes Docker (`mongodb_data`, `mongodb2_data`, `mongodb3_data`)
- **Red**: Todos los nodos están en la misma red Docker (`tienda-network`)
- **Health Checks**: El nodo primario tiene health check configurado para verificar su estado

## 🔧 Tecnologías Utilizadas

- **Backend**: Node.js, Express, MongoDB, Mongoose, JWT, bcrypt
- **Frontend**: Angular 20, TypeScript, Angular Material, Nginx
- **DevOps**: Docker, Docker Compose
- **Monitoreo**: Prometheus, Grafana, MongoDB Exporter
- **Otras**: OpenAI API (para generación de imágenes), Google OAuth

## 📁 NextCloud - Gestión Documental

NextCloud está configurado para almacenar y compartir documentación técnica, reportes, respaldos de configuración y registros del proyecto.

### Acceso a NextCloud

- **URL**: http://localhost:8082
- **Usuario administrador**: `admin` (configurable con variable de entorno `NEXTCLOUD_ADMIN_USER`)
- **Contraseña**: `admin123` (configurable con variable de entorno `NEXTCLOUD_ADMIN_PASSWORD`)

### Estructura de Carpetas

NextCloud está configurado con las siguientes carpetas predefinidas:

1. **Documentación** (`/Documentacion`): Documentación técnica del proyecto
   - Arquitectura del sistema
   - Manuales de instalación y configuración
   - Documentación de APIs
   - Archivos de configuración

2. **Reportes** (`/Reportes`): Reportes generados
   - Reportes de desempeño
   - Métricas de Prometheus y Grafana
   - Reportes generados por IA
   - Reportes de pruebas

3. **Backups** (`/Backups`): Respaldo de configuración
   - Backups de base de datos
   - Backups de configuración Docker
   - Snapshots del sistema

4. **Logs** (`/Logs`): Registros del sistema
   - Logs de aplicación
   - Logs de base de datos
   - Logs de Docker
   - Logs de monitoreo

### Módulo de IA para Análisis de Datos (Opcional)

El proyecto incluye un módulo de IA que analiza la analítica de datos generada y produce informes automáticos de desempeño.

#### Características del Módulo de IA

- **Análisis de Métricas**: Analiza métricas de Prometheus (CPU, memoria, red, requests HTTP)
- **Detección de Anomalías**: Usa Isolation Forest para detectar comportamientos anómalos
- **Generación de Reportes**: Genera reportes PDF y JSON automáticamente
- **Recomendaciones**: Proporciona recomendaciones basadas en el análisis

#### Uso del Módulo de IA

```bash
# Ejecutar análisis manualmente
docker-compose run --rm ia-analytics python analytics_ai.py

# Los reportes se generan en nextcloud/reportes/
```

#### Configuración

El módulo de IA se puede configurar mediante variables de entorno en `docker-compose.yml`:

- `PROMETHEUS_URL`: URL de Prometheus (por defecto: `http://prometheus:9090`)
- `OUTPUT_DIR`: Directorio de salida para reportes (por defecto: `/app/reportes`)

### Variables de Entorno para NextCloud

Puedes configurar NextCloud mediante variables de entorno en `docker-compose.yml` o un archivo `.env`:

```env
NEXTCLOUD_ADMIN_USER=admin
NEXTCLOUD_ADMIN_PASSWORD=admin123
NEXTCLOUD_DB_ROOT_PASSWORD=nextcloud_root_pass
NEXTCLOUD_DB_PASSWORD=nextcloud_pass
```

## 🚨 Punto 7 - Gestión de Incidencias (GLPI)

El **Punto 7** del proyecto corresponde a la **instalación, configuración y uso del sistema de gestión de incidencias GLPI**. Este servicio se maneja como un **servidor externo** en un repositorio separado.

### Repositorio Externo

- **Repositorio**: [Punto-7---Gestion-de-Incidencias](https://github.com/JonatanFlores418/Punto-7---Gestion-de-Incidencias.git)
- **Descripción**: Implementación completa de GLPI con Docker + Docker Compose

### Acceso al Servicio

El GLPI utilizado por el equipo está disponible mediante acceso remoto:

- **URL de acceso remoto**: https://bicolor-nondescribable-karri.ngrok-free.dev
- **Nota**: El enlace puede estar activo solo durante horarios de presentación, ya que depende del túnel local (Ngrok)

### Características

- 📦 Contenedor con **GLPI (Web UI)**
- 🗄️ Contenedor con **MySQL** como base de datos
- 🔧 Configuración para desplegar desde cero
- 🌐 Acceso web local y remoto mediante Ngrok

### Instalación Local (Opcional)

Si deseas ejecutar GLPI localmente, puedes clonar el repositorio externo:

```bash
git clone https://github.com/JonatanFlores418/Punto-7---Gestion-de-Incidencias.git
cd Punto-7---Gestion-de-Incidencias
docker compose up -d
```

Luego acceder a `http://localhost:8085` y completar la configuración inicial.

Para más detalles sobre la instalación y configuración, consulta el [README del repositorio de GLPI](https://github.com/JonatanFlores418/Punto-7---Gestion-de-Incidencias.git).

## 🔐 Punto 9 - Seguridad

El **Punto 9** del proyecto implementa medidas de seguridad para proteger la aplicación, incluyendo certificados HTTPS, firewall, mitigación de DDoS y gestión segura de credenciales.

### Documentación Completa

Las medidas de seguridad solicitadas en el enunciado se encuentran implementadas y documentadas en `docs/seguridad.md`.

### Resumen de Controles Implementados

#### 🔒 HTTPS Obligatorio
- **Nginx reverse proxy** con configuración HTTPS obligatoria
- **Certificados autofirmados** para entornos locales (demo)
- **Cabeceras de endurecimiento**: HSTS, X-Frame-Options, X-Content-Type-Options, etc.
- **Redirección automática** de HTTP a HTTPS

#### 🛡️ Mitigación de DDoS
- **Rate limiting en Nginx**: 10 requests por segundo, burst de 20
- **Reglas de firewall**: límites de conexiones simultáneas y ráfagas
- **Validación**: Puedes probar con `ab -n 1000 -c 100 https://localhost/`

#### 🔥 Firewall de Host
- **Scripts automatizados** para configuración de firewall
- **Políticas deny by default**
- **Reglas específicas** para servicios permitidos
- **Soporte multiplataforma**: Linux (iptables/ufw) y Windows (Firewall)

#### 🔑 Gestión de Credenciales
- **Variables de entorno** en archivo `.env` (no versionado)
- **Autenticación básica** para mongo-express
- **Credenciales centralizadas**: MONGO_ROOT_PASSWORD, ME_BASICAUTH_PASSWORD, JWT_SECRET, GRAFANA_PASSWORD, etc.

### Uso de las Medidas de Seguridad

#### Generar Certificados HTTPS

**Linux/macOS:**
```bash
./scripts/generate-selfsigned-cert.sh ssl localhost
```

**Windows:**
```powershell
.\scripts\generate-selfsigned-cert.ps1 -OutputDir ssl -DnsName localhost
```
*Nota: Requiere Python 3 y el paquete `cryptography`*

#### Configurar Firewall

**Linux:**
```bash
sudo ./scripts/setup-firewall.sh
```

**Windows:**
```powershell
.\scripts\setup-firewall.ps1 -Reset
```

#### Verificar Estado del Firewall

**Linux:**
```bash
ufw status verbose
```

**Windows:**
```powershell
Get-NetFirewallRule
```

#### Validar Mitigación DDoS

```bash
# Instalar Apache Bench si no está instalado
# Ubuntu/Debian: sudo apt-get install apache2-utils
# macOS: brew install httpd
# Windows: descargar desde Apache

# Ejecutar prueba de carga
ab -n 1000 -c 100 https://localhost/
```

### Configuración de Variables de Entorno

Antes de levantar los contenedores, asegúrate de crear un archivo `.env` en la raíz del proyecto con las siguientes variables:

```env
# MongoDB
MONGO_ROOT_PASSWORD=tu_password_seguro
MONGO_INITDB_ROOT_PASSWORD=tu_password_seguro

# Mongo Express
ME_BASICAUTH_USERNAME=admin
ME_BASICAUTH_PASSWORD=tu_password_seguro

# Backend
JWT_SECRET=tu_jwt_secret_muy_seguro
GOOGLE_CLIENT_ID=tu_google_client_id

# Grafana
GRAFANA_ADMIN_PASSWORD=tu_password_seguro

# NextCloud
NEXTCLOUD_ADMIN_USER=admin
NEXTCLOUD_ADMIN_PASSWORD=tu_password_seguro
NEXTCLOUD_DB_ROOT_PASSWORD=tu_password_seguro
NEXTCLOUD_DB_PASSWORD=tu_password_seguro

# OpenAI (Opcional)
OPENAI_API_KEY=tu_openai_api_key
```

**⚠️ Importante**: El archivo `.env` está en `.gitignore` y **NO debe subirse a GitHub**.

### Scripts de Seguridad Disponibles

- `scripts/generate-selfsigned-cert.sh` / `generate-selfsigned-cert.ps1`: Genera certificados TLS autofirmados
- `scripts/setup-firewall.sh` / `setup-firewall.ps1`: Configura reglas de firewall automatizadas
- `docs/seguridad.md`: Documentación completa de todas las medidas de seguridad

### Notas Importantes

- **Certificados autofirmados**: Son para desarrollo/demo. En producción, usa certificados de una CA confiable (Let's Encrypt, etc.)
- **Firewall**: Las reglas se aplican al host, no dentro de los contenedores Docker
- **Rate limiting**: Configurado en Nginx, ajustable según necesidades
- **Credenciales**: Nunca subas el archivo `.env` al repositorio. Usa `.env.example` como plantilla

## 🐳 Servicios Docker

El proyecto incluye los siguientes contenedores:

### Base de Datos

1. **mongo-db** (mongo1): Nodo primario del Replica Set MongoDB 7.0
   - Puerto: `27017`
   - Container: `tienda-mongodb`

2. **mongo-db2** (mongo2): Nodo secundario del Replica Set
   - Puerto: `27018`
   - Container: `mongo2`

3. **mongo-db3** (mongo3): Nodo secundario del Replica Set
   - Puerto: `27019`
   - Container: `mongo3`

4. **mongosetup**: Contenedor temporal que configura el Replica Set automáticamente

5. **nextcloud-db**: Base de datos MariaDB 10.11 para NextCloud

### Aplicaciones

6. **backend**: API Node.js/Express
7. **frontend**: Aplicación Angular servida con Nginx
8. **mongo-express**: Interfaz web para gestionar MongoDB
9. **nextcloud**: Servidor NextCloud para gestión documental

### Monitoreo y Análisis

10. **prometheus**: Sistema de monitoreo y alertas
11. **grafana**: Visualización de métricas y dashboards
12. **ia-analytics**: Módulo de IA para análisis de métricas y generación de reportes

## 🚀 CI/CD - Integración y Despliegue Continuo

Este proyecto incluye un pipeline automatizado de CI/CD usando **GitHub Actions** que:

- ✅ Detecta cambios en la rama `main` (push o merge)
- ✅ Construye automáticamente las imágenes Docker (Backend y Frontend)
- ✅ Publica las imágenes en Docker Hub con tags únicos
- ✅ Genera un resumen del proceso

### Configuración Rápida

1. **Configurar Secrets en GitHub**:
   - Ve a tu repositorio → Settings → Secrets and variables → Actions
   - Agrega `DOCKER_HUB_USERNAME` (tu usuario de Docker Hub)
   - Agrega `DOCKER_HUB_TOKEN` (token de acceso de Docker Hub)

2. **Hacer un commit de prueba**:
   ```bash
   git add .
   git commit -m "test: Validar pipeline CI/CD"
   git push origin main
   ```

3. **Verificar en GitHub Actions**:
   - Ve a la pestaña "Actions" en tu repositorio
   - El workflow se ejecutará automáticamente

## 📚 Documentación Adicional

- Ver `proybackendgrupo13/README.md` para más detalles del backend
- Ver `proyectofrontendgrupo13/frontend/README.md` para más detalles del frontend

## ⚠️ Notas Importantes

- **Variables de entorno**: Usa `.env` para configuraciones sensibles (no subir a GitHub). Consulta la sección [Punto 9 - Seguridad](#-punto-9---seguridad) para más detalles
- **Puertos**: Asegúrate de que los puertos 8080, 8082, 3000, 3001, 8081, 9090, 27017 estén disponibles
  - Frontend: http://localhost:8080 (o https://localhost si HTTPS está configurado)
  - NextCloud: http://localhost:8082
- **Datos persistentes**: Los datos de MongoDB, Grafana y NextCloud se guardan en volúmenes Docker
- **Primera ejecución**: La primera vez puede tardar más debido a la construcción de imágenes
- **Seguridad**: 
  - Configura las variables de entorno en `.env` antes de levantar los servicios
  - Genera certificados HTTPS con los scripts proporcionados para entornos locales
  - Configura el firewall según tu sistema operativo
  - Consulta `docs/seguridad.md` para documentación completa
- **OPENAI_API_KEY**: Es **opcional**. Si no la configuras, la generación de imágenes estará deshabilitada pero la aplicación funcionará normalmente
- **Google OAuth**: El Client ID está configurado por defecto. Si quieres usar el tuyo, crea un archivo `.env` con `GOOGLE_CLIENT_ID=tu-client-id`
- **NextCloud**: La primera configuración puede tardar 1-2 minutos. Accede a http://localhost:8082 y completa el setup inicial si es necesario
- **MongoDB Replica Set**: El cluster se configura automáticamente. Verifica el estado con `rs.status()` dentro de mongosh

