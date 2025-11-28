# Punto 9 — Seguridad: Guía de Verificación Paso a Paso

## 📋 Introducción

Este documento te explica **cómo comprobar** que todas las medidas de seguridad del Punto 9 están funcionando. Cada sección tiene comandos listos para copiar/pegar.

---

## ✅ VERIFICACIÓN 1: Firewall Activo

### ¿Qué es?
El firewall es como un "guardián" que decide qué tráfico entra y cuál no. Windows tiene uno incorporado, y el script `setup-firewall.ps1` lo configuró con reglas de seguridad.

### ¿Cómo verificar?

**Paso 1:** Abre PowerShell como Administrador y ejecuta:

```powershell
Get-NetFirewallRule -DisplayName "Tienda *" | Format-Table DisplayName, Enabled, Direction, Protocol, LocalPort
```

**Qué esperas ver:**
```
DisplayName               Enabled Direction Protocol LocalPort
-----------               ------- --------- -------- ---------
Tienda Allow TCP 22       True    Inbound   TCP      22
Tienda Allow TCP 80       True    Inbound   TCP      80
Tienda Allow TCP 443      True    Inbound   TCP      443
Tienda Allow TCP 3001     True    Inbound   TCP      3001
Tienda Allow TCP 8081     True    Inbound   TCP      8081
Tienda Allow TCP 9090     True    Inbound   TCP      9090
```

**Explicación:**
- Cada línea = una regla que PERMITE tráfico en ese puerto.
- `Enabled = True` = la regla está ACTIVA.
- Los puertos (22, 80, 443, etc.) son los que tu aplicación necesita.
- ✅ **Si ves esto = Firewall está configurado correctamente.**

---

**Paso 2:** Verificar que el firewall BLOQUEA por defecto (política de seguridad):

```powershell
Get-NetFirewallProfile | Format-Table Name, Enabled, DefaultInboundAction, DefaultOutboundAction
```

**Qué esperas ver:**
```
Name    Enabled DefaultInboundAction DefaultOutboundAction
----    ------- -------------------- ---------------------
Domain  True    Block                 Allow
Private True    Block                 Allow
Public  True    Block                 Allow
```

**Explicación:**
- `DefaultInboundAction = Block` = **TODO tráfico entrante se rechaza por defecto**, excepto lo que tiene una regla específica (las de arriba).
- Es como decir: "solo entra lo que yo permito explícitamente".
- ✅ **Si ves `Block` = Política correcta (más segura).**

---

**Paso 3:** Verificar protección anti-DDoS en TCP:

```powershell
netsh interface tcp show global
```

**Qué esperas ver (busca estas líneas):**
```
Número máximo de retransmisiones SYN: 4
Estado de fusión de segmento de recepción: enabled
```

**Explicación:**
- `Número máximo de retransmisiones SYN: 4` = Windows intenta conectar 4 veces máximo. Si alguien intenta un ataque SYN Flood (muchas conexiones incompletas), Windows lo rechaza. Es como tener un "guardia que no tolera más de 4 intentos fallidos".
- `Fusión de segmento: enabled` = Si alguien envía paquetes fragmentados/dañados, Windows los une y valida. Protege contra ataques tipo "Teardrop".
- ✅ **Si ves esto = Protección anti-DDoS a nivel del sistema operativo está activa.**

---

## 🔐 VERIFICACIÓN 2: HTTPS (Cifrado TLS/SSL)

### ¿Qué es?
HTTPS encripta la comunicación entre tu navegador y el servidor. El certificado `tienda.crt` / `tienda.key` hacen que sea segura.

### ¿Cómo verificar?

**Paso 1:** Comprobar que HTTP redirige automáticamente a HTTPS

```powershell
Invoke-WebRequest -Uri "http://localhost:80/" -SkipCertificateCheck -MaximumRedirection 0 -ErrorAction SilentlyContinue | Select-Object StatusCode, @{Name="Location";Expression={$_.Headers.Location}}
```

**Qué esperas ver:**
```
StatusCode Location
---------- --------
301        https://localhost/
```

**Explicación:**
- `StatusCode = 301` = "permanentemente movido a HTTPS".
- `Location = https://localhost/` = El navegador es redirigido automáticamente a HTTPS.
- ✅ **Si ves esto = HTTP fuerza a HTTPS correctamente.**

---

**Paso 2:** Ver cabeceras de seguridad (Nginx)

```powershell
(Invoke-WebRequest -Uri "https://localhost/" -SkipCertificateCheck -UseBasicParsing).Headers | Format-Table -AutoSize
```

**Qué esperas ver (busca estas líneas):**
```
Name                           Value
----                           -----
Strict-Transport-Security      max-age=63072000; includeSubDomains
X-Frame-Options                DENY
X-Content-Type-Options         nosniff
Referrer-Policy                no-referrer
Permissions-Policy             geolocation=(), microphone=(), camera=()
```

**Explicación:**
- `Strict-Transport-Security` = "Siempre usa HTTPS, no HTTP" (válido por 2 años).
- `X-Frame-Options: DENY` = "Mi sitio no puede ser puesto dentro de un iframe" (previene clickjacking).
- `X-Content-Type-Options: nosniff` = "No adivines qué tipo de contenido es; usa lo que yo te digo" (previene MIME sniffing).
- `Referrer-Policy: no-referrer` = "No digas de dónde vinieron los usuarios" (privacidad).
- `Permissions-Policy` = "Bloquea GPS, micrófono, cámara, etc." (privacidad/seguridad).
- ✅ **Si ves estas cabeceras = Nginx está aplicando políticas de seguridad avanzadas.**

---

**Paso 3:** Verificar protocolo TLS (si tienes WSL/Git Bash con OpenSSL)

Abre WSL o Git Bash y ejecuta:
```bash
openssl s_client -connect localhost:443 -servername localhost 2>&1 | grep "Protocol"
```

**Qué esperas ver:**
```
Protocol  : TLSv1.3
```
o
```
Protocol  : TLSv1.2
```

**Explicación:**
- `TLSv1.3` o `TLSv1.2` = Protocolos modernos y seguros.
- ❌ NO debe ser `SSLv3`, `TLSv1.0` o `TLSv1.1` (obsoletos/inseguros).
- ✅ **Si ves TLSv1.2+ = Protocolo seguro en uso.**

---

**Paso 4:** Ver el certificado en el navegador

En tu navegador (Chrome, Edge, Firefox):
1. Abre `https://localhost/`
2. Click en el **candado** (esquina superior izquierda)
3. Click en **"Certificate"** o **"Certificado"**
4. Mira **Subject**: debe decir `localhost`
5. Mira **Issuer**: debe decir algo como `HIA2025` (tu certificado autofirmado)
6. **Si el candado es verde = el certificado es de confianza.**

**Explicación:**
- El candado verde significa que Windows/navegador confía en el certificado.
- Si hiciste los pasos de importar `tienda.crt`, aquí debería verse verde.
- ✅ **Si ves candado verde + Subject=localhost = Certificado TLS correcto.**

---

## 🔑 VERIFICACIÓN 3: Autenticación (Login Requerido)

### ¿Qué es?
La autenticación asegura que solo usuarios autorizados accedan a recursos sensibles.

### ¿Cómo verificar?

#### **3A: Mongo-Express (Base de datos visual)**

**Paso 1:** En tu navegador, abre:
```
http://localhost:8081/
```

**Qué esperas ver:**
- Un diálogo de login (navegador pide usuario/contraseña).
- O una página de Mongo-Express que pide login.

**Paso 2:** Ingresa:
- Usuario: `admin`
- Contraseña: `admin123` (del `.env`)

**Paso 3:** Si entras al dashboard = ✅ **Autenticación funcionando.**

---

#### **3B: Grafana (Monitoreo)**

**Paso 1:** En tu navegador, abre:
```
http://localhost:3001/
```

**Qué esperas ver:**
- Una página de login con campos "Email or username" y "Password".

**Paso 2:** Ingresa:
- Usuario: `admin`
- Contraseña: `admin` (del `.env`)

**Paso 3:** Si entras al dashboard = ✅ **Autenticación Grafana funcionando.**

---

#### **3C: Backend API (JWT - Token de autenticación)**

**Paso 1:** Abre PowerShell y ejecuta:

```powershell
# Crear el cuerpo del login
$loginBody = @{
    username = "admin"
    password = "admin123"
} | ConvertTo-Json

# Enviar petición de login
$response = Invoke-WebRequest -Uri "https://localhost/api/auth/login" `
    -Method Post `
    -ContentType "application/json" `
    -Body $loginBody `
    -SkipCertificateCheck -UseBasicParsing -ErrorAction SilentlyContinue

# Ver respuesta
$response.StatusCode
$response.Content | ConvertFrom-Json | Select-Object mensaje, token, usuario
```

**Qué esperas ver:**
```
StatusCode : 200

mensaje  : Inicio de sesión exitoso
token    : eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI2Yk...
usuario  : @{id=...; username=admin; email=...; rol=admin; nombre=...; apellido=...}
```

**Explicación:**
- `StatusCode = 200` = Login exitoso.
- `token` = Un JWT (cadena larga que parece basura) que actúa como "entrada" para acceder a recursos protegidos.
- Este token expira en 1 hora (definido en `controllers/auth.controller.js`).
- ✅ **Si ves StatusCode 200 + token = Autenticación JWT funcionando.**

---

## 🛡️ VERIFICACIÓN 4: Control de Accesos (Solo autenticados pueden acceder)

### ¿Qué es?
El control de accesos asegura que rutas protegidas requieren un token JWT válido.

### ¿Cómo verificar?

**Paso 1:** Intenta acceder sin token (debería fallar):

```powershell
$response = Invoke-WebRequest -Uri "https://localhost/api/rol" `
    -SkipCertificateCheck -UseBasicParsing -ErrorAction SilentlyContinue

$response.StatusCode
$response.Content
```

**Qué esperas ver:**
```
StatusCode : 401
Content    : {"mensaje":"Acceso denegado. No se proporcionó token."}
```

**Explicación:**
- `StatusCode = 401` = "No autorizado" (falta el token).
- El servidor rechaza el acceso porque no hay autenticación.
- ✅ **Si ves 401 sin token = Control de acceso funcionando.**

---

**Paso 2:** Accede CON token (debería funcionar):

```powershell
# Primero, obtén un token (ver verificación 3C arriba)
$loginBody = @{
    username = "admin"
    password = "admin123"
} | ConvertTo-Json

$loginResponse = Invoke-WebRequest -Uri "https://localhost/api/auth/login" `
    -Method Post `
    -ContentType "application/json" `
    -Body $loginBody `
    -SkipCertificateCheck -UseBasicParsing -ErrorAction SilentlyContinue

$token = ($loginResponse.Content | ConvertFrom-Json).token

# Ahora accede a ruta protegida CON el token
$headers = @{
    "Authorization" = "Bearer $token"
}

$response = Invoke-WebRequest -Uri "https://localhost/api/rol" `
    -Headers $headers `
    -SkipCertificateCheck -UseBasicParsing -ErrorAction SilentlyContinue

$response.StatusCode
$response.Content | ConvertFrom-Json
```

**Qué esperas ver:**
```
StatusCode : 200

[datos de roles aquí, si existen en la BD]
```

**Explicación:**
- `StatusCode = 200` = Acceso permitido.
- El servidor deja pasar la petición porque el token es válido.
- ✅ **Si ves 200 con token = Control de acceso + JWT funcionando.**

---

## 🚀 VERIFICACIÓN 5: Mitigación DDoS (Rate Limiting)

### ¿Qué es?
DDoS (ataque de denegación de servicio) envía miles de peticiones simultáneamente para derribar un servidor. El rate limiting restringe cuántas peticiones se aceptan por segundo.

### ¿Cómo verificar?

**Configuración actual:**
- Nginx permite **10 peticiones por segundo** por IP.
- Si intentas más, se limita (503 Service Unavailable).

**Paso 1: Prueba normal (debería funcionar)**

```powershell
# Petición normal (1 petición)
Invoke-WebRequest -Uri "https://localhost/" -SkipCertificateCheck -UseBasicParsing | Select-Object StatusCode
```

**Qué esperas ver:**
```
StatusCode
----------
200
```

**Explicación:**
- `StatusCode = 200` = OK, tráfico normal.
- ✅ **Si ves 200 = Funcionamiento normal.**

---

**Paso 2: Prueba de carga (muchas peticiones simultáneamente)**

Este paso genera muchas peticiones rápidamente para simular un ataque.

**Opción A - Si tienes WSL/Git Bash (mejor opción):**

Abre WSL/Git Bash y ejecuta:
```bash
ab -n 1000 -c 100 https://localhost/
```

(Si no tienes `ab`, instálalo con `sudo apt install apache2-utils` en WSL)

**Qué esperas ver:**
```
Requests per second:    [número bajo, limitado por rate limiting]
Failed requests:        [algunos, debido a 503 Service Unavailable]
Non-2xx responses:      [algunos 503]
```

**Explicación:**
- `-n 1000` = 1000 peticiones totales.
- `-c 100` = 100 conexiones simultáneas (ataque simulado).
- Si Nginx limitó correctamente, verás:
  - Muchas respuestas 200 OK.
  - Algunas respuestas 503 (cuando excedieron el límite).
  - Tiempo total elevado (porque Nginx ralentiza intencionalmente).
- ✅ **Si ves 503 o ralentización = Rate limiting funcionando.**

---

**Opción B - Si NO tienes `ab` (PowerShell puro):**

En PowerShell, ejecuta:
```powershell
# Lanzar 200 peticiones en paralelo (simula ataque)
$jobs = 1..200 | ForEach-Object { 
    Start-Job -ScriptBlock { 
        Invoke-WebRequest -Uri "https://localhost/" -SkipCertificateCheck -UseBasicParsing -TimeoutSec 5 -ErrorAction SilentlyContinue | Select-Object StatusCode
    } 
}

# Esperar a que terminen todas
$results = $jobs | Wait-Job | Receive-Job

# Contar respuestas
$results | Group-Object StatusCode | Format-Table Count, Name
```

**Qué esperas ver:**
```
Count Name
----- ----
190   200
10    503
```

**Explicación:**
- La mayoría serán `200` (OK).
- Algunas serán `503` (Service Unavailable = Nginx rechazó por rate limit).
- ✅ **Si ves mezcla de 200 + 503 = Rate limiting funcionando.**

---

**Paso 3: Ver logs de Nginx (prueba de que limitó)**

```powershell
docker logs tienda-nginx --tail 100
```

**Qué buscar:**
```
[info] ... limiting requests ...
```

o

```
"GET / HTTP/1.1" 503
```

**Explicación:**
- Nginx escribe en logs cuando limita peticiones.
- El `503` es el código HTTP de "Service Unavailable" (limitado).
- ✅ **Si ves estos logs = Rate limiting registró las limitaciones.**

---

## 📊 Tabla Resumen de Verificaciones

Copia y pega esta tabla en tu informe, rellenando Sí/No:

| # | Verificación | Comando | ¿Resultado OK? | Evidencia |
|---|---|---|---|---|
| 1a | Firewall activo | `Get-NetFirewallRule "Tienda *"` | ☐ Sí ☐ No | Reglas visibles |
| 1b | Política Block by default | `Get-NetFirewallProfile` | ☐ Sí ☐ No | DefaultInboundAction=Block |
| 1c | Protección SYN anti-DDoS | `netsh interface tcp show global` | ☐ Sí ☐ No | SYN=4, fusión=enabled |
| 2a | HTTP → HTTPS redirect | `Invoke-WebRequest http://localhost` | ☐ Sí ☐ No | StatusCode=301 |
| 2b | Cabeceras seguridad | `Invoke-WebRequest https://localhost` | ☐ Sí ☐ No | HSTS, X-Frame-Options, etc. |
| 2c | Protocolo TLSv1.2+ | `openssl s_client localhost:443` | ☐ Sí ☐ No | TLSv1.2 o TLSv1.3 |
| 2d | Certificado de confianza | Navegador: candado verde | ☐ Sí ☐ No | Subject=localhost |
| 3a | Mongo-Express login | Navegador: http://localhost:8081 | ☐ Sí ☐ No | Requiere admin/admin123 |
| 3b | Grafana login | Navegador: http://localhost:3001 | ☐ Sí ☐ No | Requiere admin/admin |
| 3c | Backend JWT | `POST /api/auth/login` | ☐ Sí ☐ No | StatusCode=200, token recibido |
| 4 | Control acceso (401 sin token) | `GET /api/rol` sin token | ☐ Sí ☐ No | StatusCode=401 |
| 4b | Control acceso (200 con token) | `GET /api/rol` con token | ☐ Sí ☐ No | StatusCode=200 |
| 5a | Rate limiting normal | `Invoke-WebRequest localhost` | ☐ Sí ☐ No | StatusCode=200 |
| 5b | Rate limiting bajo carga | `ab -n 1000 -c 100` | ☐ Sí ☐ No | Mezcla 200+503 |
| 5c | Logs rate limiting | `docker logs tienda-nginx` | ☐ Sí ☐ No | "limiting requests" visible |

---

## 📝 Conclusión

Si marcaste "Sí" en TODAS las verificaciones, entonces:

✅ **Firewall implementado correctamente**
✅ **Cifrado TLS/SSL en marcha**
✅ **Autenticación requerida en servicios administrativos**
✅ **Control de accesos activo (JWT)**
✅ **Mitigación DDoS funcionando**

**Punto 9 — COMPLETO** ✓

