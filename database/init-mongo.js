// Script de inicialización de MongoDB
// Este script se ejecuta automáticamente cuando el contenedor de MongoDB se crea por primera vez

// Crear la base de datos 'tienda'
db = db.getSiblingDB('tienda');

// Crear un usuario para la aplicación (opcional, ya tenemos el root)
// db.createUser({
//   user: 'app_user',
//   pwd: 'app_password',
//   roles: [
//     {
//       role: 'readWrite',
//       db: 'tienda'
//     }
//   ]
// });

// Crear colecciones iniciales (opcional, se crearán automáticamente cuando se usen)
// db.createCollection('usuarios');
// db.createCollection('productos');
// db.createCollection('pedidos');

print('Base de datos "tienda" inicializada correctamente');

