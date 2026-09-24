<?php

$nama_barang = '';
$harga = 0;
$jumlah = 0;
$subtotal = 0;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nama_barang = $_POST['nama_barang'] ?? '';
    $harga = (float) ($_POST['harga'] ?? 0);
    $jumlah = (int) ($_POST['jumlah'] ?? 0);

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
    else
    {
        $subtotal = $harga * $jumlah;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
</head>
<body>
    <h1>Struk Pembelian</h1>
    <form method="post">
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" required>
        <br><br>
        <label>Harga Barang:</label><br>
        <input type="text" name="harga" min="1" required>
        <br><br>
        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" min="1" required>
        <br><br>
        <button type="submit">Hitung Total</button>
    </form>

    <?php if ($pesan): ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($subtotal > 0): ?>
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
    <?php endif; ?>
</body>
</html>