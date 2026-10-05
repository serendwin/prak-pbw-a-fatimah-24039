# Laporan Tugas Pertemuan 2
Disusun Oleh:
<br>
<table>
    <tbody>
        <tr>
            <td>
                Nama:
            </td>
            <td>
                Muhamad Edvin Hidayat
            </td>
        </tr>
        <tr>
           <td>
                NPM:
            </td>
            <td>
                4524210054
            </td>
        </tr>
        <tr>
            <td>
                Kelas:
            </td>
            <td>
                Prak PBW A
            </td>
        </tr>
    </tbody>
</table>

## Pembuatan View
### Base Layout
Proses base layout dibuat sebagai template bagi keseluruhan halaman. File ini memuat cdn tailwindcss, navbar, dan juga footer
<img width="1734" height="834" alt="image" src="https://github.com/user-attachments/assets/161100fd-37f1-4faf-b1d9-5ab85c8c2913" />
### Home Page
Halaman ini memuat informasi mengenai halaman awal atau home bagi pengguna yang akan mengakses url / atau /home
<img width="1724" height="938" alt="image" src="https://github.com/user-attachments/assets/f184002c-9839-4955-bab6-1589344d0ea5" />
<img width="1919" height="871" alt="image" src="https://github.com/user-attachments/assets/5a646225-bd52-420c-a595-cd4a3efba76f" />

### Tentang Kami
Halaman ini memuat informasi mengenai apa itu projek larapress
<img width="1918" height="947" alt="image" src="https://github.com/user-attachments/assets/c5f1d4c5-f561-4da5-bd9b-efd1e0ff6ea1" />
<img width="1919" height="869" alt="image" src="https://github.com/user-attachments/assets/d8ebbcd5-9aba-4d55-9ea9-4a4d84557bb5" />

### Kontak
Halaman ini memuat mengenai identitas pembuat dan juga kontak pembuat yang dapat dihubungi
<img width="1834" height="930" alt="image" src="https://github.com/user-attachments/assets/c5534b95-566e-4d4a-9ee5-0ac4c85fd2eb" />
<img width="1918" height="858" alt="image" src="https://github.com/user-attachments/assets/d097e8ef-50b3-4dc7-857e-6eaf7ffb0737" />

## Konfigurasi URL pada web.php
Keseluruhan konfigurasi yang ada pada web.php ini berfungsi untuk mendefinisikan url dengan fungsi/view apa yang ingin dituju pada url tersebut.
<img width="1857" height="471" alt="image" src="https://github.com/user-attachments/assets/9fd67c8e-b57d-436a-991d-4135b3d6c5f1" />

## Penggunaan Blade Syntax
Terdapat beberapa penggunaan blade syntax pada projek ini seperti
- yield() <br>
  Kode ini berfungsi untuk menentukan dimana letak sintaks dinamis yang akan dimuat. Sintaks dinamis disini adalah sintaks yang ada di file view dan diawali extends() dan juga sections()
- extends() <br>
  Kode ini berfungsi untuk menghubungkan antara file yang sedang dikelola dengan file base, dimana pada konteks projek ini file base ada pada layouts/base.blade.php
- sections() <br>
  Kode ini berfungsi untuk menghubungkan antara code html dinamis yang nantinya akan dimuat pada bagian yield() yang telah didefinisikan sebelumnya pada base file
- route() <br>
  Kode ini berfungsi untuk mengenerate url yang telah didefinisikan sebelumnya pada web.php
- asset() <br>
  kode ini berfungsi untuk memuat file-file static yang di tempatkan pada folder public/














