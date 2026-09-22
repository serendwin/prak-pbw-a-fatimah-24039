<?php
function statuskelulusan(float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu peningkatan';
}

$mahasiswa =
[
    'nim' => '66666',
    'nama' => 'Sepuki cihuy',
    'prodi' => 'Teknik Informatika',
    'semester' => 1,
    'ipk' => 9.99,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
        <li>
            <?= ucfirst($kunci) ?>: <?= htmlspecialchars((string)$nilai) ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <p>Prediket: <?= statuskelulusan($mahasiswa['ipk']) ?></p>
</body>
</html>