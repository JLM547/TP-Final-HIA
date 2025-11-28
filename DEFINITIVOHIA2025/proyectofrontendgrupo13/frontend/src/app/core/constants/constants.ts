// src/app/core/constants.ts
// this file works as a central place to define constants used across the application, in this case, the API base URL
// It can be imported in any component or service that needs to make API calls

// En Docker, el frontend usa proxy de nginx, así que usamos URL relativa
// En desarrollo local, usar localhost:3000
// El proxy de nginx en docker-compose redirige /api a backend:3000
export const API_BASE_URL = '/api';