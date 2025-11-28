# Genera certificados autofirmados para Nginx usando PowerShell (solo demo).

param(
    [string]$OutputDir = "ssl",
    [string]$DnsName = "localhost"
)

if (-not (Test-Path $OutputDir)) {
    New-Item -ItemType Directory -Path $OutputDir | Out-Null
}

$crtPath = Join-Path $OutputDir "tienda.crt"
$keyPath = Join-Path $OutputDir "tienda.key"

if (-not (Get-Command python -ErrorAction SilentlyContinue)) {
    Write-Error "Python 3 es requerido para generar los certificados (se usa la librería cryptography). Instálalo o ejecuta el script bash equivalente."
    exit 1
}

$pythonScript = @"
import datetime, pathlib
from cryptography import x509
from cryptography.hazmat.primitives import hashes, serialization
from cryptography.hazmat.primitives.asymmetric import rsa
from cryptography.x509.oid import NameOID

output_dir = pathlib.Path(r'$OutputDir')
output_dir.mkdir(parents=True, exist_ok=True)

key = rsa.generate_private_key(public_exponent=65537, key_size=2048)

subject = issuer = x509.Name([
    x509.NameAttribute(NameOID.COUNTRY_NAME, 'AR'),
    x509.NameAttribute(NameOID.STATE_OR_PROVINCE_NAME, 'Jujuy'),
    x509.NameAttribute(NameOID.LOCALITY_NAME, 'San Salvador de Jujuy'),
    x509.NameAttribute(NameOID.ORGANIZATION_NAME, 'HIA2025'),
    x509.NameAttribute(NameOID.ORGANIZATIONAL_UNIT_NAME, 'Seguridad'),
    x509.NameAttribute(NameOID.COMMON_NAME, '$DnsName'),
])

cert = (
    x509.CertificateBuilder()
    .subject_name(subject)
    .issuer_name(issuer)
    .public_key(key.public_key())
    .serial_number(x509.random_serial_number())
    .not_valid_before(datetime.datetime.utcnow() - datetime.timedelta(minutes=5))
    .not_valid_after(datetime.datetime.utcnow() + datetime.timedelta(days=365))
    .add_extension(x509.SubjectAlternativeName([x509.DNSName('$DnsName')]), critical=False)
    .add_extension(x509.BasicConstraints(ca=False, path_length=None), critical=True)
    .sign(private_key=key, algorithm=hashes.SHA256())
)

key_path = output_dir / 'tienda.key'
cert_path = output_dir / 'tienda.crt'

key_path.write_bytes(
    key.private_bytes(
        encoding=serialization.Encoding.PEM,
        format=serialization.PrivateFormat.PKCS8,
        encryption_algorithm=serialization.NoEncryption(),
    )
)

cert_path.write_bytes(cert.public_bytes(serialization.Encoding.PEM))
"@

Write-Host "[INFO] Generando certificado autofirmado para $DnsName..."
python -c $pythonScript

Write-Host "[INFO] Archivos generados:"
Write-Host " - $crtPath"
Write-Host " - $keyPath"
Write-Host "[INFO] Si es la primera vez, instala el certificado en el almacén de confianza del navegador."

