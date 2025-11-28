#!/bin/bash
# Genera certificados autofirmados para Nginx (solo ambientes de demo).

set -euo pipefail

CERT_DIR=${1:-ssl}
COMMON_NAME=${2:-localhost}

mkdir -p "${CERT_DIR}"

echo "[INFO] Generando certificado autofirmado para CN=${COMMON_NAME}..."

openssl req -x509 -nodes -days 365 \
  -newkey rsa:2048 \
  -keyout "${CERT_DIR}/tienda.key" \
  -out "${CERT_DIR}/tienda.crt" \
  -subj "/C=AR/ST=BuenosAires/L=BuenosAires/O=Grupo13/OU=Seguridad/CN=${COMMON_NAME}"

echo "[INFO] Certificado generado en ${CERT_DIR}/tienda.crt"
echo "[INFO] Llave privada generada en ${CERT_DIR}/tienda.key"
echo "[INFO] Recuerda proteger estos archivos y reemplazarlos en producción por certificados de CA válidas."


