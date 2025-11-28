const mongoose = require('mongoose');

// Usar variable de entorno o valor por defecto para Docker
const URI = process.env.MONGODB_URI || 'mongodb://admin:admin123@localhost:27017/tienda?authSource=admin';

mongoose.connect(URI)
  .then(db => {
    console.log('Base de datos conectada');
    console.log('URI:', URI.replace(/\/\/.*@/, '//***:***@')); // Ocultar credenciales en logs
  })
  .catch(err => {
    console.error('Error al conectar a la base de datos', err);
    process.exit(1); // Salir si no puede conectar
  });

module.exports = mongoose; // Exporta la conexión para usarla en otros archivos
// Este archivo establece la conexión a la base de datos MongoDB usando Mongoose.