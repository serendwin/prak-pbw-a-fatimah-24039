# 📚 Authbook

Aplikasi manajemen inventaris buku berbasis **Laravel** dan **Filament Admin Panel v3**, dengan pembagian hak akses untuk `admin`, `staff`, dan `viewer`.

---

## 1. Penjelasan Arsitektur

### A. Diagram ERD (Entity Relationship Diagram)

Database dirancang dengan prinsip relasional standar Laravel Eloquent. Berikut entitas, atribut, dan kuncinya (PK = Primary Key, FK = Foreign Key).

**1. Entitas `users`** 
- id (PK)
- name: nama pengguna
- email: email pengguna
- password: kata sandi (hash)
- role: `admin`, `staff`, atau `viewer`
- timestamps: created_at, updated_at

**2. Entitas `authors`**
- id (PK)
- name: nama penulis
- bio: biografi singkat
- timestamps: created_at, updated_at

**3. Entitas `books`** 
- id (PK)
- title: judul buku
- isbn: nomor ISBN
- publisher: penerbit
- year: tahun terbit
- status: status buku
- cover: path gambar cover
- author_id (FK → `authors.id`)
- timestamps: created_at, updated_at

**4. Entitas `categories`** 
- id (PK)
- name: nama kategori
- timestamps: created_at, updated_at

**5. Entitas `book_category`** 
- book_id (FK → `books.id`)
- category_id (FK → `categories.id`)

```
```
### B. Penjelasan Relasi Antar Tabel

- **One-to-Many (`authors` → `books`)**: satu penulis dapat menulis banyak buku, tetapi satu buku hanya memiliki satu penulis utama yang dicatat di kolom `author_id`.
- **Many-to-Many (`books` ↔ `categories`)**: satu buku dapat memiliki banyak kategori, dan satu kategori dapat mencakup banyak buku. Relasi ini dihubungkan oleh tabel perantara `book_category`.

### C. Penjelasan Flow Aplikasi (Request hingga Response)

1. **Request**: pengguna mengirim request lewat browser, misalnya mengakses `http://localhost:8000/admin/books`.
2. **Routing & Middleware**: request diterima router Laravel, lalu melewati middleware autentikasi bawaan Filament untuk memastikan pengguna sudah login.
3. **Policy & Authorization**: sistem memeriksa `BookPolicy` / `AuthorPolicy` berdasarkan role pengguna (admin, staff, viewer) untuk menentukan hak akses CRUD.
4. **Filament Resource & Eloquent**: jika diizinkan, Resource memanggil Eloquent Model untuk mengambil, menyimpan, atau mengubah data di database MySQL.
5. **Response**: data diproses komponen Livewire/Filament, dirender menjadi antarmuka panel admin, lalu dikembalikan sebagai response HTML/JSON ke browser.

---

## 2. Perbandingan dengan Pendekatan Tradisional

### A. Perbandingan CRUD: Filament vs Manual

| Aspek | Manual | Filament |
|---|---|---|
| Langkah kerja | Membuat Migration, Model, Controller, form HTML/Blade satu per satu, validasi request, serta tabel dan pagination dari awal | Cukup satu perintah artisan untuk membuat Resource |
| Form | Ditulis manual | Dibuat otomatis lewat form builder |
| Tabel | Pencarian, filter, dan pagination dibangun sendiri | Tabel interaktif dengan pencarian dan filter bawaan |
| Halaman | Dibuat satu per satu | Create, Edit, dan View tersedia instan |
| Teknologi | Bebas | TALL stack (Tailwind, Alpine, Laravel, Livewire) |

### B. Kelebihan dan Kekurangan

| Pendekatan | Kelebihan | Kekurangan |
|---|---|---|
| **Filament** | • Pengerjaan jauh lebih cepat dan efisien<br>• UI/UX modern, responsif, dan rapi secara default<br>• Fitur bawaan lengkap (widget statistik, chart, auth, policy) | • Kustomisasi tingkat lanjut butuh pemahaman mendalam tentang Livewire<br>• Struktur UI sangat bergantung pada pola bawaan Filament |
| **Manual** | • Fleksibilitas tinggi dalam mendesain UI/UX<br>• Kontrol penuh atas kode frontend dan backend | • Waktu pengembangan lama<br>• Komponen dasar (tabel, paginasi, validasi) harus dibangun berulang |

### C. Kapan Menggunakan Filament, Kapan Tidak

**Gunakan Filament ketika:**
- Membangun panel admin internal atau dashboard CMS.
- Membuat sistem manajemen data atau aplikasi inventaris.
- Mengerjakan proyek dengan tenggat ketat yang butuh fungsionalitas CRUD standar yang kokoh.

**Gunakan pendekatan manual ketika:**
- Membangun aplikasi publik (front-facing) dengan desain UI/UX yang unik, kompleks, dan kustom.
- Membuat aplikasi berskala besar dengan kebutuhan performa frontend kustom, seperti SPA dengan Vue/React.

---

## 3. Refleksi Pembelajaran

### A. Apa yang Dipelajari dari Praktikum Ini?

- Mengimplementasikan Filament Admin Panel v3 di ekosistem Laravel.
- Mengatur Role-Based Access Control (RBAC) dengan Laravel Policies (`BookPolicy` dan `AuthorPolicy`) untuk membedakan hak akses Admin, Staff, dan Viewer.
- Membuat dan mengonfigurasi Dashboard Widgets (Stats Overview dan Chart Widget berbasis Doughnut Chart) untuk visualisasi statistik perpustakaan.
- Mengelola relasi One-to-Many dan Many-to-Many langsung di form generator Filament.

### B. Kesulitan yang Dihadapi dan Cara Mengatasinya

| Kesulitan | Solusi |
|---|---|
| Gambar cover buku tidak tampil karena link storage belum terhubung | Menjalankan `php artisan storage:link` dan memastikan direktori publik terhubung dengan benar |
| Chart tampil terlalu besar dan berada di atas card statistik | Mengatur `$columnSpan` menjadi `'half'`, membatasi tinggi maksimum dengan `getMaxHeight()`, dan mengatur prioritas urutan lewat `$sort` |

### C. Rencana Pengembangan Aplikasi Selanjutnya

- Menambahkan sistem notifikasi otomatis lewat email atau WhatsApp yang terkirim saat status buku berubah dari "dipinjam" menjadi "dikembalikan".
- Menyediakan fitur ekspor laporan data buku dan statistik perpustakaan dalam format PDF maupun Excel.v