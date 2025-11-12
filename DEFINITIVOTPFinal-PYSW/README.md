# Proyecto Final - Grupo 13

Proyecto completo con backend y frontend para el trabajo práctico final.

## 📁 Estructura del Proyecto

```
DEFINITIVOTPFinal-PYSW/
├── proybackendgrupo13/          # Backend (Node.js + Express + MongoDB)
│   ├── config.example.js        # Plantilla de configuración
│   ├── package.json
│   └── README.md                # Instrucciones del backend
│
└── proyectofrontendgrupo13/    # Frontend (Angular)
    └── frontend/
        ├── package.json
        └── README.md            # Instrucciones del frontend
```

## 🚀 Inicio Rápido

### Backend

1. Navegar a la carpeta del backend:
```bash
cd proybackendgrupo13
```

2. Instalar dependencias:
```bash
npm install
```

3. Configurar el proyecto:
```bash
cp config.example.js config.js
# Editar config.js con tus valores
```

4. Asegurarse de que MongoDB esté corriendo

5. Iniciar el servidor:
```bash
npm run dev
```

El backend estará disponible en `http://localhost:3000`

### Frontend

1. Navegar a la carpeta del frontend:
```bash
cd proyectofrontendgrupo13/frontend
```

2. Instalar dependencias:
```bash
npm install
```

3. Iniciar el servidor de desarrollo:
```bash
ng serve
# o
npx ng serve
```

El frontend estará disponible en `http://localhost:4200`

## 📝 Notas Importantes

- **Backend**: Asegúrate de crear el archivo `config.js` desde `config.example.js` antes de ejecutar el servidor
- **MongoDB**: El backend requiere MongoDB corriendo. Configura la URI en `config.js`
- **Puertos**: 
  - Backend: `3000` (configurable)
  - Frontend: `4200` (por defecto de Angular)

## 👥 Para el Grupo

Cuando clones el repositorio:

1. **Backend**: 
   - Ejecuta `npm install` en `proybackendgrupo13/`
   - Copia `config.example.js` a `config.js` y configura tus valores
   - Asegúrate de tener MongoDB corriendo

2. **Frontend**:
   - Ejecuta `npm install` en `proyectofrontendgrupo13/frontend/`
   - Ejecuta `ng serve` o `npx ng serve`

3. **Listo**: Ambos servidores deberían estar corriendo y comunicándose correctamente.

## 🔧 Tecnologías Utilizadas

- **Backend**: Node.js, Express, MongoDB, Mongoose, JWT, bcrypt
- **Frontend**: Angular 20, TypeScript, Angular Material
- **Otras**: OpenAI API (para generación de imágenes), Google OAuth

## 📚 Documentación Adicional

- Ver `proybackendgrupo13/README.md` para más detalles del backend
- Ver `proyectofrontendgrupo13/frontend/README.md` para más detalles del frontend

