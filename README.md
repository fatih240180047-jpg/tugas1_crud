# Tugas Pemrograman Web - CRUD Perpustakaan Sederhana
**Nama:** Fatih Mumtaza Fahmi Nasution  
**NIM:** 240180047  
**Kelas:** A2  

Project ini adalah aplikasi CRUD sederhana menggunakan **Laravel 12** untuk mengelola data buku.

---

## Prasyarat
* XAMPP
* Composer sudah terinstall

---

## Cara Menjalankan Project

### 1. Persiapan Database
- Buka **phpMyAdmin** (`localhost/phpmyadmin`).
- Buat database baru dengan nama: `tugasdb_perpustakaan`.
- Klik database tersebut, pilih tab **Import**.
- Pilih file **`tugasdb_perpustakaan.sql`** yang ada di folder 'database' project ini.

    database/tugasdb_perpustakaan.sql

- Klik **Go/Kirim** hingga muncul pesan sukses.

### 2. Persiapan Project
- Ekstrak/buka folder project `crud_web`.
- Buka terminal atau CMD di dalam folder tersebut.
- Jalankan perintah untuk mengunduh library yang dibutuhkan:

   ```bash
   composer install
   ```

- Salin file konfigurasi:

    ```bash
    cp .env.example .env
    ```

### 3. Konfigurasi Environment (.env)
Buka file .env menggunakan VS Code, lalu sesuaikan bagian berikut agar terhubung ke database:

    DB_DATABASE=tugasdb_perpustakaan
    DB_USERNAME=root
    DB_PASSWORD=

    SESSION_DRIVER=file

### 4. Aktivasi Project
Jalankan perintah ini secara berurutan di terminal:

```bash
php artisan key:generate
php artisan serve

### 5. Akses Aplikasi
Buka browser dan ketik alamat:

    http://127.0.0.1:8000/buku
