#!/bin/bash
# Configura reglas de firewall y mitigación básica de DDoS.
# Ejecutar con privilegios de superusuario en el host Linux.

set -euo pipefail

if [[ $EUID -ne 0 ]]; then
  echo "[ERROR] Debes ejecutar este script como root o usando sudo."
  exit 1
fi

if ! command -v ufw >/dev/null 2>&1; then
  echo "[ERROR] ufw no está instalado. Instálalo antes de continuar (apt install ufw)."
  exit 1
fi

echo "[INFO] Reiniciando configuración previa de ufw..."
ufw --force reset

echo "[INFO] Definiendo políticas por defecto (deny incoming / allow outgoing)..."
ufw default deny incoming
ufw default allow outgoing

echo "[INFO] Habilitando puertos necesarios para la plataforma..."
for port in 22 80 443 3001 8081 9090; do
  ufw allow "${port}/tcp"
done

echo "[INFO] Activando ufw..."
ufw --force enable

echo "[INFO] Aplicando reglas iptables adicionales de mitigación DDoS..."
# Limita la cantidad de conexiones concurrentes por IP en el puerto HTTPS
iptables -C INPUT -p tcp --syn --dport 443 -m connlimit --connlimit-above 50 --connlimit-mask 32 -j REJECT --reject-with tcp-reset 2>/dev/null \
  || iptables -A INPUT -p tcp --syn --dport 443 -m connlimit --connlimit-above 50 --connlimit-mask 32 -j REJECT --reject-with tcp-reset

# Evita ráfagas de conexiones en periodos cortos (temporal rate limiting)
iptables -C INPUT -p tcp --dport 443 -m state --state NEW -m recent --set 2>/dev/null \
  || iptables -A INPUT -p tcp --dport 443 -m state --state NEW -m recent --set
iptables -C INPUT -p tcp --dport 443 -m state --state NEW -m recent --update --seconds 60 --hitcount 40 -j DROP 2>/dev/null \
  || iptables -A INPUT -p tcp --dport 443 -m state --state NEW -m recent --update --seconds 60 --hitcount 40 -j DROP

# Descarta fragmentación sospechosa (ataques tipo Teardrop)
iptables -C INPUT -f -j DROP 2>/dev/null || iptables -A INPUT -f -j DROP

echo "[INFO] Reglas aplicadas. Usa 'ufw status verbose' y 'iptables -L -n -v' para verificar."


