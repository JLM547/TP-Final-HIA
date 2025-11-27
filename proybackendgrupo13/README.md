# Backend - Grupo 13

Backend del proyecto desarrollado con Node.js, Express y MongoDB.

## 📋 Requisitos Previos

- Node.js (versión 14 o superior)
- MongoDB instalado y corriendo localmente
- npm o yarn

## 🚀 Instalación y Configuración

1. **Clonar el repositorio** (si aún no lo has hecho):
```bash
git clone [url-del-repositorio]
cd DEFINITIVOTPFinal-PYSW/proybackendgrupo13
```

2. **Instalar dependencias**:
```bash
npm install
```

3. **Configurar variables de entorno**:

   Opción A: Crear archivo `config.js` (recomendado para desarrollo local):
   ```bash
   cp config.example.js config.js
   ```
   Luego edita `config.js` con tus valores:
   - `GOOGLE_CLIENT_ID`: Tu Client ID de Google OAuth
   - `JWT_SECRET`: Una clave secreta para JWT (cambia el valor por defecto)
   - `MONGODB_URI`: URI de tu base de datos MongoDB
   - `PORT`: Puerto del servidor (por defecto 3000)

   Opción B: Usar variables de entorno (recomendado para producción):
   ```bash
   # Crear archivo .env
   GOOGLE_CLIENT_ID=tu-google-client-id
   JWT_SECRET=tu-jwt-secret-seguro
   MONGODB_URI=mongodb://localhost:27017/tu-base-de-datos
   PORT=3000
   NODE_ENV=development
   OPENAI_API_KEY=tu-openai-api-key  # Si usas generación de imágenes
   ```

4. **Asegúrate de que MongoDB esté corriendo**:
   - Si usas MongoDB local: `mongod` o inicia el servicio de MongoDB
   - Si usas MongoDB Atlas: actualiza la URI en `config.js` o `.env`

## ▶️ Ejecutar el Proyecto

**Modo desarrollo** (con auto-reload):
```bash
npm run dev
```

**Modo producción**:
```bash
npm start
```

El servidor estará disponible en `http://localhost:3000` (o el puerto que hayas configurado).

## 📁 Estructura del Proyecto

```
proybackendgrupo13/
├── config.example.js      # Plantilla de configuración
├── config.js              # Archivo de configuración (no se sube a Git)
├── index.js               # Punto de entrada del servidor
├── database.js            # Configuración de MongoDB
├── controllers/           # Controladores de las rutas
├── models/                # Modelos de Mongoose
├── routes/                # Definición de rutas
├── middleware/            # Middlewares (auth, etc.)
└── services/              # Servicios auxiliares
```

## 🔑 Variables de Entorno Importantes

- `GOOGLE_CLIENT_ID`: Para autenticación con Google OAuth
- `JWT_SECRET`: Clave secreta para firmar tokens JWT
- `MONGODB_URI`: URI de conexión a MongoDB
- `OPENAI_API_KEY`: API Key de OpenAI (para generación de imágenes)
- `PORT`: Puerto del servidor (opcional, por defecto 3000)

## 📝 Notas

- El archivo `config.js` está en `.gitignore` y no se subirá al repositorio
- Usa `config.example.js` como referencia para crear tu propio `config.js`
- Si no existe `config.js`, el servidor usará variables de entorno o valores por defecto