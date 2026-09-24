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

Program kalkulator dimodifikasi dengan menambahkan perubahan pada program sesuai kebutuhan tugas.

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

1. Sebelum dimodify


2. Sesudah dimodify
<img width="187" height="196" alt="image" src="https://github.com/user-attachments/assets/2392384b-2b43-42ef-9519-2ddd134d08ae" />

