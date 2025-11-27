# Configuración de Acceso Compartido - NextCloud

## Paso 1: Exponer NextCloud a Internet

### Opción A: LocalTunnel (Recomendado - Sin cuenta)

1. **Abrir una nueva terminal/PowerShell**
2. **Ejecutar:**
   ```bash
   lt --port 8080
   ```
3. **Copiar el enlace que te da** (ejemplo: `https://abc123.loca.lt`)
4. **Compartir ese enlace con tus compañeros**

**Nota:** Cada vez que ejecutes `lt --port 8080`, te dará un enlace diferente. Si quieres el mismo enlace siempre, usa:
```bash
lt --port 8080 --subdomain tu-nombre
```

### Opción B: ngrok (Más estable, requiere cuenta)

1. **Descargar ngrok:** https://ngrok.com/download
2. **Crear cuenta:** https://dashboard.ngrok.com/signup
3. **Configurar token:**
   ```bash
   ngrok config add-authtoken TU_TOKEN
   ```
4. **Exponer NextCloud:**
   ```bash
   ngrok http 8080
   ```
5. **Compartir el enlace** que te da (ejemplo: `https://abc123.ngrok-free.app`)

---

## Paso 2: Crear Usuarios para tus Compañeros

1. **Acceder a NextCloud** (con el enlace de localtunnel o ngrok)
2. **Clic en tu avatar** (arriba a la derecha)
3. **Seleccionar "Usuarios"** o "Users"
4. **Clic en "+ Agregar usuario"** o "+ Add user"
5. **Completar:**
   - **Nombre de usuario:** (ej: `companero1`, `juan`, `maria`)
   - **Contraseña:** (crear una segura o generar automática)
   - **Nombre completo:** (opcional)
   - **Email:** (opcional, pero recomendado)
6. **Clic en "Crear"**
7. **Repetir para cada compañero**

---

## Paso 3: Compartir Carpetas con Permisos de Escritura

Para que tus compañeros puedan **subir y modificar** archivos:

1. **Ir a la carpeta** que quieres compartir (ej: `Documentacion HIA`)
2. **Clic derecho** → **"Compartir"** o clic en el icono de compartir
3. **En "Compartir con", escribir el nombre de usuario** del compañero
4. **Seleccionar permisos:**
   -  **"Lectura y escritura"** (importante para que puedan subir archivos)
5. **Clic en "Compartir"**

**Repetir para cada carpeta y cada compañero.**

---

## Paso 4: Crear Carpetas Compartidas para el Grupo

### Opción A: Carpeta Compartida del Grupo

1. **Crear una nueva carpeta** en NextCloud (ej: `Trabajo-Grupo-13`)
2. **Compartirla con TODOS los compañeros** con permisos de lectura y escritura
3. **Todos pueden subir, editar y ver archivos ahí**

### Opción B: Cada uno tiene su carpeta personal

1. **Cada compañero crea su carpeta** (ej: `Trabajo-Juan`, `Trabajo-Maria`)
2. **Comparte su carpeta contigo** con permisos de lectura y escritura
3. **Tú compartes tus carpetas con ellos**

---

## Paso 5: Acceso de tus Compañeros

### Para acceder a NextCloud:

1. **Abrir el enlace** que les diste (ej: `https://abc123.loca.lt`)
2. **Hacer login** con su usuario y contraseña
3. **Ver las carpetas compartidas** en el menú lateral

### Para subir archivos:

1. **Entrar a la carpeta compartida**
2. **Clic en "+"** → **"Subir archivo"** o arrastrar archivos
3. **Los archivos aparecerán para todos** que tengan acceso

---

## Estructura Recomendada

```
NextCloud/
├── Documentacion HIA/          (Compartida con todos - Lectura/Escritura)
├── Reportes HIA/                (Compartida con todos - Lectura/Escritura)
├── Backups HIA/                 (Compartida con todos - Lectura/Escritura)
├── Logs HIA/                    (Compartida con todos - Lectura/Escritura)
└── Trabajo-Grupo-13/            (Carpeta compartida del grupo - Todos pueden subir)
    ├── Punto-1-Jira/            (Subcarpetas por punto del TP)
    ├── Punto-2-Docker/
    ├── Punto-3-CI-CD/
    └── ...
```

---

## Solución de Problemas

### El enlace de localtunnel no funciona:
- Verificar que NextCloud esté corriendo: `docker compose ps nextcloud`
- Verificar que el puerto 8080 esté libre
- Intentar generar un nuevo enlace: `lt --port 8080`

### Los compañeros no ven las carpetas:
- Verificar que compartiste la carpeta con el usuario correcto
- Verificar que los permisos sean "Lectura y escritura"
- Pedirles que refresquen la página (F5)

### No pueden subir archivos:
- Verificar que los permisos sean "Lectura y escritura" (no solo lectura)
- Verificar que tienen espacio disponible

---

## Para la Presentación

Demostrar:
1.  NextCloud accesible desde internet (enlace de localtunnel/ngrok)
2.  Múltiples usuarios creados
3.  Carpetas compartidas con permisos de escritura
4.  Subir archivo desde otro dispositivo/usuario
5.  Ver archivos subidos por compañeros en tiempo real

---

**Nota Importante:** 
- El enlace de localtunnel cambia cada vez que lo ejecutas (a menos que uses --subdomain)
- Para producción, considera usar ngrok con cuenta gratuita para URLs más estables
- Todos deben estar conectados a internet para acceder

