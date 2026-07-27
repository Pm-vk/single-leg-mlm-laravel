#!/bin/bash
set -e

# Ensure APP_KEY exists
if [ -z "$APP_KEY" ]; then
    export APP_KEY="base64:lli49ZSBCcpkfTgqhIPdluF+3ENn8flFB2qIrd8qLn4="
fi

# Enable debug to see exact errors if any
export APP_DEBUG=true

# Force SQLite configuration if DB_HOST is unconfigured or invalid
if [ -z "$DB_HOST" ] || [ "$DB_HOST" = "your-database-host.com" ] || [ "$DB_HOST" = "<your-render-db-host>" ]; then
    echo "Configuring SQLite database..."
    export DB_CONNECTION=sqlite
    export DB_DATABASE=/var/www/html/database/database.sqlite
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
fi

# Clear old cached configs
php artisan config:clear || true
php artisan route:clear || true

# Run migrations & seeders
php artisan migrate --seed --force || true

# Start Apache in foreground
exec apache2-foreground


