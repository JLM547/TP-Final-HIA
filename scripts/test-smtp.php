<?php
// Script para probar conexión SMTP directamente
require_once '/var/www/html/config/config.php';

$host = $CONFIG['mail_smtphost'] ?? 'smtp.gmail.com';
$port = $CONFIG['mail_smtpport'] ?? 587;
$secure = $CONFIG['mail_smtpsecure'] ?? 'tls';
$user = $CONFIG['mail_smtpname'] ?? '';
$pass = $CONFIG['mail_smtppassword'] ?? '';

echo "=== Configuración SMTP ===\n";
echo "Host: $host\n";
echo "Port: $port\n";
echo "Secure: $secure\n";
echo "User: $user\n";
echo "Password: " . (empty($pass) ? 'NO CONFIGURADA' : 'CONFIGURADA (' . strlen($pass) . ' caracteres)') . "\n\n";

// Probar conexión básica
echo "=== Probando conexión ===\n";
$socket = @fsockopen($host, $port, $errno, $errstr, 10);
if ($socket) {
    echo "✅ Conexión exitosa al puerto $port\n";
    fclose($socket);
} else {
    echo "❌ Error de conexión: $errstr ($errno)\n";
}

// Probar con stream_socket_client para TLS
echo "\n=== Probando conexión TLS ===\n";
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

$socket = @stream_socket_client("tcp://$host:$port", $errno, $errstr, 10, STREAM_CLIENT_CONNECT, $context);
if ($socket) {
    echo "✅ Conexión TCP exitosa\n";
    
    // Iniciar TLS
    if (stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
        echo "✅ TLS iniciado correctamente\n";
    } else {
        echo "❌ Error al iniciar TLS\n";
    }
    
    fclose($socket);
} else {
    echo "❌ Error de conexión: $errstr ($errno)\n";
}

