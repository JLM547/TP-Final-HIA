# 📍 ¿De dónde saco la URL del backend?

## ⚠️ IMPORTANTE: Solo necesitas cambiar UNA URL

Solo necesitas actualizar **UNA URL** en este archivo:
```
proyectofrontendgrupo13/frontend/src/app/core/constants/constants.ts
```

## 🔍 ¿Dónde está la URL que debo cambiar?

Abre el archivo `constants.ts` y busca esta línea:

```typescript
const PRODUCTION_API_URL = 'https://tu-backend-url.com/api'; // ⚠️ CAMBIA ESTA URL
```

## 🌐 ¿De dónde saco la URL del backend?

La URL depende de **dónde despliegues tu backend**. Aquí tienes las opciones más comunes:

### Opción 1: Render (Recomendado - Gratis)

1. Ve a [render.com](https://render.com) y crea una cuenta
2. Conecta tu repositorio de GitHub
3. Selecciona "New Web Service"
4. Elige tu repositorio y la carpeta `proybackendgrupo13`
5. Configura:
   - **Build Command**: `npm install`
   - **Start Command**: `npm start`
   - **Environment Variables**: Agrega las variables de `config.js`
6. Render te dará una URL como: `https://tu-proyecto.onrender.com`
7. **Tu URL será**: `https://tu-proyecto.onrender.com/api`

### Opción 2: Railway (Gratis con límites)

1. Ve a [railway.app](https://railway.app) y crea una cuenta
2. Conecta tu repositorio
3. Railway detectará automáticamente Node.js
4. Configura las variables de entorno
5. Railway te dará una URL como: `https://tu-proyecto.railway.app`
6. **Tu URL será**: `https://tu-proyecto.railway.app/api`

### Opción 3: Heroku (Requiere tarjeta de crédito para verificación)

1. Ve a [heroku.com](https://heroku.com) y crea una cuenta
2. Instala Heroku CLI
3. Crea una app: `heroku create tu-nombre-app`
4. Despliega: `git push heroku main`
5. Heroku te dará una URL como: `https://tu-nombre-app.herokuapp.com`
6. **Tu URL será**: `https://tu-nombre-app.herokuapp.com/api`

### Opción 4: Vercel (Gratis)

1. Ve a [vercel.com](https://vercel.com) y crea una cuenta
2. Conecta tu repositorio
3. Configura el proyecto
4. Vercel te dará una URL como: `https://tu-proyecto.vercel.app`
5. **Tu URL será**: `https://tu-proyecto.vercel.app/api`

## 📝 Ejemplo de cómo quedaría

Si desplegaste en Render y tu URL es `https://mi-backend-grupo13.onrender.com`, entonces:

```typescript
const PRODUCTION_API_URL = 'https://mi-backend-grupo13.onrender.com/api';
```

**Nota**: Siempre agrega `/api` al final porque tu backend tiene las rutas bajo `/api`

## ✅ Pasos para actualizar

1. **Despliega tu backend** en uno de los servicios mencionados
2. **Copia la URL** que te dan (sin `/api` al final)
3. **Abre** `proyectofrontendgrupo13/frontend/src/app/core/constants/constants.ts`
4. **Reemplaza** `'https://tu-backend-url.com/api'` por tu URL real + `/api`
5. **Guarda** el archivo
6. **Haz commit y push** para que se actualice en GitHub Pages

## 🔒 Configuración de CORS

**IMPORTANTE**: Cuando despliegues el backend, asegúrate de configurar CORS para permitir tu dominio de GitHub Pages.

En tu `index.js` del backend, actualiza CORS:

```javascript
// En lugar de:
app.use(cors({ origin: 'http://localhost:4200' }));

// Usa:
app.use(cors({ 
  origin: [
    'http://localhost:4200',  // Para desarrollo local
    'https://tu-usuario.github.io'  // Tu dominio de GitHub Pages
  ] 
}));
```

## ❓ ¿Aún no has desplegado el backend?

Si aún no has desplegado el backend, puedes:

1. **Dejar la URL como está** por ahora (no funcionará en producción hasta que la cambies)
2. **Desplegar el backend primero** (recomendado)
3. **Luego actualizar la URL** en `constants.ts`

La aplicación seguirá funcionando en desarrollo local (`localhost:4200`) porque usa `DEVELOPMENT_API_URL` cuando detecta que estás en localhost.

