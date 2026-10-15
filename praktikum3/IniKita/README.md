# TUGAS PERTEMUAN 2 - PRAK PEMROGRAMAN BERBASIS WEB

| **Nama** | Fatimah |
|---|---|
| **NPM** | 4524210039 |

---

## Daftar Isi

1. [Base Layout](#1-base-layout)
2. [Home Page](#2-home-page)
3. [Tentang Kami](#3-tentang-kami)
4. [Kontak](#4-kontak)
5. [Blade Syntax](#5-blade-syntax)

## 1. Base Layout
Base Layout dibuat sebagai template utama yang digunakan oleh seluruh halaman pada website. Penggunaan Base Layout bertujuan agar komponen yang sama, seperti navbar, footer, dan konfigurasi Tailwind CSS, tidak perlu ditulis berulang kali pada setiap halaman.
- Codingan :
<img width="628" height="411" alt="image" src="https://github.com/user-attachments/assets/a7ffd9de-632d-4b3a-9231-8f389025acfb" />

## 2. Home Page
Halaman ini berisi informasi utama mengenai website serta menjadi halaman pertama yang dilihat oleh pengguna ketika mengakses website.
- Codingan :
<img width="644" height="178" alt="image" src="https://github.com/user-attachments/assets/709faeec-89fb-405d-834f-10a77285d213" />

- Output :
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/673bf22a-5179-4df0-9834-c38631f728c3" />

## 3. Tentang Kami
Halaman ini menjelaskan secara singkat tujuan dan konsep dari project.
- Codingan :
<img width="642" height="219" alt="image" src="https://github.com/user-attachments/assets/0e9980bd-4828-4139-81ab-0d35a132be24" />

- Output :
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/ee9ce148-b137-4d0f-83bf-286c34afa5ee" />

## 4. Kontak
menampilkan informasi kontak pembuat digunakan oleh pengguna untuk menghubungi pembuat.
- Codingan :
<img width="677" height="149" alt="image" src="https://github.com/user-attachments/assets/39c86b65-045a-485c-9883-a7e386738640" />

- Output :
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/56fb906f-9e51-4475-b565-1addac2ce149" />

## 5. Blade Syntax
Terdapat beberapa penggunaan blade syntax pada projek ini seperti
- yield() <br>
  digunakan untuk menentukan bagian pada Base Layout yang nantinya akan diisi dengan konten dinamis dari halaman lain.
- extends() <br>
  digunakan untuk menghubungkan suatu halaman dengan Base Layout.
- sections() <br>
  digunakan untuk menentukan isi konten yang akan dimasukkan ke dalam @yield() pada Base Layout.
- route() <br>
  digunakan untuk menghasilkan URL berdasarkan nama route yang telah didefinisikan pada file web.php.
- asset() <br>
  digunakan untuk memanggil file statis yang berada di dalam folder public, seperti gambar, CSS, JavaScript, dan file lainnya.













