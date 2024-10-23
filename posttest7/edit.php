<?php
require "koneksi.php";
session_start();

if (!isset($_SESSION['username'])) {
    echo "
    <script>
        alert('Anda harus login terlebih dahulu!');
        window.location.href = 'login.php';
    </script>
    ";
    exit;
}

$isLoggedIn = isset($_SESSION['username']);

$id = $_GET['id'];

$sql = "SELECT * FROM pelelangan WHERE id = $id";
$result = mysqli_query($conn, $sql);
$pelelangan = mysqli_fetch_assoc($result);

if (!$pelelangan) {
    echo "
    <script>
        alert('Data tidak ditemukan!');
        document.location.href = 'index.php';
    </script>";
    exit;
}

// Jika form disubmit
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $tmp_name = $_FILES["gambar"]["tmp_name"];
    $file_name = $_FILES["gambar"]["name"];
    $hargapatok = $_POST["hargapatok"];

    // Validasi ekstensi file
    $ekstensi_valid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensi = explode('.', $file_name);
    $ekstensi = strtolower(end($ekstensi));

    // Jika ada file yang diupload
    if (!empty($file_name)) {
        $newFileName = $nama . '.' . $ekstensi;

        // Cek apakah file yang diupload valid
        if (in_array($ekstensi, $ekstensi_valid)) {
            // Hapus gambar lama
            unlink('./' . $pelelangan['foto']);

            // Upload file baru
            if (move_uploaded_file($tmp_name, './' . $newFileName)) {
                // Update data dengan gambar baru
                $sql = "UPDATE pelelangan SET nama='$nama', harga_dipatok='$hargapatok', foto='$newFileName' WHERE id=$id";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "
                    <script>
                        alert('Data berhasil diupdate!');
                        document.location.href = 'index.php';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Gagal mengupdate data!');
                    </script>";
                }
            } else {
                echo "
                <script>
                    alert('File gagal diupload!');
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Format file tidak valid! Hanya mendukung JPG, JPEG, PNG, GIF');
            </script>";
        }
    } else {
        // Update data tanpa mengganti gambar
        $sql = "UPDATE pelelangan SET nama='$nama', harga_dipatok='$hargapatok' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Gagal mengupdate data!');
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang Pelelangan Barang Antik De' Auction</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <nav id="nav">
            <div class="hamburger-menu" id="hamburger-menu">
                <i class="fa fa-bars" id="hamb" style="color: black;"></i>
                <ul class="hamburger-navbar" id="hamburger-navbar">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#experience">Product</a></li>
                    <li><a href="index.php#Data">Data Auction</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li>
                        <?php if ($isLoggedIn) : ?>
                            <a href="logout.php" class="button" style="color: white;">Logout</a>
                        <?php else : ?>
                            <a href="login.php" class="button" style="color: white;">Login</a>
                        <?php endif; ?>
                    </li>
                    <li><button id="dark-mode-btn" class="button" style="color: white;">Toggle Dark Mode</button></li>
                </ul>
            </div>
            <div class="right-nav">
                <a href="login.php"><img src="logo pelelangan.jpg" alt="Logo Pelelangan"></a>
            </div>
        </nav>
    </header>

    <h1 style="padding-bottom: 30px; padding-top: 30px;">Edit Barang Pelelangan Barang Antik De' Auction</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Barang</label>
        <input type="text" name="nama" id="nama" value="<?= $pelelangan['nama']; ?>" required>

        <label for="gambar">Upload Gambar</label>
        <input type="file" name="gambar" id="gambar">

        <label for="hargapatok">Harga Patok</label>
        <select name="hargapatok" id="hargapatok" required>
            <option value="HIGH" <?= $pelelangan['harga_dipatok'] == 'HIGH' ? 'selected' : ''; ?>>HIGH AUCTION</option>
            <option value="MEDIUM" <?= $pelelangan['harga_dipatok'] == 'MEDIUM' ? 'selected' : ''; ?>>MEDIUM AUCTION</option>
            <option value="LOW" <?= $pelelangan['harga_dipatok'] == 'LOW' ? 'selected' : ''; ?>>LOW AUCTION</option>
        </select>

        <button type="submit" name="submit">Update Data</button>
    </form>

    <hr style="margin-top: 75px">

    <footer id="footer">
        <div class="left-nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#experience">Product</a>
            <a href="#Data">Data</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="right-nav">
            <a href="#home">Copyright 2024 @De'Auction</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>