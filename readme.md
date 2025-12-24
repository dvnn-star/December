# Baca Saya 
## Detail Skema 
Ini adalah skema docker compose yang bisa digunakan untuk menjalankan laravel. 
Beberapa program yang digunakan adalah:
- Apache
- PHP 8.2
- Laravel Versi 12
- MySQL 8.0

## Cara Menggunakan
1. Pastikan anda sudah menginstall docker dan docker-compose di komputer anda.
2. Download atau clone repository ini.
3. Buka terminal dan masuk ke direktori tempat anda menyimpan file ini.
4. Jalankan perintah berikut untuk membangun dan menjalankan container:
   ```bash
   docker-compose up -d
   ```
5. Setelah container berjalan, buka browser anda dan akses `http://localhost:8000` untuk melihat aplikasi Laravel yang sedang berjalan.
6. Jangan lupa untuk mengatur file `.env` sesuai dengan kebutuhan anda, terutama bagian database.


step windows : 
# 1. Clone repositori
git clone <url-repo-kamu>
cd laravel-docker

# 2. Masuk ke folder Laravel dan siapkan file .env
cd laravel_app
cp .env.example .env

docker compose up -d

# Instal library PHP
docker compose exec app composer install

# Generate security key
docker compose exec app php artisan key:generate

# Jalankan migrasi database
docker compose exec app php artisan migrate