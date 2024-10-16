<?php
require "koneksi.php";

if (isset($_POST["submit"])) {
    $nomor = $_POST["nomor"];
    $nama = $_POST["nama"];
    $tmp_name = $_FILES["gambar"]["tmp_name"];
    $barangpelelangan= $_POST["barangpelelangan"];
    $hargalelang = $_POST["hargapatok"];

    $ekstensi = explode('.', $file_name);
    $ekstensi = strtolower(end($ekstensi));
    $ekstensi = "." . $ekstensi;

    $newFileName = $nama . $ekstensi;

    if (move_uploaded_file($tmp_name, 'img/' . $newFileName)) {

        $sql = "INSERT INTO pelelangan VALUES ('$nomor','$nama', '$newFileName','$barangpelelangan','$hargapatok')";

        if ($result) {
            echo "
        <script>
        alert('Berhasil Menambah Data Pelelangan De' Auction!');
        document.location.href = 'index.php';
        </script>
        ";
        } else {
            echo "
        <script>
        alert('Gagal Menambah Data Pelelangan De' Auction!');
        </script>
        ";
        }
    } else {
        echo "
        <script>
        alert('File Tidak Valid!');
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
    <title>Tambah Data Pelelangan Barang Antik De' Auction</title>
</head>
<body>
    <h1>Tambah Data Pelelangan Barang Antik De' Auction</h1>
    <br>
    <a href="index.php">Back</a>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nomor">nomor</label>
        <input type="number" name="nomor" id="nomor" required>
        <br>

        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama" required>
        <br>

        <label for="gambar">Upload Gambar</label>
        <input type="file" name="gambar" id="gambar"><br>

        <button type="submit" name="submit">Tambah File</button>

        <label for="barangpelelangan">barangpelelangan</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganA" value="A">
        <label for="barangpelelanganA">A</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganB" value="B">
        <label for="barangpelelanganB">B</label>
        <input type="radio" name="barangpelelangan" id="barangpelelanganC" value="C">
        <label for="barangpelelanganC">C</label>
        <br>

         <label for="hargapatok">hargapatok</label>
         <select name="hargapatok" id="hargapatok" required>
            <option name="hargapatok" value="HIGH">HIGH AUCTION</option>
            <option name="hargapatok" value="MEDIUM">MEDIUM AUCTION</option>
            <option name="hargapatok" value="LOW">LOW AUCTION</option>
         </select>
         <br>

         <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>