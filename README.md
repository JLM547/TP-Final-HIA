# Proyecto Final

Proyecto completo con backend y frontend para el trabajo práctico final, dockerizado con monitoreo en tiempo real y CI/CD automatizado.

## 👥 Integrantes

- FLORES, Jonatan Uziel
- MORALES, Jeremias Leonel
- MORALES, Malena
- GUTIERREZ, Sergio Leonardo
- BARBOZA, Gonzalo

## 📁 Estructura del Proyecto

```
DEFINITIVOTPFinal-PYSW/
├── proybackendgrupo13/          # Backend (Node.js + Express + MongoDB)
│   ├── Dockerfile               # Configuración Docker para backend
│   ├── config.example.js        # Plantilla de configuración
│   ├── package.json
│   └── README.md                # Instrucciones del backend
│
├── proyectofrontendgrupo13/    # Frontend (Angular)
│   └── frontend/
│       ├── Dockerfile           # Configuración Docker para frontend
│       ├── nginx.conf          # Configuración Nginx
│       ├── package.json
│       └── README.md            # Instrucciones del frontend
│
├── prometheus/                  # Configuración de Prometheus
│   └── prometheus.yml
│
├── grafana/                     # Configuración de Grafana
│   ├── provisioning/           # Datasources y dashboards
│   └── dashboards/             # Dashboards JSON
│
├── database/                    # Scripts de inicialización
│   └── init-mongo.js
│
├── docker-compose.yml           # Orquestación de todos los servicios
├── .github/
│   └── workflows/
│       └── ci-cd-deploy.yml           # Pipeline de CI/CD con GitHub Actions
├── CI-CD.md                     # Manual completo de CI/CD
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

   **⚠️ Nota:** Si tienes AppServ u otro servidor web usando el puerto 80, el frontend se ejecuta en el puerto 8080 para evitar conflictos.

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

## 🔧 Tecnologías Utilizadas

- **Backend**: Node.js, Express, MongoDB, Mongoose, JWT, bcrypt
- **Frontend**: Angular 20, TypeScript, Angular Material, Nginx
- **DevOps**: Docker, Docker Compose
- **Monitoreo**: Prometheus, Grafana, MongoDB Exporter
- **Otras**: OpenAI API (para generación de imágenes), Google OAuth

## 🐳 Servicios Docker

El proyecto incluye los siguientes contenedores:

1. **mongo-db**: Base de datos MongoDB 7.0
2. **backend**: API Node.js/Express
3. **frontend**: Aplicación Angular servida con Nginx
4. **mongo-express**: Interfaz web para gestionar MongoDB
5. **prometheus**: Sistema de monitoreo y alertas
6. **grafana**: Visualización de métricas y dashboards

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

📖 **Documentación completa**: Ver [CI-CD.md](./CI-CD.md) para instrucciones detalladas.

## 📚 Documentación Adicional

- Ver `proybackendgrupo13/README.md` para más detalles del backend
- Ver `proyectofrontendgrupo13/frontend/README.md` para más detalles del frontend
- Ver `CI-CD.md` para documentación completa del pipeline CI/CD

## ⚠️ Notas Importantes

- **Variables de entorno**: Usa `.env` para configuraciones sensibles (no subir a GitHub)
- **Puertos**: Asegúrate de que los puertos 8080, 3000, 3001, 8081, 9090, 27017 estén disponibles
  - Si tienes AppServ u otro servidor en el puerto 80, el frontend usará el puerto 8080 automáticamente
- **Datos persistentes**: Los datos de MongoDB y Grafana se guardan en volúmenes Docker
- **Primera ejecución**: La primera vez puede tardar más debido a la construcción de imágenes
- **OPENAI_API_KEY**: Es **opcional**. Si no la configuras, la generación de imágenes estará deshabilitada pero la aplicación funcionará normalmente
- **Google OAuth**: El Client ID está configurado por defecto. Si quieres usar el tuyo, crea un archivo `.env` con `GOOGLE_CLIENT_ID=tu-client-id`

