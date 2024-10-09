<?php
    require "koneksi.php";

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