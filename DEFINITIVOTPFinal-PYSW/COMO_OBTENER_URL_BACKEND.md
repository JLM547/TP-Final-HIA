# 🔗 Guía Paso a Paso: Cómo Obtener la URL del Backend

Esta guía te muestra **exactamente** dónde encontrar la URL de tu backend después de desplegarlo.

## 📍 ¿Qué URL necesito?

Necesitas la URL completa de tu backend desplegado. Ejemplos:
- ✅ `https://mi-backend-grupo13.onrender.com`
- ✅ `https://mi-backend.railway.app`
- ✅ `https://mi-app-backend.herokuapp.com`

**IMPORTANTE**: Esta URL debe terminar con `/api` cuando la uses en el código.

---

## 🚀 Opción 1: Render (Recomendado - Más Fácil y Gratis)

### Paso 1: Crear cuenta y conectar repositorio
1. Ve a [render.com](https://render.com)
2. Click en **"Get Started for Free"** o **"Sign Up"**
3. Conecta tu cuenta de GitHub
4. Autoriza a Render a acceder a tus repositorios

### Paso 2: Crear nuevo servicio
1. En el Dashboard, click en **"New +"**
2. Selecciona **"Web Service"**
3. Conecta tu repositorio de GitHub
4. Selecciona el repositorio que contiene tu backend

### Paso 3: Configurar el servicio
Completa estos campos:

- **Name**: `mi-backend-grupo13` (o el nombre que quieras)
- **Region**: Elige el más cercano (ej: `Oregon (US West)`)
- **Branch**: `main` (o `master` si es tu rama principal)
- **Root Directory**: `proybackendgrupo13` ⚠️ **IMPORTANTE**: Pon solo el nombre de la carpeta
- **Runtime**: `Node`
- **Build Command**: `npm install`
- **Start Command**: `npm start`

### Paso 4: Agregar variables de entorno
En la sección **"Environment Variables"**, agrega:

```
GOOGLE_CLIENT_ID = tu-google-client-id
JWT_SECRET = tu-jwt-secret-seguro
MONGODB_URI = mongodb+srv://usuario:password@cluster.mongodb.net/branch-cris-nil
PORT = 3000
NODE_ENV = production
OPENAI_API_KEY = tu-openai-api-key (si la usas)
```

### Paso 5: Crear y esperar
1. Click en **"Create Web Service"**
2. Espera 2-5 minutos mientras Render construye y despliega tu backend
3. Verás un log en tiempo real del proceso

### Paso 6: Obtener la URL
1. Una vez que veas **"Your service is live"** en verde
2. En la parte superior de la página verás una URL como:
   ```
   https://mi-backend-grupo13.onrender.com
   ```
3. **¡ESA ES TU URL!** 📌

### Paso 7: Usar la URL en tu código
Abre: `proyectofrontendgrupo13/frontend/src/app/core/constants/constants.ts`

Y cambia:
```typescript
const PRODUCTION_API_URL = 'https://tu-backend-url.com/api';
```

Por:
```typescript
const PRODUCTION_API_URL = 'https://mi-backend-grupo13.onrender.com/api';
```

**Nota**: Agrega `/api` al final porque todas tus rutas del backend empiezan con `/api`

---

## 🚂 Opción 2: Railway (Alternativa Gratis)

### Paso 1: Crear cuenta
1. Ve a [railway.app](https://railway.app)
2. Click en **"Start a New Project"**
3. Conecta con GitHub

### Paso 2: Crear proyecto
1. Click en **"New Project"**
2. Selecciona **"Deploy from GitHub repo"**
3. Elige tu repositorio

### Paso 3: Configurar
1. Railway detectará automáticamente que es Node.js
2. En **"Settings"** > **"Root Directory"**, pon: `proybackendgrupo13`
3. En **"Variables"**, agrega las mismas variables de entorno que en Render

### Paso 4: Obtener la URL
1. Una vez desplegado, ve a la pestaña **"Settings"**
2. En **"Domains"**, verás tu URL, algo como:
   ```
   https://mi-backend-grupo13.up.railway.app
   ```
3. **¡ESA ES TU URL!** 📌

### Paso 5: Usar en el código
```typescript
const PRODUCTION_API_URL = 'https://mi-backend-grupo13.up.railway.app/api';
```

---

## 🟣 Opción 3: Heroku (Requiere verificación de tarjeta)

### Paso 1: Instalar Heroku CLI
1. Descarga desde [devcenter.heroku.com/articles/heroku-cli](https://devcenter.heroku.com/articles/heroku-cli)
2. Instálalo en tu computadora

### Paso 2: Login
```bash
heroku login
```

### Paso 3: Crear app
```bash
cd DEFINITIVOTPFinal-PYSW/proybackendgrupo13
heroku create mi-backend-grupo13
```

### Paso 4: Configurar variables
```bash
heroku config:set GOOGLE_CLIENT_ID=tu-id
heroku config:set JWT_SECRET=tu-secret
heroku config:set MONGODB_URI=tu-mongodb-uri
heroku config:set NODE_ENV=production
```

### Paso 5: Desplegar
```bash
git push heroku main
```

### Paso 6: Obtener la URL
Después del despliegue, verás algo como:
```
https://mi-backend-grupo13.herokuapp.com
```

**¡ESA ES TU URL!** 📌

### Paso 7: Usar en el código
```typescript
const PRODUCTION_API_URL = 'https://mi-backend-grupo13.herokuapp.com/api';
```

---

## ✅ Verificación: ¿Cómo sé que tengo la URL correcta?

### Prueba 1: Abrir en el navegador
Abre tu URL en el navegador (sin `/api`):
```
https://mi-backend-grupo13.onrender.com
```

Deberías ver algo como:
- Un error de "Cannot GET /" (esto es NORMAL, significa que el servidor está funcionando)
- O un mensaje de error de Express (también es normal)

### Prueba 2: Probar un endpoint
Intenta acceder a un endpoint público, por ejemplo:
```
https://mi-backend-grupo13.onrender.com/api/productos
```

Si obtienes una respuesta (aunque sea un error de autenticación), significa que la URL es correcta.

### Prueba 3: Verificar en los logs
En Render/Railway/Heroku, ve a la pestaña **"Logs"** y deberías ver:
```
Servidor corriendo en el puerto 3000
Base de datos conectada
```

---

## 🎯 Resumen Rápido

1. **Despliega tu backend** en Render, Railway o Heroku
2. **Copia la URL** que te dan (ej: `https://mi-backend.onrender.com`)
3. **Abre** `proyectofrontendgrupo13/frontend/src/app/core/constants/constants.ts`
4. **Reemplaza** `'https://tu-backend-url.com/api'` por `'https://mi-backend.onrender.com/api'`
5. **Guarda** y haz commit

---

## ❓ Preguntas Frecuentes

### ¿Necesito MongoDB desplegado también?
Sí, necesitas MongoDB. Opciones:
- **MongoDB Atlas** (gratis): [mongodb.com/cloud/atlas](https://www.mongodb.com/cloud/atlas)
- Crea un cluster gratuito y obtén la URI de conexión
- Usa esa URI en `MONGODB_URI` en las variables de entorno

### ¿Por qué agrego `/api` al final?
Porque en tu `index.js` del backend, todas las rutas empiezan con `/api`:
```javascript
app.use('/api/auth', authRoutes);
app.use('/api/productos', productoRoutes);
// etc...
```

### ¿Puedo cambiar la URL después?
Sí, solo actualiza `constants.ts` y haz push. El cambio se aplicará en el próximo despliegue.

### ¿La URL es permanente?
- **Render**: Sí, a menos que elimines el servicio
- **Railway**: Sí, a menos que elimines el proyecto
- **Heroku**: Sí, a menos que elimines la app

---

## 🆘 ¿Necesitas ayuda?

Si tienes problemas:
1. Revisa los logs en la plataforma de despliegue
2. Verifica que todas las variables de entorno estén configuradas
3. Asegúrate de que MongoDB esté accesible desde internet (si usas Atlas)
4. Verifica que el puerto esté configurado correctamente

