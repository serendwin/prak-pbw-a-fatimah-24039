# TUGAS PERTEMUAN 5 - PRAK PEMROGRAMAN BERBASIS WEB

| **Nama** | Fatimah |
|---|---|
| **NPM** | 4524210039 |

---

# Website SMP Mentari Ceria

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

## Daftar Isi

- [TUGAS PERTEMUAN 5 - PRAK PEMROGRAMAN BERBASIS WEB](#tugas-pertemuan-5---prak-pemrograman-berbasis-web)
- [Website SMP Mentari Ceria](#website-smp-mentari-ceria)
  - [Daftar Isi](#daftar-isi)
  - [Tentang Aplikasi](#tentang-aplikasi)
    - [Fitur Halaman:](#fitur-halaman)
  - [Fitur Utama](#fitur-utama)
  - [Tech Stack](#tech-stack)
    - [Backend](#backend)
    - [Frontend](#frontend)
    - [Development Tools](#development-tools)
   
## Tentang Aplikasi

Website SMP Mentari Ceria adalah aplikasi web sederhana yang dibangun dengan Laravel 12 untuk menampilkan informasi dan kegiatan sekolah. Aplikasi ini dilengkapi dengan fitur buku tamu digital yang memungkinkan pengunjung meninggalkan pesan dan kesan mereka.

### Fitur Halaman:

1. **Halaman Beranda :**  
   - Menampilkan informasi umum sekolah.
   - Menyajikan pengumuman dan kegiatan terbaru
   - Menampilkan dokumentasi kegiatan sekolah.
2. **Buku Tamu :** 
   - Menyediakan formulir untuk mengisi identitas pengunjung.
   - Memungkinkan pengunjung mengirimkan pesan, saran, dan kritik.
   - Menyimpan pesan pengunjung untuk dikelola oleh admin.
3. **Login dan Registrasi :** 
   - Menyediakan fitur autentikasi pengguna.
   - Memungkinkan admin masuk ke halaman pengelolaan.
   - Membatasi akses ke halaman administrasi bagi pengguna yang berwenang.
4. **Panel Administrasi :**
   - Mengelola informasi dan kegiatan sekolah.
   - Menambah, mengedit, dan menghapus data kegiatan.
   - Melihat dan mengelola pesan buku tamu.

## Fitur Utama

- **Jejak Kegiatan Sekolah** - Menampilkan berbagai aktivitas dan acara sekolah dalam bentuk kartu informasi yang menarik.
- **Layanan Buku Tamu Online** - Memfasilitasi pengunjung untuk menyampaikan komentar, saran, maupun pesan melalui website.
- **Validasi Data Pengunjung** - Memastikan nama, alamat email, dan isi pesan diisi sesuai ketentuan sebelum dikirim.
- 2377
- **Notifikasi Pengiriman Pesan** - Memberikan informasi kepada pengguna mengenai keberhasilan atau kegagalan pengiriman pesan.
- **Responsive Design** -  Menyesuaikan tata letak website agar nyaman digunakan melalui komputer, tablet, maupun smartphone.
- **Informasi Waktu Pesan** - Menampilkan perkiraan waktu sejak pesan dikirim, seperti “2 jam yang lalu”.
- **Modern UI/UX** - Menggunakan desain sederhana, rapi, dan konsisten dengan dukungan Tailwind CSS. 

## Tech Stack

### Backend
- **Laravel** 12.x - PHP Framework
- **PHP** ^8.2 - Programming Language
- **SQLite** - Database (Development)
- **Eloquent ORM** - Database Management

### Frontend
- **Blade Templates** - Template Engine
- **Tailwind CSS** 4.0 - CSS Framework
- **Vite** 7.0 - Asset Bundler & HMR
- **Axios** - HTTP Client

### Development Tools
- **Laravel Sail** - Docker Development Environment
- **Pest PHP** - Testing Framework
- **Laravel Pint** - Code Style Fixer
- **Concurrently** - Multi-command Runner

