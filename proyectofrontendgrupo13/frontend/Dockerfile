# Dockerfile para Frontend Angular - Multi-stage build
# Stage 1: Build
FROM node:20-alpine AS builder

WORKDIR /app

# Copiar archivos de dependencias
COPY package*.json ./

# Instalar dependencias (npm ci instala todas las dependencias incluyendo devDependencies por defecto)
RUN npm ci

# Copiar el resto del código
COPY . .

# Construir la aplicación Angular (usando configuración docker sin SSR)
# Aumentar memoria de Node.js para builds grandes
ENV NODE_OPTIONS="--max-old-space-size=4096"
RUN npm run build -- --configuration docker || (echo "Build failed. Checking dist directory..." && ls -la dist/ && exit 1)

# Verificar que los archivos se generaron correctamente
RUN if [ ! -d "dist/frontend/browser" ]; then \
    echo "Error: dist/frontend/browser directory not found!" && \
    echo "Contents of dist:" && \
    (ls -la dist/ 2>/dev/null || echo "dist directory does not exist") && \
    echo "Contents of dist/frontend:" && \
    (ls -la dist/frontend/ 2>/dev/null || echo "dist/frontend does not exist") && \
    exit 1; \
    fi

# Stage 2: Production - Nginx
FROM nginx:alpine

# Copiar los archivos construidos desde el stage de build
COPY --from=builder /app/dist/frontend/browser /usr/share/nginx/html

# Si existe index.csr.html, copiarlo como index.html (para SSR)
RUN if [ -f /usr/share/nginx/html/index.csr.html ]; then \
    cp /usr/share/nginx/html/index.csr.html /usr/share/nginx/html/index.html; \
    fi

# Copiar configuración de nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar nginx
CMD ["nginx", "-g", "daemon off;"]

