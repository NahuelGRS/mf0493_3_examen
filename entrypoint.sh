#!/bin/sh

# Esperamos a que MySQL esté listo (opcional, si tarda en conectarse)
echo "Esperando a que la base de datos esté disponible..."
sleep 10

# Ejecutamos las migraciones automáticamente
php artisan migrate --force

# Finalmente, arrancamos el servidor
php artisan serve --host=0.0.0.0 --port=8080
