# 🚀 Scripts para Configurar ngrok con NextCloud

## 📋 Script Principal

### `agregar-ngrok.ps1` (Recomendado)

Script automático para agregar un dominio de ngrok a NextCloud.

**Uso:**
```powershell
.\agregar-ngrok.ps1 -Dominio "abc123.ngrok.io"
```

O con https://:
```powershell
.\agregar-ngrok.ps1 -Dominio "https://abc123.ngrok.io"
```

**Qué hace:**
- ✅ Verifica que el dominio no esté duplicado
- ✅ Detecta automáticamente el siguiente índice disponible
- ✅ Agrega el dominio usando el comando oficial de NextCloud
- ✅ Reinicia el contenedor automáticamente
- ✅ Muestra la URL final para acceder

**Ejemplo completo:**
```powershell
# 1. Inicia ngrok
ngrok http 8080

# 2. Copia la URL (ejemplo: https://abc123.ngrok.io)

# 3. Ejecuta el script
cd scripts
.\agregar-ngrok.ps1 -Dominio "abc123.ngrok.io"

# 4. ¡Listo! Accede a https://abc123.ngrok.io
```

---

## 📚 Documentación Completa

Para más detalles, consulta:
- `../nextcloud/documentacion/GUIA-AGREGAR-NGROK.md` - Guía completa paso a paso

---

## 🔧 Otros Scripts Disponibles

- `agregar-dominio-ngrok.ps1` - Versión alternativa (más compleja)
- `agregar-dominio-ngrok-simple.ps1` - Versión simplificada
- `agregar-dominio-ngrok.sh` - Versión para Linux/Mac

---

## ⚠️ Notas Importantes

1. **Cada vez que reinicias ngrok**, obtienes una URL nueva
2. **Debes ejecutar el script nuevamente** con la nueva URL
3. **Para la defensa**: Configura todo ANTES de empezar y no cierres ngrok

---

## 🐛 Solución de Problemas

Si el script no funciona:

```powershell
# Verifica que el contenedor esté corriendo
docker ps | Select-String "nextcloud"

# Verifica los logs
docker logs tienda-nextcloud

# Verifica los dominios actuales
docker exec tienda-nextcloud php /var/www/html/occ config:system:get trusted_domains
```

