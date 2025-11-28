#!/bin/bash
set -e

# Esperar unos segundos para que mongod esté listo
sleep 10

mongosh --host mongo1:27017 <<EOF
use admin;
if (!db.getUser("admin")) {
  db.createUser({
    user: "admin",
    pwd: "admin123",
    roles: [ { role: "userAdminAnyDatabase", db: "admin" } ]
  });
  db.grantRolesToUser("admin", [ { role: "root", db: "admin" } ]);
  print("Usuario admin creado y roles asignados correctamente");
} else {
  print("Usuario admin ya existe, no se crea uno nuevo");
}
EOF
