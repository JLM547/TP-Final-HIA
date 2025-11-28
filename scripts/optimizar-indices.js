/**
 * Script de optimización de MongoDB - Equivalente a MySQLTuner/pgBadger
 * Crea índices optimizados para mejorar el rendimiento de las consultas
 * 
 * Uso: node scripts/optimizar-indices.js
 */

const mongoose = require('mongoose');
const Producto = require('../models/producto');
const Categoria = require('../models/categoria.model');
const Pedido = require('../models/pedido');
const Cliente = require('../models/cliente.model');
const Usuario = require('../models/usuario');
const Rol = require('../models/rol');
const Combo = require('../models/Combo');
const Oferta = require('../models/Oferta');
const Repartidor = require('../models/Repartidor');
const Calificacion = require('../models/Calificacion');
const Venta = require('../models/Venta');

// Configuración
const URI = 'mongodb://admin:admin123@localhost:27017/tienda?authSource=admin';

async function optimizarIndices() {
  try {
    console.log('🚀 Iniciando optimización de índices MongoDB...\n');
    const inicio = Date.now();

    // Conectar a la base de datos
    await mongoose.connect(URI);
    console.log('✅ Base de datos conectada\n');

    const db = mongoose.connection.db;
    const resultados = [];

    // ============================================
    // 1. ÍNDICES PARA PRODUCTOS
    // ============================================
    console.log('📦 Optimizando índices de Productos...');
    try {
      // Índice único en nombre (ya existe por unique: true, pero lo verificamos)
      await Producto.collection.createIndex({ nombre: 1 }, { unique: true, name: 'idx_producto_nombre' });
      console.log('   ✅ Índice: nombre (único)');

      // Índice en categoriaId (muy usado en búsquedas)
      await Producto.collection.createIndex({ categoriaId: 1 }, { name: 'idx_producto_categoria' });
      console.log('   ✅ Índice: categoriaId');

      // Índice compuesto para búsquedas por categoría y disponibilidad
      await Producto.collection.createIndex({ categoriaId: 1, disponible: 1 }, { name: 'idx_producto_categoria_disponible' });
      console.log('   ✅ Índice compuesto: categoriaId + disponible');

      // Índice en precio para ordenamiento y rangos
      await Producto.collection.createIndex({ precio: 1 }, { name: 'idx_producto_precio' });
      console.log('   ✅ Índice: precio');

      // Índice en stock para consultas de disponibilidad
      await Producto.collection.createIndex({ stock: 1 }, { name: 'idx_producto_stock' });
      console.log('   ✅ Índice: stock');

      // Índice en popularidad para ordenamiento
      await Producto.collection.createIndex({ popularidad: -1 }, { name: 'idx_producto_popularidad' });
      console.log('   ✅ Índice: popularidad (descendente)');

      // Índice compuesto para búsquedas avanzadas
      await Producto.collection.createIndex({ disponible: 1, popularidad: -1, precio: 1 }, { name: 'idx_producto_avanzado' });
      console.log('   ✅ Índice compuesto: disponible + popularidad + precio');

      resultados.push({ coleccion: 'productos', indices: 7 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 2. ÍNDICES PARA PEDIDOS
    // ============================================
    console.log('\n🛒 Optimizando índices de Pedidos...');
    try {
      // Índice en clienteId (muy usado en consultas)
      await Pedido.collection.createIndex({ clienteId: 1 }, { name: 'idx_pedido_cliente' });
      console.log('   ✅ Índice: clienteId');

      // Índice en estado para filtros
      await Pedido.collection.createIndex({ estado: 1 }, { name: 'idx_pedido_estado' });
      console.log('   ✅ Índice: estado');

      // Índice en fechaPedido para ordenamiento temporal
      await Pedido.collection.createIndex({ fechaPedido: -1 }, { name: 'idx_pedido_fecha' });
      console.log('   ✅ Índice: fechaPedido (descendente)');

      // Índice compuesto cliente + estado (muy común)
      await Pedido.collection.createIndex({ clienteId: 1, estado: 1 }, { name: 'idx_pedido_cliente_estado' });
      console.log('   ✅ Índice compuesto: clienteId + estado');

      // Índice compuesto cliente + fecha (historial)
      await Pedido.collection.createIndex({ clienteId: 1, fechaPedido: -1 }, { name: 'idx_pedido_cliente_fecha' });
      console.log('   ✅ Índice compuesto: clienteId + fechaPedido');

      // Índice en repartidorId para consultas de delivery
      await Pedido.collection.createIndex({ repartidorId: 1 }, { name: 'idx_pedido_repartidor' });
      console.log('   ✅ Índice: repartidorId');

      // Índice compuesto repartidor + estado
      await Pedido.collection.createIndex({ repartidorId: 1, estado: 1 }, { name: 'idx_pedido_repartidor_estado' });
      console.log('   ✅ Índice compuesto: repartidorId + estado');

      // Índice en total para análisis financiero
      await Pedido.collection.createIndex({ total: 1 }, { name: 'idx_pedido_total' });
      console.log('   ✅ Índice: total');

      // Índice en createdAt para timestamps
      await Pedido.collection.createIndex({ createdAt: -1 }, { name: 'idx_pedido_createdAt' });
      console.log('   ✅ Índice: createdAt (descendente)');

      resultados.push({ coleccion: 'pedidos', indices: 9 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 3. ÍNDICES PARA CLIENTES
    // ============================================
    console.log('\n👥 Optimizando índices de Clientes...');
    try {
      // Índice único en usuarioId (ya existe, pero lo verificamos)
      await Cliente.collection.createIndex({ usuarioId: 1 }, { unique: true, name: 'idx_cliente_usuario' });
      console.log('   ✅ Índice: usuarioId (único)');

      // Índice en puntos para consultas de fidelidad
      await Cliente.collection.createIndex({ puntos: -1 }, { name: 'idx_cliente_puntos' });
      console.log('   ✅ Índice: puntos (descendente)');

      resultados.push({ coleccion: 'clientes', indices: 2 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 4. ÍNDICES PARA USUARIOS
    // ============================================
    console.log('\n👤 Optimizando índices de Usuarios...');
    try {
      // Índices únicos ya existen (username, email), pero los verificamos
      await Usuario.collection.createIndex({ username: 1 }, { unique: true, name: 'idx_usuario_username' });
      console.log('   ✅ Índice: username (único)');

      await Usuario.collection.createIndex({ email: 1 }, { unique: true, name: 'idx_usuario_email' });
      console.log('   ✅ Índice: email (único)');

      // Índice en rolId para consultas por rol
      await Usuario.collection.createIndex({ rolId: 1 }, { name: 'idx_usuario_rol' });
      console.log('   ✅ Índice: rolId');

      // Índice en estado para filtros
      await Usuario.collection.createIndex({ estado: 1 }, { name: 'idx_usuario_estado' });
      console.log('   ✅ Índice: estado');

      // Índice compuesto rol + estado
      await Usuario.collection.createIndex({ rolId: 1, estado: 1 }, { name: 'idx_usuario_rol_estado' });
      console.log('   ✅ Índice compuesto: rolId + estado');

      resultados.push({ coleccion: 'usuarios', indices: 5 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 5. ÍNDICES PARA CATEGORÍAS
    // ============================================
    console.log('\n📋 Optimizando índices de Categorías...');
    try {
      // Índice único en nombre (ya existe)
      await Categoria.collection.createIndex({ nombre: 1 }, { unique: true, name: 'idx_categoria_nombre' });
      console.log('   ✅ Índice: nombre (único)');

      // Índice en estado para filtros
      await Categoria.collection.createIndex({ estado: 1 }, { name: 'idx_categoria_estado' });
      console.log('   ✅ Índice: estado');

      resultados.push({ coleccion: 'categorias', indices: 2 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 6. ÍNDICES PARA COMBOS
    // ============================================
    console.log('\n🍔 Optimizando índices de Combos...');
    try {
      await Combo.collection.createIndex({ nombre: 1 }, { unique: true, name: 'idx_combo_nombre' });
      console.log('   ✅ Índice: nombre (único)');

      await Combo.collection.createIndex({ activo: 1 }, { name: 'idx_combo_activo' });
      console.log('   ✅ Índice: activo');

      await Combo.collection.createIndex({ precioFinal: 1 }, { name: 'idx_combo_precio' });
      console.log('   ✅ Índice: precioFinal');

      resultados.push({ coleccion: 'combos', indices: 3 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 7. ÍNDICES PARA OFERTAS
    // ============================================
    console.log('\n🎯 Optimizando índices de Ofertas...');
    try {
      await Oferta.collection.createIndex({ activa: 1 }, { name: 'idx_oferta_activa' });
      console.log('   ✅ Índice: activa');

      await Oferta.collection.createIndex({ fechaInicio: 1, fechaFin: 1 }, { name: 'idx_oferta_fechas' });
      console.log('   ✅ Índice compuesto: fechaInicio + fechaFin');

      resultados.push({ coleccion: 'ofertas', indices: 2 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 8. ÍNDICES PARA CALIFICACIONES
    // ============================================
    console.log('\n⭐ Optimizando índices de Calificaciones...');
    try {
      // Índice único en pedidoId (ya existe por unique: true, pero lo verificamos)
      await Calificacion.collection.createIndex({ pedidoId: 1 }, { unique: true, name: 'idx_calificacion_pedido' });
      console.log('   ✅ Índice: pedidoId (único)');

      // Índice en clienteId para consultas por cliente
      await Calificacion.collection.createIndex({ clienteId: 1 }, { name: 'idx_calificacion_cliente' });
      console.log('   ✅ Índice: clienteId');

      // Índice en fechaCalificacion para ordenamiento temporal
      await Calificacion.collection.createIndex({ fechaCalificacion: -1 }, { name: 'idx_calificacion_fecha' });
      console.log('   ✅ Índice: fechaCalificacion (descendente)');

      // Índice compuesto cliente + fecha
      await Calificacion.collection.createIndex({ clienteId: 1, fechaCalificacion: -1 }, { name: 'idx_calificacion_cliente_fecha' });
      console.log('   ✅ Índice compuesto: clienteId + fechaCalificacion');

      // Índice en puntuación promedio (para análisis)
      await Calificacion.collection.createIndex({ puntuacionComida: 1, puntuacionServicio: 1, puntuacionEntrega: 1 }, { name: 'idx_calificacion_puntuaciones' });
      console.log('   ✅ Índice compuesto: puntuaciones');

      resultados.push({ coleccion: 'calificaciones', indices: 5 });
    } catch (error) {
      console.log(`   ⚠️  Algunos índices ya existían: ${error.message}`);
    }

    // ============================================
    // 9. ANÁLISIS DE RENDIMIENTO
    // ============================================
    console.log('\n📊 Analizando índices creados...');
    
    // Obtener todas las colecciones de la base de datos
    const coleccionesDB = await db.listCollections().toArray();
    const nombresColecciones = coleccionesDB.map(c => c.name);
    
    console.log(`   Colecciones encontradas: ${nombresColecciones.join(', ')}\n`);
    
    const estadisticas = [];

    for (const nombreColeccion of nombresColecciones) {
      try {
        const coleccion = db.collection(nombreColeccion);
        const indices = await coleccion.indexes();
        
        // Usar el comando collStats de MongoDB
        const stats = await db.command({ collStats: nombreColeccion });
        const count = await coleccion.countDocuments();
        
        estadisticas.push({
          coleccion: nombreColeccion,
          indices: indices.length,
          documentos: count,
          tamaño: ((stats.size || 0) / 1024 / 1024).toFixed(2) + ' MB',
          indicesMB: ((stats.totalIndexSize || 0) / 1024 / 1024).toFixed(2) + ' MB'
        });
      } catch (error) {
        // Si falla collStats, intentar con countDocuments al menos
        try {
          const coleccion = db.collection(nombreColeccion);
          const indices = await coleccion.indexes();
          const count = await coleccion.countDocuments();
          
          estadisticas.push({
            coleccion: nombreColeccion,
            indices: indices.length,
            documentos: count,
            tamaño: 'N/A',
            indicesMB: 'N/A'
          });
        } catch (err) {
          console.log(`   ⚠️  Error obteniendo stats de ${nombreColeccion}: ${error.message}`);
        }
      }
    }

    // Resumen final
    const tiempoTotal = ((Date.now() - inicio) / 1000).toFixed(2);
    console.log('\n' + '='.repeat(70));
    console.log('📊 RESUMEN DE OPTIMIZACIÓN');
    console.log('='.repeat(70));
    console.log('\n📈 Estadísticas de Colecciones:');
    console.log('-'.repeat(70));
    console.log('Colección'.padEnd(15) + 'Índices'.padEnd(10) + 'Documentos'.padEnd(15) + 'Tamaño'.padEnd(15) + 'Índices MB');
    console.log('-'.repeat(70));
    
    estadisticas.forEach(stat => {
      console.log(
        stat.coleccion.padEnd(15) +
        stat.indices.toString().padEnd(10) +
        stat.documentos.toString().padEnd(15) +
        stat.tamaño.padEnd(15) +
        stat.indicesMB
      );
    });

    const totalIndices = estadisticas.reduce((sum, stat) => sum + stat.indices, 0);
    const totalDocs = estadisticas.reduce((sum, stat) => sum + stat.documentos, 0);
    
    console.log('-'.repeat(70));
    console.log(`\n✅ Total de índices creados: ${totalIndices}`);
    console.log(`📦 Total de documentos: ${totalDocs.toLocaleString()}`);
    console.log(`⏱️  Tiempo total: ${tiempoTotal}s`);
    console.log('='.repeat(70));

    // Recomendaciones
    console.log('\n💡 RECOMENDACIONES DE OPTIMIZACIÓN:');
    console.log('1. Los índices mejoran las consultas pero aumentan el espacio en disco');
    console.log('2. Monitorea el uso de índices con: db.collection.getIndexes()');
    console.log('3. Usa explain() para analizar el rendimiento de consultas');
    console.log('4. Considera eliminar índices no utilizados para ahorrar espacio');
    console.log('5. Para bases de datos grandes, considera sharding');

    // Cerrar conexión
    await mongoose.connection.close();
    console.log('\n✅ Optimización completada. Conexión cerrada.');
    process.exit(0);

  } catch (error) {
    console.error('❌ Error durante la optimización:', error);
    await mongoose.connection.close();
    process.exit(1);
  }
}

// Ejecutar
optimizarIndices();


