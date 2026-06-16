# E-Library - Aplikasi Perpustakaan Digital

Aplikasi **E-Library** adalah platform perpustakaan digital berbasis web yang dibangun untuk memenuhi Tugas Akhir mata kuliah **Pemrograman Web II**. Aplikasi ini dirancang untuk mempermudah manajemen data buku, peminjaman, serta memberikan akses membaca bagi mahasiswa/pengguna.

## 👥 Anggota Kelompok
* [M Triyudha Ramadhani] - (2110817210008)
* [Muhammad Rizky Akbar] - (2410817210016)
* [Putri Fatima Az'hara] - (2410817120001)

## 🚀 Fitur Utama (Sesuai Ketentuan Tugas Akhir)
1. **Sistem Autentikasi (Login & Logout)**: Mendukung multi-user (contoh: Admin Perpustakaan dan Mahasiswa/Peminjam).
2. **Dashboard**: Menampilkan informasi ringkas seperti jumlah buku, jumlah peminjaman aktif, dan status pengguna.
3. **Manajemen Data (CRUD & Relasi Database)**:
   * **One-to-Many**: Relasi pada data buku, kategori, dan detail instansi.
   * **Many-to-Many**: Relasi antara Mahasiswa dan Buku (Proses Peminjaman).

## 🛠️ Framework yang Digunakan
* **Backend Framework**: Laravel
* **Frontend**: Tailwind CSS
* **Library JavaScript**: Alpine.js
* **Database**: MySQL
* **Version Control**: Git & GitHub

## 💻 Cara Menjalankan Proyek Secara Lokal

1. Clone repositori ini:
   ```bash
   git clone [https://github.com/azra07/UAS_WEB_II_Library.git](https://github.com/azra07/UAS_WEB_II_Library.git)
2. Install Composer, NPM, Environment dan PHP Key
   ```bash
   composer install
   npm install
   copy .env.example .env
   php artisan key:generate
3. Migrasi Data dan Build Aset
   ```bash
   php artisan migrate --seed
   npm run build
4. Run/Test
   ```bash
   Composer
   composer run dev
   composer run test
   PHP
   php artisan serve
   php artisan test
