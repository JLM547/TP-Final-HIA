# Punto 9 - Seguridad

Este documento consolida la implementación y evidencias del punto 9 del **Trabajo Final Integrador 2025**.

## 1. Resumen de Controles Implementados

- **HTTPS obligatorio** con Nginx reverse proxy, certificados autofirmados (demo) y cabeceras de endurecimiento (HSTS, X-Frame-Options, etc.).
- **Mitigación de DDoS** en dos capas: rate limiting en Nginx y reglas `iptables`/`ufw` o `Windows Firewall` para limitar conexiones concurrentes y ráfagas.
- **Firewall de host** automatizado mediante scripts (`setup-firewall.sh` / `setup-firewall.ps1`) con políticas *deny by default*.
- **Gestión de credenciales** centralizada en `.env` (no versionado) y autenticación básica para `mongo-express`.
- **Documentación y scripts** para recrear certificados TLS (`generate-selfsigned-cert.*`) y repetir pruebas.

## 2. HTTPS + Reverse Proxy Seguro

- Archivo `nginx/nginx-ssl.conf` fuerza HTTPS y aplica limitación de 10 rps por IP (burst 20).
- Certificados almacenados en `ssl/` (generar con scripts incluidos).
- Cabeceras activas:
  - `Strict-Transport-Security` (2 años, subdominios incluidos).
  - `X-Frame-Options`, `X-Content-Type-Options`, `Referrer-Policy`, `Permissions-Policy`.
- Endpoint `https://localhost/healthz` para monitoreo interno del proxy.

## 3. Firewall y Defensa Activa

### Linux

```bash
chmod +x scripts/setup-firewall.sh
sudo ./scripts/setup-firewall.sh
sudo ufw status verbose
sudo iptables -L -n -v | grep 443
```

### Windows

```powershell
Set-ExecutionPolicy RemoteSigned -Scope Process
.\scripts\setup-firewall.ps1 -Reset
Get-NetFirewallRule "Tienda *"
```

Las reglas abren únicamente los puertos necesarios (80, 443, 3001, 8081, 9090, 22) y habilitan parámetros anti-DDoS (protección SYN, logging de paquetes descartados, etc.).

## 4. Generación y Gestión de Certificados

```bash
# Linux / WSL / Git Bash
chmod +x scripts/generate-selfsigned-cert.sh
./scripts/generate-selfsigned-cert.sh ssl localhost
```

```powershell
# Windows PowerShell
.\scripts\generate-selfsigned-cert.ps1 -OutputDir ssl -DnsName localhost
# Requiere Python 3 y la librería 'cryptography' (instalar con: python -m pip install cryptography)
```

En producción se deben reemplazar por certificados de una CA (Let’s Encrypt, AWS ACM, etc.) y almacenar las llaves en un gestor seguro.

## 5. Pruebas de Mitigación DDoS

Simulación con ApacheBench (`ab`) generando 1.000 peticiones concurrentes en ráfagas de 100:

```bash
ab -n 1000 -c 100 https://localhost/
```

Resultados esperados:

- Respuestas 200 para la mayoría de peticiones.
- Una parte retorna 503 cuando la tasa supera el límite configurado (confirmar en `docker compose logs nginx-proxy`).
- Los contadores de `iptables` muestran paquetes descartados (`DROP`).

Para ataques de baja velocidad (`slowloris`), el límite de 50 conexiones SYN simultáneas por IP en `iptables` evita el agotamiento de sockets.

## 6. Autenticación y Gestión de Accesos

- `mongo-express` protegido con autenticación básica (`ME_CONFIG_BASICAUTH_*`) y usuario admin de Mongo definido en variables de entorno.
- Backend usa `JWT_SECRET` y evita exponer puertos a Internet (solo a través de Nginx).
- Grafana exige cambio de contraseña inicial (`GF_SECURITY_ADMIN_PASSWORD`).

## 7. Evidencias

Al ejecutar `docker compose up -d --build` se generan los contenedores:

- `tienda-nginx` corriendo en `443` con HTTPS válido.
- Logs de Nginx mostrando entradas `limiting requests`.
- `ufw status`/`Get-NetFirewallRule` demostrando políticas aplicadas.
- Capturas de pantalla y reportes anexos en Nextcloud (subir antes de la entrega final).

## 8. Próximos Pasos Recomendados

- Integrar `fail2ban` o `crowdsec` para bloqueo dinámico basado en logs.
- Automatizar renovación de certificados con Let’s Encrypt (`certbot`).
- Gestionar secretos con Vault, AWS Secrets Manager u otra solución de gestión centralizada.
- Añadir escaneos de vulnerabilidades (OWASP ZAP, Trivy) al pipeline de CI/CD.

---

**Responsables:** Equipo Grupo 13  
**Fecha:** completar al momento de emitir el informe final

