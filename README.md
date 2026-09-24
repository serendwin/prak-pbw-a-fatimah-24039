# TUGAS PERTEMUAN 1

## 1. Menjalankan Program Awal

Program awal yang dijalankan terdiri dari dua contoh program, yaitu kalkulator dan biodata.

### 1.1 Output Contoh Kalkulator

<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/cbb35a3b-1ef0-4dc5-b865-c3a5c56f7192" />

### 1.2 Output Contoh Biodata

<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/a7143d75-abec-4474-bcd2-28215271bd63" />

---

## 2. Modifikasi Program

### 2.1 Modifikasi Program Kalkulator

Pada program ini dilakukan modifikasi dari program kalkulator sederhana menjadi program struk pembelian, program ini digunakan untuk memasukkan nama barang, harga barang, dan jumlah barang dan setelah data dimasukkan, program akan melakukan validasi, menghitung subtotal, dan menampilkan detail pembelian serta total harga.

### 1. Menghitung Subtotal Pembelian

Pada program ditambahkan proses untuk menghitung subtotal berdasarkan harga dan jumlah barang.

```php
$subtotal = $harga * $jumlah;
```

Penjelasan:

* `$harga` digunakan untuk menyimpan harga barang yang dimasukkan oleh pengguna.
* `$jumlah` digunakan untuk menyimpan jumlah barang yang dibeli.
* Operator `*` digunakan untuk mengalikan harga barang dengan jumlah barang.
* Hasil perkalian disimpan ke dalam variabel `$subtotal`.

Data yang digunakan misalnya:

```text
Nama Barang  = Indomie
Harga Barang = 3500
Jumlah       = 3
```

Perhitungannya:

```text
3500 × 3

= 10500
```

Sehingga nilai `$subtotal` adalah `10500`.

Hasil subtotal kemudian ditampilkan menggunakan:

```php
<p>
    Subtotal:
    Rp <?= number_format($subtotal, 0, ',', '.') ?>
</p>
```

`number_format($subtotal, 0, ',', '.')` digunakan untuk memformat angka agar lebih mudah dibaca dengan menggunakan titik sebagai pemisah ribuan.

Sehingga hasilnya menjadi:

```text
Subtotal : Rp 10.500
```

### 2. Menambahkan Validasi Data Pembelian

Pada program ditambahkan validasi untuk memastikan data pembelian yang dimasukkan oleh pengguna sesuai.

```php
if ($harga <= 0)
{
    $pesan = 'Harga barang harus lebih dari 0.';
}
elseif ($jumlah <= 0)
{
    $pesan = 'Jumlah barang harus lebih dari 0.';
}
elseif ($nama_barang == '')
{
    $pesan = 'Nama barang harus diisi.';
}
```

Penjelasan:

* `if ($harga <= 0)` digunakan untuk mengecek apakah harga barang bernilai 0 atau kurang.
* Jika harga kurang dari atau sama dengan 0, program menampilkan pesan **`Harga barang harus lebih dari 0.`**
* `elseif ($jumlah <= 0)` digunakan untuk mengecek apakah jumlah barang bernilai 0 atau kurang.
* Jika jumlah kurang dari atau sama dengan 0, program menampilkan pesan **`Jumlah barang harus lebih dari 0.`**
* `elseif ($nama_barang == '')` digunakan untuk mengecek apakah nama barang kosong.
* Jika nama barang tidak diisi, program menampilkan pesan **`Nama barang harus diisi.`**

Jika seluruh data sudah valid, program akan menjalankan proses perhitungan:

```php
else
{
    $subtotal = $harga * $jumlah;
}
```

Artinya, perhitungan subtotal hanya dilakukan apabila nama barang, harga, dan jumlah barang sudah memenuhi validasi.

### 3. Menampilkan Detail Pembelian

Selain menghitung subtotal, program dimodifikasi agar dapat menampilkan detail pembelian.

```php
<h2>Detail Pembelian</h2>

<p>
    Nama Barang:
    <?= htmlspecialchars($nama_barang) ?>
</p>

<p>
    Harga:
    Rp <?= number_format($harga, 0, ',', '.') ?>
</p>

<p>
    Jumlah:
    <?= $jumlah ?>
</p>

<p>
    Subtotal:
    Rp <?= number_format($subtotal, 0, ',', '.') ?>
</p>

<h3>
    Total:
    Rp <?= number_format($subtotal, 0, ',', '.') ?>
</h3>
```

`htmlspecialchars($nama_barang)` digunakan untuk menampilkan nama barang dengan lebih aman.

Sedangkan:

```php
number_format($harga, 0, ',', '.')
```

digunakan agar harga ditampilkan dalam format rupiah dengan pemisah ribuan.

Contohnya:

```text
Detail Pembelian

Nama Barang : Indomie
Harga       : Rp 3.500
Jumlah      : 3
Subtotal    : Rp 10.500
Total       : Rp 10.500
```

Dengan modifikasi ini, program yang sebelumnya berupa kalkulator sederhana telah diubah menjadi program Struk Pembelian yang dapat menerima data barang, melakukan validasi, menghitung subtotal, dan menampilkan hasil pembelian dalam bentuk sederhana.

## Teknologi yang Digunakan

* PHP
* HTML
* XAMPP
* Web Browser

## Cara Menjalankan Program

1. Pastikan XAMPP sudah terinstall.
2. Jalankan **Apache** pada XAMPP.
3. Simpan file program PHP di dalam folder:

```text
C:\xampp\htdocs\struk-pembelian\
```

4. Pastikan file utama bernama:

```text
index.php
```

5. Buka browser.
6. Masukkan alamat:

```text
http://localhost/struk-pembelian/
```

7. Masukkan nama barang, harga barang, dan jumlah barang.
8. Klik tombol **Hitung Total**.
9. Hasil pembelian akan ditampilkan pada halaman.

## Contoh Input

```text
Nama Barang  : Indomie
Harga Barang : 3500
Jumlah       : 3
```

## Contoh Output

```text
Detail Pembelian

Nama Barang : Indomie
Harga       : Rp 3.500
Jumlah      : 3
Subtotal    : Rp 10.500
Total       : Rp 10.500
```

Modifikasi program dilakukan dengan menambahkan input data barang, perhitungan subtotal, validasi data, dan tampilan detail pembelian untuk melakukan perhitungan sederhana berdasarkan harga dan jumlah barang yang dibeli.

1. Codingan sebelum dimodify
<img width="290" height="310" alt="image" src="https://github.com/user-attachments/assets/42bb588d-5061-490b-91c6-eddce975ea67" />
<img width="273" height="227" alt="image" src="https://github.com/user-attachments/assets/26bf3a05-3bc3-4bdc-8a96-6deaa6723936" />

2. Codingan sesudah dimodify
<img width="215" height="265" alt="image" src="https://github.com/user-attachments/assets/ffaf0a22-e4ae-476f-aa5f-5847549707fe" />
<img width="288" height="410" alt="image" src="https://github.com/user-attachments/assets/f7c77629-4190-4cf1-971a-9a006baaa961" />

- Output setelah dimodify
<img width="149" height="320" alt="image" src="https://github.com/user-attachments/assets/c6bb3ecf-3ad0-4024-a5ed-d4a9cb0e86c3" />

### 2.2 Modifikasi Program Biodata

Pada program biodata dilakukan beberapa modifikasi, yaitu menghitung nilai kumulatif IPS dan menentukan status keaktifan mahasiswa.

#### 1. Menghitung Nilai Kumulatif dari Setiap IPS

Function `countingipk` digunakan untuk menghitung nilai rata-rata IPS mahasiswa berdasarkan seluruh semester yang tersedia.

```php
function countingipk(array $ips): float
{
    return array_sum($ips) / count($ips);
}
```

Penjelasan:

* `array $ips` digunakan untuk menerima data IPS dalam bentuk array.
* `: float` menunjukkan bahwa function menghasilkan nilai berupa angka desimal.
* `array_sum($ips)` digunakan untuk menjumlahkan seluruh nilai IPS.
* `count($ips)` digunakan untuk menghitung jumlah data IPS atau jumlah semester.
* Hasil penjumlahan seluruh IPS kemudian dibagi dengan jumlah semester untuk mendapatkan nilai rata-rata.

Data IPS yang digunakan:

```php
'semester' => 
[
    1 => 3.8,
    2 => 3.9,
    3 => 3.9,
    4 => 3.9,
    5 => 4.0,
]
```

Perhitungannya:

```text
(3.8 + 3.9 + 3.9 + 3.9 + 4.0) / 5

= 19.5 / 5

= 3.90
```

Hasil perhitungan kemudian disimpan ke dalam variabel `$ipk`:

```php
$ipk = countingipk($mahasiswa['semester']);
```

Pada bagian tersebut, data IPS mahasiswa dari `mahasiswa['semester']` dikirim ke function `countingipk`. Hasil perhitungan kemudian disimpan ke dalam variabel `$ipk`.

Untuk menampilkan nilai IPK dengan dua angka di belakang koma digunakan:

```php
<div>IPK : <?= number_format($ipk, 2) ?></div>
```

`number_format($ipk, 2)` digunakan untuk memformat nilai IPK agar ditampilkan dengan **2 angka di belakang koma**. Sehingga hasilnya menjadi:

```text
IPK : 3.90
```

#### 2. Menentukan Status Keaktifan Mahasiswa

Function `statusmahasiswa` digunakan untuk menentukan status mahasiswa berdasarkan semester terakhir yang telah ditempuh.

```php
function statusmahasiswa(int $semester): string
{
    if ($semester == 8) 
    {
        return 'lulus';
    }
    
    return 'aktif';
}
```

Penjelasan:

* `int $semester` digunakan untuk menerima nomor semester dalam bentuk bilangan bulat.
* `: string` menunjukkan bahwa function menghasilkan nilai berupa teks.
* `if ($semester == 8)` digunakan untuk mengecek apakah mahasiswa sudah mencapai semester 8.
* Jika semester terakhir adalah 8, function mengembalikan status **`lulus`**.
* Jika semester terakhir belum mencapai 8, function mengembalikan status **`aktif`**.

Untuk mendapatkan semester terakhir digunakan:

```php
$semesterTerakhir = max(array_keys($mahasiswa['semester']));
```

`array_keys()` digunakan untuk mengambil seluruh nomor semester dari array, sedangkan `max()` digunakan untuk mencari nomor semester terbesar.

Contohnya:

```text
Semester = 1, 2, 3, 4, 5

Semester terbesar = 5
```

Sehingga nilai `$semesterTerakhir` adalah `5`.

Selanjutnya status mahasiswa ditampilkan menggunakan:

```php
<li>Status : <?= statusmahasiswa($semesterTerakhir) ?></li>
```

Karena semester terakhir adalah 5, maka kondisi `$semester == 8` bernilai salah dan status yang ditampilkan adalah:

```text
Status : aktif
```

Jika semester terakhir adalah 8, maka status yang ditampilkan menjadi:

```text
Status : lulus
```

Dengan modifikasi ini, program biodata tidak hanya menampilkan data mahasiswa, tetapi juga dapat menghitung nilai IPK berdasarkan IPS dan menentukan status mahasiswa berdasarkan semester terakhir.

1. Codingan sebelum dimodify
<img width="320" height="377" alt="image" src="https://github.com/user-attachments/assets/268a89e9-b660-4432-9510-dd4fcf875e19" />

2. Codingan sesudah dimodify
<img width="280" height="338" alt="image" src="https://github.com/user-attachments/assets/97452c86-91d2-40ff-85f2-e93af5dff897" />
<img width="322" height="225" alt="image" src="https://github.com/user-attachments/assets/6a7a2909-6395-4731-a219-a339794d30d3" />

- Output setelah dimodify
<img width="212" height="200" alt="image" src="https://github.com/user-attachments/assets/e32de924-3ec5-4017-85b0-6df315373ff7" />

## 3. Error & Perbaikan

### 3.1 Modifikasi Program Kalkulator
* Error yang Ditemukan

Error terjadi pada bagian:

```php
<li>Status : <?= statusmahasiswa($semesterTerakhir) ?></li>
```

* Penyebab Error

Variabel `$semesterTerakhir` belum didefinisikan sebelum digunakan. Program mencoba mengirim `$semesterTerakhir` sebagai parameter ke function `statusmahasiswa()`, tetapi variabel tersebut belum memiliki nilai.

* Langkah Perbaikan

Mendefinisikan variabel `$semesterTerakhir` terlebih dahulu dengan mengambil nomor semester terbesar dari data mahasiswa.

```php
$semesterTerakhir = max(array_keys($mahasiswa['semester']));
```

`array_keys()` digunakan untuk mengambil nomor semester dari array, sedangkan `max()` digunakan untuk mencari nomor semester terbesar.

Setelah diperbaiki, bagian kode menjadi:

```php
$ipk = countingipk($mahasiswa['semester']);
$semesterTerakhir = max(array_keys($mahasiswa['semester']));
```

Dengan data semester 1 sampai 5, nilai `$semesterTerakhir` adalah `5`. Nilai tersebut kemudian digunakan oleh function `statusmahasiswa()`. Karena semester terakhir belum mencapai semester 8, status mahasiswa ditampilkan sebagai **aktif**.


### 3.2 Modifikasi Program Biodata
