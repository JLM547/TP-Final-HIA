# 🚀 Manual de CI/CD - Integración y Despliegue Continuo

## 📋 Tabla de Contenidos

1. [Introducción](#introducción)
2. [Arquitectura del Sistema CI/CD](#arquitectura-del-sistema-cicd)
3. [Configuración Inicial](#configuración-inicial)
4. [Flujo del Pipeline](#flujo-del-pipeline)
5. [Configuración de Secrets en GitHub](#configuración-de-secrets-en-github)
6. [Validación del Despliegue](#validación-del-despliegue)
7. [Troubleshooting](#troubleshooting)

---

## 📖 Introducción

Este proyecto implementa **CI/CD (Continuous Integration/Continuous Deployment)** utilizando **GitHub Actions** para automatizar el proceso de construcción y publicación de imágenes Docker.

### ¿Qué es CI/CD?

- **CI (Continuous Integration)**: Integración continua que verifica que el código funcione correctamente al hacer cambios.
- **CD (Continuous Deployment)**: Despliegue continuo que publica automáticamente las imágenes Docker en Docker Hub.

### Beneficios

✅ **Automatización**: No necesitas construir y subir imágenes manualmente  
✅ **Consistencia**: Cada cambio genera imágenes con versiones únicas  
✅ **Trazabilidad**: Cada imagen está asociada a un commit específico  
✅ **Colaboración**: Todo el equipo puede ver el estado de los builds

---

## 🏗️ Arquitectura del Sistema CI/CD

### Componentes

```
┌─────────────────┐
│  GitHub Repo    │
│   (main branch) │
└────────┬────────┘
         │ Push/Merge
         ▼
┌─────────────────┐
│ GitHub Actions   │
│  (Workflow)      │
└────────┬────────┘
         │
    ┌────┴────┐
    ▼         ▼
┌────────┐ ┌────────┐
│ Build  │ │ Build  │
│Backend │ │Frontend│
└───┬────┘ └───┬────┘
    │         │
    └────┬────┘
         ▼
┌─────────────────┐
│   Docker Hub    │
│  (Registry)     │
└─────────────────┘
```

### Flujo de Trabajo

1. **Trigger**: Push o merge a la rama `main`
2. **Checkout**: GitHub Actions descarga el código
3. **Build**: Construye las imágenes Docker (Backend y Frontend)
4. **Push**: Sube las imágenes a Docker Hub con tags únicos
5. **Summary**: Genera un resumen del proceso

---

## ⚙️ Configuración Inicial

### Requisitos Previos

- ✅ Cuenta en GitHub
- ✅ Cuenta en Docker Hub
- ✅ Repositorio configurado con el workflow

### Estructura del Workflow

El archivo de workflow se encuentra en:
```
.github/workflows/ci-cd.yml
```

### Eventos que Activan el Pipeline

El workflow se ejecuta automáticamente cuando:
- Se hace `push` a la rama `main`
- Se crea un `pull_request` hacia `main`

---

## 🔄 Flujo del Pipeline

### Paso 1: Checkout del Código
```yaml
- name: Checkout code
  uses: actions/checkout@v4
```
Descarga el código del repositorio.

### Paso 2: Configuración de Docker Buildx
```yaml
- name: Set up Docker Buildx
  uses: docker/setup-buildx-action@v3
```
Prepara el entorno para construir imágenes Docker.

### Paso 3: Login a Docker Hub
```yaml
- name: Log in to Docker Hub
  uses: docker/login-action@v3
  with:
    username: ${{ secrets.DOCKER_HUB_USERNAME }}
    password: ${{ secrets.DOCKER_HUB_TOKEN }}
```
Autentica con Docker Hub usando los secrets configurados.

### Paso 4: Extracción de Metadata
```yaml
- name: Extract metadata for Backend
  uses: docker/metadata-action@v5
```
Genera los tags para las imágenes (ej: `main-abc123`, `latest`).

### Paso 5: Build y Push
```yaml
- name: Build and push Backend image
  uses: docker/build-push-action@v5
```
Construye y sube las imágenes a Docker Hub.

### Paso 6: Summary
Genera un resumen visual del proceso en GitHub Actions.

---

## 🔐 Configuración de Secrets en GitHub

### ¿Qué son los Secrets?

Los secrets son variables de entorno encriptadas que GitHub Actions usa para autenticarse con servicios externos (como Docker Hub).

### Secrets Requeridos

Necesitas configurar estos dos secrets en tu repositorio:

1. **`DOCKER_HUB_USERNAME`**: Tu nombre de usuario de Docker Hub
2. **`DOCKER_HUB_TOKEN`**: Tu token de acceso de Docker Hub

### Pasos para Configurar Secrets

#### 1. Obtener Token de Docker Hub

1. Ve a [Docker Hub](https://hub.docker.com/)
2. Inicia sesión con tu cuenta
3. Ve a **Account Settings** → **Security**
4. Haz clic en **New Access Token**
5. Dale un nombre (ej: "GitHub Actions CI/CD")
6. Selecciona permisos: **Read & Write**
7. Copia el token generado (solo se muestra una vez)

#### 2. Agregar Secrets en GitHub

1. Ve a tu repositorio en GitHub
2. Haz clic en **Settings** (Configuración)
3. En el menú lateral, ve a **Secrets and variables** → **Actions**
4. Haz clic en **New repository secret**
5. Agrega los siguientes secrets:

   **Secret 1:**
   - Name: `DOCKER_HUB_USERNAME`
   - Value: Tu nombre de usuario de Docker Hub (ej: `jlm547`)

   **Secret 2:**
   - Name: `DOCKER_HUB_TOKEN`
   - Value: El token que copiaste de Docker Hub

6. Haz clic en **Add secret** para cada uno

### Verificar Secrets Configurados

Una vez configurados, deberías ver:
- ✅ `DOCKER_HUB_USERNAME`
- ✅ `DOCKER_HUB_TOKEN`

En la lista de secrets del repositorio.

---

## ✅ Validación del Despliegue

### Cómo Validar que Funciona

#### 1. Hacer un Commit de Prueba

```bash
# Asegúrate de estar en la rama main
git checkout main

# Haz un cambio pequeño (ej: actualizar README)
echo "# Test CI/CD" >> README.md

# Commit y push
git add README.md
git commit -m "test: Validar pipeline CI/CD"
git push origin main
```

#### 2. Verificar en GitHub Actions

1. Ve a tu repositorio en GitHub
2. Haz clic en la pestaña **Actions**
3. Deberías ver un workflow ejecutándose llamado **"CI/CD Pipeline"**
4. Haz clic en el workflow para ver los detalles
5. Espera a que termine (puede tardar 5-10 minutos)

#### 3. Verificar en Docker Hub

1. Ve a [Docker Hub](https://hub.docker.com/)
2. Busca tus imágenes:
   - `tu-usuario/tienda-backend`
   - `tu-usuario/tienda-frontend`
3. Deberías ver las nuevas imágenes con tags:
   - `latest` (siempre la más reciente)
   - `main-abc123` (tag basado en el commit SHA)

### Indicadores de Éxito

✅ El workflow muestra estado verde (✓)  
✅ Las imágenes aparecen en Docker Hub  
✅ El summary muestra las URLs de las imágenes  
✅ No hay errores en los logs

---

## 🐛 Troubleshooting

### Problema: "Authentication failed"

**Causa**: Los secrets no están configurados correctamente.

**Solución**:
1. Verifica que los secrets estén configurados en GitHub
2. Asegúrate de que el token de Docker Hub tenga permisos de escritura
3. Regenera el token si es necesario

### Problema: "Build failed"

**Causa**: Error en el Dockerfile o dependencias.

**Solución**:
1. Revisa los logs del workflow en GitHub Actions
2. Verifica que los Dockerfiles estén correctos
3. Prueba construir localmente: `docker build -t test .`

### Problema: "Image not found in Docker Hub"

**Causa**: El push falló o el nombre de usuario es incorrecto.

**Solución**:
1. Verifica que `DOCKER_HUB_USERNAME` sea correcto
2. Asegúrate de que el token tenga permisos de escritura
3. Revisa los logs del paso "Build and push"

### Problema: "Workflow no se ejecuta"

**Causa**: El archivo no está en la rama correcta o tiene errores de sintaxis.

**Solución**:
1. Verifica que el archivo esté en `.github/workflows/ci-cd.yml`
2. Asegúrate de que esté en la rama `main`
3. Valida la sintaxis YAML del archivo

---

## 📊 Monitoreo del Pipeline

### Ver Estado de los Builds

1. **GitHub Actions Tab**: Ve a la pestaña "Actions" en tu repositorio
2. **Historial**: Verás todos los workflows ejecutados
3. **Logs**: Haz clic en cualquier workflow para ver logs detallados

### Tags de las Imágenes

Las imágenes se etiquetan automáticamente:
- `latest`: Siempre apunta a la última versión en `main`
- `main-<SHA>`: Tag único basado en el commit SHA

Ejemplo:
- `jlm547/tienda-backend:latest`
- `jlm547/tienda-backend:main-abc123def456`

---

## 🔄 Actualizar el Pipeline

### Modificar el Workflow

1. Edita el archivo `.github/workflows/ci-cd.yml`
2. Haz commit y push
3. El nuevo workflow se aplicará en el próximo push

### Agregar Nuevos Pasos

Puedes agregar pasos adicionales como:
- Ejecutar tests
- Linting
- Notificaciones
- Deploy a servidor

---

## 📝 Integrantes del Proyecto

Este proyecto fue desarrollado por **Grupo 13**:

- FLORES, Jonatan Uziel
- MORALES, Jeremias Leonel
- MORALES, Malena
- GUTIERREZ, Sergio Leonardo
- BARBOZA, Gonzalo

Los nombres de los integrantes aparecen en el footer de la aplicación.

---

## 📚 Recursos Adicionales

- [Documentación de GitHub Actions](https://docs.github.com/en/actions)
- [Docker Hub Documentation](https://docs.docker.com/docker-hub/)
- [Docker Buildx](https://docs.docker.com/buildx/working-with-buildx/)

---

## ✅ Checklist de Configuración

Antes de hacer el commit de prueba, verifica:

- [ ] Secrets configurados en GitHub (`DOCKER_HUB_USERNAME` y `DOCKER_HUB_TOKEN`)
- [ ] Archivo `.github/workflows/ci-cd.yml` existe y está en `main`
- [ ] Dockerfiles están correctos (Backend y Frontend)
- [ ] Footer actualizado con nombres de integrantes
- [ ] Repositorio está sincronizado con GitHub

---

**¡Listo para CI/CD!** 🚀

Cuando hagas un push a `main`, el pipeline se ejecutará automáticamente.

