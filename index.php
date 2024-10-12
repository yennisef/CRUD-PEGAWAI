<?php
include 'config.php';

$sql = "SELECT * FROM pegawai";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Pegawai</h1>
    <a href="create.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Id Ruangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['nip']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['tgl_lahir']; ?></td>
                    <td><?php echo $row['id_ruangan']; ?></td>
                    <td>
                        <a href="update.php?nip=<?php echo $row['nip']; ?>">Edit</a> | 
                        <a href="delete.php?nip=<?php echo $row['nip']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>