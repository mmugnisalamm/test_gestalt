# README

## Tentang Aplikasi

Aplikasi ini dikembangkan menggunakan framework Laravel dan didukung oleh PostgreSQL sebagai database utamanya.

## Teknologi yang Digunakan

- **Framework**: Laravel ^7.29
- **Bahasa Pemrograman**: PHP ^7.2.5 | ^8.0
- **Database**: PostgreSQL 10

## Persyaratan Sistem

Pastikan sistem yang digunakan memenuhi persyaratan berikut sebelum menjalankan aplikasi:

- PHP versi 7.2.5 atau lebih baru
- Composer untuk mengelola dependensi PHP
- PostgreSQL 10 sebagai database

## Cara Menginstal dan Menjalankan Aplikasi

1. **Clone Repository**
   ```sh
   git clone <repository-url>
   cd <nama-folder>
   ```
2. **Instal Dependensi**
   ```sh
   composer install
   ```
3. **Konfigurasi Environment**
   - Salin file `.env.example` menjadi `.env`
   ```sh
   cp .env.example .env
   ```
   - Atur konfigurasi database pada file `.env`
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=nama_database
   DB_USERNAME=nama_user
   DB_PASSWORD=password
   ```
4. **Generate Application Key**
   ```sh
   php artisan key:generate
   ```
5. **Jalankan Migrasi Database**
   ```sh
   php artisan migrate
   ```
6. **Menjalankan Aplikasi**
   ```sh
   php artisan serve
   ```
   Aplikasi akan berjalan di `http://127.0.0.1:8000`

## Kontributor

Silakan hubungi [Nama Kamu] untuk informasi lebih lanjut mengenai proyek ini.

## Lisensi

Aplikasi ini menggunakan lisensi [MIT | GPL | lainnya].
