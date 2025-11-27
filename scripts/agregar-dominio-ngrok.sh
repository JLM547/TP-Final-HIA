#!/bin/bash
# Script para agregar un dominio de ngrok a NextCloud trusted_domains

# Verificar que se proporcione un dominio
if [ -z "$1" ]; then
    echo "❌ Error: Debes proporcionar el dominio de ngrok"
    echo "Uso: ./agregar-dominio-ngrok.sh tu-dominio.ngrok.io"
    echo "Ejemplo: ./agregar-dominio-ngrok.sh abc123.ngrok.io"
    exit 1
fi

DOMAIN=$1
CONTAINER_NAME="tienda-nextcloud"
CONFIG_FILE="/var/www/html/config/config.php"

echo "🔧 Agregando dominio: $DOMAIN a NextCloud..."

# Extraer solo el dominio sin https://
DOMAIN=$(echo $DOMAIN | sed 's|https\?://||' | sed 's|/$||')

# Crear un script PHP temporal para agregar el dominio
docker exec $CONTAINER_NAME bash -c "cat > /tmp/add_trusted_domain.php << 'EOFPHP'
<?php
\$configFile = '$CONFIG_FILE';
\$config = include \$configFile;

// Verificar si el dominio ya existe
if (!isset(\$config['trusted_domains'])) {
    \$config['trusted_domains'] = array();
}

// Agregar el dominio si no existe
\$domain = '$DOMAIN';
if (!in_array(\$domain, \$config['trusted_domains'])) {
    \$config['trusted_domains'][] = \$domain;
    echo \"✅ Dominio agregado: \$domain\n\";
} else {
    echo \"ℹ️  El dominio ya existe en la lista\n\";
    exit(0);
}

// Generar el contenido del archivo PHP
\$content = \"<?php\n\$CONFIG = array (\n\";
foreach (\$config as \$key => \$value) {
    if (\$key === 'trusted_domains') {
        \$content .= \"  'trusted_domains' =>\n  array (\n\";
        foreach (\$value as \$index => \$domain) {
            \$content .= \"    \$index => '\$domain',\n\";
        }
        \$content .= \"  ),\n\";
    } else {
        if (is_array(\$value)) {
            \$content .= \"  '\$key' =>\n  array (\n\";
            foreach (\$value as \$subkey => \$subvalue) {
                if (is_array(\$subvalue)) {
                    \$content .= \"    \$subkey =>\n    array (\n\";
                    foreach (\$subvalue as \$k => \$v) {
                        \$content .= \"      '\$k' => '\$v',\n\";
                    }
                    \$content .= \"    ),\n\";
                } else {
                    \$content .= \"    \$subkey => '\$subvalue',\n\";
                }
            }
            \$content .= \"  ),\n\";
        } else {
            if (is_bool(\$value)) {
                \$content .= \"  '\$key' => \" . (\$value ? 'true' : 'false') . \",\n\";
            } else {
                \$content .= \"  '\$key' => '\$value',\n\";
            }
        }
    }
}
\$content .= \");\n\";

file_put_contents(\$configFile, \$content);
chmod(600, \$configFile);
chown('www-data:www-data', \$configFile);
EOFPHP
php /tmp/add_trusted_domain.php"

# Verificar si funcionó
if [ $? -eq 0 ]; then
    echo "✅ Dominio agregado exitosamente"
    echo "🔄 Reiniciando contenedor de NextCloud..."
    docker restart $CONTAINER_NAME
    echo "✅ ¡Listo! El dominio $DOMAIN ya está configurado"
    echo ""
    echo "📝 Ahora puedes acceder a NextCloud desde: https://$DOMAIN"
else
    echo "❌ Error al agregar el dominio"
    exit 1
fi

