<?php
require "koneksi.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM pelelangan WHERE id = $id");

while ($row = mysqli_fetch_assoc($result)) {
    $pelelangan[] = $row;
}

$pelelangan = $pelelangan[0];

if (isset($_POST["submit"])) {
    $nomor = $_POST["nomor"];
    $nama = $_POST["nama"];
    $barangpelelangan = $_POST["barangpelelangan"];
    $hargapatok = $_POST["hargapatok"];

    $sql = "UPDATE pelelangan SET nomor='$nomor',nama='$nama',barangpelelangan='$',hargapatok='$hargapatok' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
        alert('Berhasil Mengubah Data Pelelangan Barang Antik!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal Mengubah Data Pelelangan Barang Antik!');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Pelelangan Barang Antik</h1>
    <br>
    <a href="index.php">Back</a>

    <form action="" method="post">
        <label for="nomor">Nomor</label>
        <input type="number" name="nomor" id="nomor" value="<?= $pelelangan["nomor"] ?>" required>
        <br>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $pelelangan["nama"] ?>" required>
        <br>

        <label for="barangpelelangan">barangpelelangan</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganA" value="A" <?php if($pelelangan["barangpelelangan"] == "A")  echo "checked"  ?> >
        <label for="barangpelelanganA">A</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganB" value="B" <?php if($pelelangan["barangpelelangan"] == "B")  echo "checked"  ?> >
        <label for="barangpelelanganB">B</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganC" value="C" <?php if($pelelangan["barangpelelangan"] == "C")  echo "checked"  ?> >
        <label for="barangpelelanganC">C</label>
        <br>

         <label for="hargapatok">hargapatok</label>
         <select name="hargapatok" id="hargapatok" required>
            <option name="hargapatok" value="HIGH" <?php if($pelelangan["hargapatok"] == "HIGH AUCTION")  echo "selected"  ?> >HIGH AUCTION</option>
            <option name="hargapatok" value="MEDIUM" <?php if($pelelangan["hargapatok"] == "MEDIUM AUCTION")  echo "selected"  ?> >MEDIUM AUCTION</option>
            <option name="hargapatok" value="LOW" <?php if($pelelangan["hargapatok"] == "LOW AUCTION")  echo "selected"  ?> >LOW AUCTION</option>
         </select>
         <br>

         <button type="submit" name="submit">Ubah</button>
    </form>
</body>
</html>