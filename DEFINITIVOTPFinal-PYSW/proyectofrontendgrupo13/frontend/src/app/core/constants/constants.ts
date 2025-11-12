// src/app/core/constants.ts
// this file works as a central place to define constants used across the application, in this case, the API base URL
// It can be imported in any component or service that needs to make API calls

// Detectar si estamos en producción (GitHub Pages) o desarrollo
const isProduction = window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1';

// URL del backend - Cambia esta URL por la URL de tu backend desplegado
// Ejemplo: 'https://tu-backend.herokuapp.com/api' o 'https://tu-backend.onrender.com/api'
// ⚠️ IMPORTANTE: Reemplaza 'https://tu-backend-url.com/api' con tu URL real del backend desplegado
// Ver INSTRUCCIONES_URL_BACKEND.md en la raíz del proyecto para más detalles
const PRODUCTION_API_URL = 'https://tu-backend-url.com/api'; // ⚠️ CAMBIA ESTA URL - Ver INSTRUCCIONES_URL_BACKEND.md
const DEVELOPMENT_API_URL = 'http://localhost:3000/api';

export const API_BASE_URL = isProduction ? PRODUCTION_API_URL : DEVELOPMENT_API_URL;