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


