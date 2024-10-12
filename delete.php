<?php
include 'config.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];
    $sql = "DELETE FROM pegawai WHERE nip=$nip";
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_ruangan = $_POST['id_ruangan'];

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>