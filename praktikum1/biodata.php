<?php
function statuskelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu peningkatan';
}

function countingipk(array $ips): float
{
    return array_sum($ips)/count($ips);
}  

function statusmahasiswa(int $semester): string
{
    if ($semester == 8) 
    {
        return 'lulus';
    }
    return 'aktif'; 
}

$mahasiswa =
[
    'nim' => '66666',
    'nama' => 'Merugame udon',
    'prodi' => 'Teknik Informatika',
    'semester' => 
    [
        1 => 3.8,
        2 => 3.9,
        3 => 3.9,
        4 => 3.9,
        5 => 4.0,                       
    ]
];

$ipk = countingipk($mahasiswa['semester']);

$semesterTerakhir = max(array_keys($mahasiswa['semester']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa</title>
</head>

<body>
    <h4>Biodata Mahasiswa</h4>
    <ul>
        <li>NIM : <?= htmlspecialchars($mahasiswa['nim']) ?></li>
        <li>Nama : <?= htmlspecialchars($mahasiswa['nama']) ?></li>
        <li>Prodi : <?= htmlspecialchars($mahasiswa['prodi']) ?></li>
        <li>Status : <?= statusmahasiswa($semesterTerakhir) ?></li>
    </ul>

    <h4>Nilai IPS</h4>
    <ul>
        <?php foreach ($mahasiswa['semester'] as $semester => $ips): ?>
            <li>Semester <?= $semester ?> : IPS <?= number_format($ips, 2) ?></li>
        <?php endforeach; ?>
        <div>IPK : <?= number_format($ipk, 2) ?></div>
        <div>Predikat : <?= statuskelulusan($ipk) ?></div>        
    </ul>
</body>
</html>