<?php
require "koneksi.php";

if (isset($_POST["submit"])) {
    $nama = $_POST["nomor"];
    $nim = $_POST["nama"];
    $kelas = $_POST["barangpelelangan"];
    $prodi = $_POST["hargapatok"];

    $sql = "INSERT INTO pelelangan VALUES ('$nomor','$nama','$barangpelelangan','$hargapatok')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
        <script>
        alert('Berhasil Menambah Data Pelelangan Barang Antik!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal Menambah Data Pelelangan Barang Antik!');
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
        <label for="nomor">nomor</label>
        <input type="number" name="nomor" id="nomor" required>
        <br>

        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama" required>
        <br>

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