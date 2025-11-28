#!/bin/bash
set -e

KEY1="/keys/key1/key"
KEY2="/keys/key2/key"
KEY3="/keys/key3/key"

# Crear las carpetas si no existen
mkdir -p "$(dirname "$KEY1")"
mkdir -p "$(dirname "$KEY2")"
mkdir -p "$(dirname "$KEY3")"

# Verificar si existe la llave principal
if [ ! -f "$KEY1" ]; then
  echo "Keyfile no encontrado, creando..."
  openssl rand -base64 756 > "$KEY1"
  chmod 400 "$KEY1"
  chown 999:999 "$KEY1"

  # Copiar la llave recién creada a las demás rutas
  cp "$KEY1" "$KEY2"
  cp "$KEY1" "$KEY3"
  chmod 400 "$KEY2"
  chown 999:999 "$KEY2"
  chmod 400 "$KEY3"
  chown 999:999 "$KEY3"
else
  echo "Keyfile ya existe, no se crea uno nuevo."
fi

sleep 5
# Ejecutar el comando original
#exec mongod --replSet myReplicaSet --bind_ip_all --keyFile /keys/key1/key
exec mongod --replSet myReplicaSet --bind_ip_all
