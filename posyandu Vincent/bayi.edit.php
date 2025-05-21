<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $sql = "SELECT * FROM kader WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nama = $_POST["Nama"];
    $Tanggal_lahir = $_POST["Tanggal_lahir"];
    $Berat_badan = $_POST["Berat_badan"];
    $Tinggi_badan = $_POST["Tinggi_badan"];
    $id = $_GET["id"];

    $sql = "INSERT INTO kader (Nama, Tanggal_akhir, Berat_badan.Tinggi_badan) values (?, ?, ?,?)";
    $row = $koneksi->execute_query($sql, [$Nama, $Tanggal_lahir, $Berat_badan, $Tinggi_badan]);
    header("location:databayi.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bayi</title>
</head>

<body>
    <h1>Edit bayi</h1>
    <form action="" method="POST">
        <div class="form-item">
            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" value="<?= htmlspecialchars($row['Nama_barang']) ?>">
        </div>
        <div class="form-item">
            <label for="Tanggal_lahir">stok</label>
            <input type="text" name="Tanggal_lahir" id="Tanggal_lahir" value="<?= $row['stok'] ?>">
        </div>
        <div class="form_item"></div>
        <label for="Berat_badan">Berat badan</label>
        <input type="Berat_badan" name="Berat_badan" id="Berat_badan" value="<?= $row['stok'] ?>">
        </div>
        <div class="form_item">
            <label for="Tinggi_badan">Tinggi badan</label>
            <input type="Tinggi_badan" name="Tinggi_badan" id="Tinggi_badan" value="<?= $row['stok'] ?>">
        </div>
        <button type="submit">submit</button>
    </form>
    <a href="barang.php">Kembali</a>
</body>

</html>