# 🚀 Guía de Despliegue en GitHub Pages

Esta guía te ayudará a desplegar el frontend de tu proyecto en GitHub Pages.

## 📋 Requisitos Previos

1. Tener el repositorio en GitHub
2. Tener el backend desplegado en algún servicio (Render, Heroku, Railway, etc.)
3. Tener permisos de administrador en el repositorio

## 🔧 Pasos para Desplegar

### 1. Configurar la URL del Backend

**IMPORTANTE**: Antes de desplegar, debes actualizar la URL del backend en producción.

Edita el archivo:
```
proyectofrontendgrupo13/frontend/src/app/core/constants/constants.ts
```

Cambia esta línea:
```typescript
const PRODUCTION_API_URL = 'https://tu-backend-url.com/api'; // ⚠️ CAMBIA ESTA URL
```

Por la URL real de tu backend desplegado, por ejemplo:
```typescript
const PRODUCTION_API_URL = 'https://tu-backend.herokuapp.com/api';
// o
const PRODUCTION_API_URL = 'https://tu-backend.onrender.com/api';
// o
const PRODUCTION_API_URL = 'https://tu-backend.railway.app/api';
```

### 2. Habilitar GitHub Pages en el Repositorio

1. Ve a tu repositorio en GitHub
2. Click en **Settings** (Configuración)
3. En el menú lateral, busca **Pages**
4. En **Source**, selecciona **GitHub Actions**
5. Guarda los cambios

### 3. Configurar el Workflow (Ya está creado)

El archivo `.github/workflows/deploy-gh-pages.yml` ya está configurado y se ejecutará automáticamente cuando:
- Hagas push a la rama `main` (o `master`)
- O lo ejecutes manualmente desde la pestaña **Actions**

### 4. Verificar la Rama Principal

Si tu rama principal se llama `master` en lugar de `main`, edita el archivo:
```
.github/workflows/deploy-gh-pages.yml
```

Y cambia:
```yaml
branches:
  - main
```

Por:
```yaml
branches:
  - master
```

### 5. Hacer Push y Esperar

1. Haz commit y push de todos los cambios:
```bash
git add .
git commit -m "Configurar despliegue en GitHub Pages"
git push
```

2. Ve a la pestaña **Actions** en GitHub
3. Verás que se ejecuta el workflow "Deploy to GitHub Pages"
4. Espera a que termine (puede tardar 2-5 minutos)

### 6. Acceder a tu Aplicación

Una vez que el workflow termine exitosamente:
1. Ve a **Settings** > **Pages** en tu repositorio
2. Verás la URL de tu sitio, algo como:
   ```
   https://tu-usuario.github.io/tu-repositorio/
   ```

## ⚠️ Notas Importantes

### Backend debe estar desplegado

- GitHub Pages solo sirve archivos estáticos (HTML, CSS, JS)
- **NO puede ejecutar el backend**
- Debes tener el backend desplegado en otro servicio (Render, Heroku, Railway, etc.)
- La URL del backend debe estar configurada en `constants.ts`

### CORS en el Backend

Asegúrate de que tu backend permita peticiones desde GitHub Pages. En tu backend, configura CORS para permitir tu dominio de GitHub Pages:

```javascript
// En index.js del backend
app.use(cors({ 
  origin: [
    'http://localhost:4200',
    'https://tu-usuario.github.io'  // Agrega tu dominio de GitHub Pages
  ] 
}));
```

### Routing de Angular

El archivo `404.html` está configurado para manejar el routing de Angular en GitHub Pages. Si tienes problemas con las rutas, verifica que el archivo esté en la carpeta correcta.

## 🔍 Solución de Problemas

### El workflow falla

1. Verifica que Node.js esté instalado correctamente
2. Revisa los logs en la pestaña **Actions**
3. Asegúrate de que `package-lock.json` esté actualizado

### La aplicación no carga

1. Verifica la URL del backend en `constants.ts`
2. Revisa la consola del navegador para errores
3. Asegúrate de que el backend esté corriendo y accesible

### Las rutas no funcionan

1. Verifica que `404.html` esté en `src/`
2. Asegúrate de que `baseHref` esté configurado en `angular.json`

## 📚 Recursos Adicionales

- [Documentación de GitHub Pages](https://docs.github.com/en/pages)
- [Angular Deployment](https://angular.io/guide/deployment)

