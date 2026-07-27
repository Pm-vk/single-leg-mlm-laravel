#!/bin/bash
set -e

# Create sqlite database if DB_CONNECTION is sqlite or MySQL is unconfigured
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_HOST" ]; then
    echo "Using SQLite database fallback..."
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
fi

# Run migrations automatically if possible
php artisan migrate --force || true

# Cache configuration, routes, and views for production performance
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Start Apache in foreground
exec apache2-foreground

