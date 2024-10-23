<?php
require "koneksi.php";

if (!isset($_SESSION['username'])) {
    echo "
    <script>
        alert('Anda harus login terlebih dahulu!');
        window.location.href = 'login.php';
    </script>
    ";
    exit;
}

$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM pelelangan WHERE id = $id");

if ($result) {
    echo "
        <script>
        alert('Berhasil Menghapus Data Pelelangan Barang Antik!');
        document.location.href = 'index.php';
        </script>
        ";
}
