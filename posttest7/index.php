<?php
session_start();
require "koneksi.php";

$sql = mysqli_query($conn, "SELECT * FROM pelelangan");
$pelelangan = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $pelelangan[] = $row;
}

$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelelangan De' Auction | Website Pelelangan Barang Antik</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container" id="home">
        <header>
            <nav id="nav">
                <div class="hamburger-menu" id="hamburger-menu">
                    <i class="fa fa-bars" id="hamb"></i>
                    <ul class="hamburger-navbar" id="hamburger-navbar">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#experience">Product</a></li>
                        <li><a href="#Data">Data Auction</a></li>
                        <li><a href="#contact">Contact</a></li>
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

        <section>
            <div class="mid-info">
                <div class="name">Pelelangan <br><span>De' Auction</span></div>
                <div class="work">Pelelangan Barang Antik</div>
            </div>
        </section>
    </div>

    <section class="sec-des" id="about">
        <div class="sec-des-left">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quas ratione id sit vitae...</p>
        </div>
        <img src="barang pelelangan.jpg" alt="Pelelangan">
    </section>

    <section class="exp" id="experience">
        <h3>Barang - Barang Antik De' Auction</h3>
        <section class="product-box">
            <div class="product-card">
                <img src="patung antik.jpg" alt="Patung Antik">
                <h4>Patung Antik</h4>
                <span>Rp 176.000.000</span>
            </div>
            <div class="product-card">
                <img src="meja china antik.jpg" alt="Meja Antik">
                <h4>Meja Antik</h4>
                <span>Rp 15.000.000</span>
            </div>
            <div class="product-card">
                <img src="mesin ketik antik.jpg" alt="Mesin Ketik Antik">
                <h4>Mesin Ketik Antik</h4>
                <span>Rp 20.000.000</span>
            </div>
            <div class="product-card">
                <img src="mobil antik.jpg" alt="Mobil Antik">
                <h4>Mobil Antik</h4>
                <span>Rp 500.000.000</span>
            </div>
            <div class="product-card">
                <img src="suling antik.jpg" alt="suling Antik">
                <h4>Seruling Antik</h4>
                <span>Rp 9.000.000</span>
            </div>
            <div class="product-card">
                <img src="teko antik.jpg" alt="Teko Antik">
                <h4>Teko Antik</h4>
                <span>Rp 5.000.000</span>
            </div>
            <div class="product-card">
                <img src="telepon antik.jpg" alt="Telepon Antik">
                <h4>Telepon Antik</h4>
                <span>Rp 11.000.000</span>
            </div>
            <div class="product-card">
                <img src="teropong antik.jpg" alt="Teropong Antik">
                <h4>Teropong Antik</h4>
                <span>Rp 10.000.000</span>
            </div>
            <div class="product-card">
                <img src="Buku Antik.jpg" alt="Buku Antik">
                <h4>Buku Sejarah Antik</h4>
                <span>Rp 4.000.000</span>
            </div>
            <div class="product-card">
                <img src="vas antik.jpg" alt="Vas Antik">
                <h4>Vas Antik</h4>
                <span>Rp 60.000.000</span>
            </div>
            <div class="product-card">
                <img src="tv kecil antik.jpg" alt="Tv kecil Antik">
                <h4>TV kecil Antik</h4>
                <span>Rp 35.000.000</span>
            </div>
            <div class="product-card">
                <img src="benda antik berbentuk bumi.jpg" alt="Globe Antik">
                <h4>Globe Antik</h4>
                <span>Rp 15.000.000</span>
            </div>
        </section>
    </section>

    <section class="third-sec" id="Data">
        <main class="data-pelelangan-section">
            <h1 class="data-pelelangan-title">Data Pelelangan De' Auction Barang Antik</h1>

            <?php if ($isLoggedIn) : ?>
                <div style="align-self: center;">
                    <a href="create.php" class="button" style="color: white; text-decoration: none;">
                        <i class="fa-solid fa-plus"></i> Tambah barang
                    </a>
                </div>
            <?php endif; ?>

            <table class="table-pelelangan">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Foto Barang</th>
                        <th>Harga Pelelangan</th>
                        <?php if ($isLoggedIn) : ?>
                            <th>Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelelangan as $plg) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $plg["nama"] ?></td>
                            <td><img src="<?= $plg["foto"] ?>" alt="<?= $plg["nama"] ?>" style="width: 100px;"></td>
                            <td><?= $plg["harga_dipatok"] ?></td>
                            <?php if ($isLoggedIn) : ?>
                                <td>
                                    <div style="display: flex; flex-direction: column; gap: 5px;">
                                        <a href="edit.php?id=<?= $plg['id'] ?>" class="btn-edit"><i class="fa-solid fa-pen"></i> Ubah</a>
                                        <a href="delete.php?id=<?= $plg['id'] ?>" class="btn-delete" onclick="return confirm('Mau Hapus Data?');"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </div>
                                </td>
                            <?php endif; ?>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Center</h2>
        <p class="call-center">08111999555</p>
        <p class="email">De'Auction@gmail.com</p>
    </section>

    <hr>

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