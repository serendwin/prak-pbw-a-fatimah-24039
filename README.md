# TUGAS PERTEMUAN 1

## 1. Menjalankan Program Awal

### 1. Output Contoh Kalkulator
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/cbb35a3b-1ef0-4dc5-b865-c3a5c56f7192" />

### 2. Output Contoh Biodata
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/a7143d75-abec-4474-bcd2-28215271bd63" />

## 2. Modifikasi Program

### 2.1 — Modify program Kalkulator

### 2.2 — Modify program Biodata

1. Mengitung nilai kumulatif dari setiap IPS

function countingipk(array $ips): float
{
    return array_sum($ips)/count($ips);
}  

Function countingipk digunakan untuk menghitung nilai rata-rata IPS mahasiswa berdasarkan seluruh semester yang tersedia.
- array $ips digunakan untuk menerima data IPS dalam bentuk array.
- : float menunjukkan bahwa function akan menghasilkan nilai berupa angka desimal.
- array_sum($ips) digunakan untuk menjumlahkan seluruh nilai IPS.
- count($ips) digunakan untuk menghitung jumlah data IPS atau jumlah semester.
- Hasil penjumlahan seluruh IPS kemudian dibagi dengan jumlah IPS untuk mendapatkan nilai rata-rata.

    'semester' => 
    [
        1 => 3.8,
        2 => 3.9,
        3 => 3.9,
        4 => 3.9,
        5 => 4.0,                       
    ]
    
$ipk = countingipk($mahasiswa['semester']);

<div>IPK : <?= number_format($ipk, 2) ?></div>

2. Status keaktifan mahasiswa 

function statusmahasiswa(int $semester): string
{
    if ($semester == 8) 
    {
        return 'lulus';
    }
    return 'aktif'; 

$semesterTerakhir = max(array_keys($mahasiswa['semester']));

<li>Status : <?= statusmahasiswa($semesterTerakhir) ?></li>
