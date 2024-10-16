<?php
    require "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM pelelangan");

    $pelelangan = [];

    while ($row = mysqli_fetch_assoc($sql)) {
        $pelelangan[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelelangan Barang Antik</title>
</head>
<body>
    <h1>Data Pelelangan Barang Antik</h1>
    <br>
    <a href="create.php">Tambah Data Pelelangan Barang Antik</a>
    <table border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Barang Pelelangan</th>
                <th>Harga yang Dipatok</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; 
            foreach($pelelangan as $plg) : ?>
            <tr>
                <td><?= $i ?></td>
                <?php $direktori = "img/" . $plg["foto"]; ?>
                <td>
                    <center>
                        <?php if ($plg["foto"] == "") {
                            echo "foto belum ada";
                        } else {
                            echo "<img src='$direktori' alt='foto' width='50px' height='50px'>";
                        } ?>
                    </center>
                </td>
                <td><?= $plg["nomor"] ?></td>
                <td><?= $plg["nama"] ?></td>
                <td><?= $plg["barangpelelangan"] ?></td>
                <td><?= $plg["hargapatok"] ?></td>
                <td> <a href="edit.php?id=<?= $plg['id'] ?>">Ubah</a> | <a href="delete.php?id=<?= $plg['id'] ?>" onclick="return confirm('Mau Hapus Data?');" >Hapus</a> </td>
            </tr>
            <?php $i++;
            endforeach ?>
        </tbody>
    </table>
</body>
</html>