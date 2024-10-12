<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_ruangan = $_POST['id_ruangan'];

    $sql = "INSERT INTO pegawai (nip, nama, alamat, tgl_lahir, id_ruangan) VALUES ('$nip', '$nama', '$alamat', '$tgl_lahir', '$id_ruangan')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah pegawai</h1>
    <form action="create.php" method="POST">
        <label for="nip">NIP:</label><br>
        <input type="text" name="nip" required><br><br>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" required><br><br>
        <label for="tgl lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tgl lahir" required><br><br>
        <label for="id ruangan">Id Ruangan:</label><br>
        <input type="text" name="id ruangan" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>