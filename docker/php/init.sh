#!/bin/bash
set -e

# Masuk ke folder aplikasi
cd /var/www/html

# 1. Pastikan folder storage bisa ditulis
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# 2. Setup .env
if [ ! -f .env ]; then
    cp .env.example .env
fi

# 3. Install composer TANPA menjalankan script otomatis laravel
# Ini untuk menghindari error 255
composer install --no-interaction --no-scripts --prefer-dist

# 4. Jalankan perintah Laravel secara manual
php artisan key:generate --force
php artisan package:discover --ansi

# 5. Tunggu database siap
echo "Menunggu MySQL..."
sleep 15

# 6. Jalankan migrasi
php artisan migrate --force

# 7. Jalankan Apache
apache2-foreground