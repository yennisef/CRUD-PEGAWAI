<?php
include 'config.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];
    $sql = "SELECT * FROM pegawai WHERE nip=$nip";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_ruangan = $_POST['id_ruangan'];

    $sql = "UPDATE pegawai SET nip='$nip', nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', id_ruangan='$id_ruangan' WHERE nip=$nip";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST">
        <label for="nip">NIP:</label><br>
        <input type="integer" name="nip" value="<?php echo $row['nip']; ?>" required><br><br>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br><br>
        <label for="tgl lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tgl lahir" value="<?php echo $row['tgl_lahir']; ?>" required><br><br>
        <label for="id ruangan">Id Ruangan:</label><br>
        <input type="text" name="id ruangan" value="<?php echo $row['id_ruangan']; ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>