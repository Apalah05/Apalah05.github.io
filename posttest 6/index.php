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
    <title>Pelelangan De' Auction | Website Pelelangan Barang Antik Yang Anda Inginkan</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container" id="home">
        <header>
            <nav>
                <div class="hamburger-menu" id="hamburger-menu">
                    <i class="fa fa-bars"></i>
                    <ul class="hamburger-navbar" id="hamburger-navbar">
                        <li><a href="#home" target="_blank">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#experience">Product</a></li>
                        <li><a href="#Data">Data Auction</a></li>
                        <li><a href="#contact">Contact</a>
                        <li>
                            <button id="dark-mode-btn">Toggle Dark Mode</button>
                        </li>
                    </ul>
                </div>
                
                <div class="right-nav">
                    <a href="login.php">
                        <img src="logo pelelangan.jpg" alt="Logo Pelelangan">
                    </a>
                </div>
            </nav>
        </header>

        <section>
            <div class="mid-info">
                <div class="name">Pelelangan <br>
                    <span>De' Auction</span>
                </div>
                <div class="work">Pelelangan Barang Antik</div>
            </div>
        </section>
    </div>
    <section class="sec-des" id="about">
        <div class="sec-des-left">
            <h3>About Me</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quas ratione id sit vitae quae quidem asperiores, sed molestias assumenda itaque eaque, eligendi esse veniam atque nostrum, culpa suscipit iusto?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum esse sequi doloribus eaque voluptas impedit nihil ex officiis minus distinctio alias nisi vitae atque omnis sed quae, itaque voluptatum rerum.
            </p>
        </div>
        <img src="barang pelelangan.jpg" alt="Pelelangan">
    </section>
    <section class="sec-des exp" id="experience">
        <div class="sec-des-left exp-left">
            <h3>Barang - Barang Antik De' Auction</h3>
            <div class="product-bg">
                <div class="product-bg-white">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/patung antik.jpg" alt="Patung Antik">
                                <h4>Patung Antik</h4>
                                <span>Rp 176.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/meja china antik.jpg" alt="Meja Antik">
                                <h4>Meja Antik</h4>
                                <span>Rp 15.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/mesin ketik antik.jpg" alt="Patung Antik">
                                <h4>Mesin Ketik Antik</h4>
                                <span>Rp 20.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/mobil antik.jpg" alt="Patung Antik">
                                <h4>Mobil Antik</h4>
                                <span>Rp 500.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/suling antik.jpg" alt="Patung Antik">
                                <h4>Seruling Antik</h4>
                                <span>Rp 9.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/teko antik.jpg" alt="Patung Antik">
                                <h4>Teko Antik</h4>
                                <span>Rp 5.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/telepon antik.jpg" alt="Patung Antik">
                                <h4>Telepon Antik</h4>
                                <span>Rp 11.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/teropong antik.jpg" alt="Patung Antik">
                                <h4>Teropong Antik</h4>
                                <span>Rp 10.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/Buku Antik.jpg" alt="Patung Antik">
                                <h4>Buku Sejarah Antik</h4>
                                <span>Rp 4.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/vas antik.jpg" alt="Patung Antik">
                                <h4>Vas Antik</h4>
                                <span>Rp 60.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/tv kecil antik.jpg" alt="Patung Antik">
                                <h4>TV kecil Antik</h4>
                                <span>Rp 35.000.000</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <img src="posttest 5/posttest 5/benda antik berbentuk bumi.jpg" alt="Patung Antik">
                                <h4>Globe Antik</h4>
                                <span>Rp 15.000.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="third-sec" id="Data">
    <main class="data-pelelangan-section">
        <h1 class="data-pelelangan-title">
            Data Pelelangan De' Auction Barang Antik<br>
        </h1>

        <search>
            <form action="" class="search-bar-pelelangan">
                <input type="text" placeholder="CARI NAMA ATAU BARANG PELELANGAN DISINI" class="search-input-pelelangan">
                <button type="submit" class="search-button-pelelangan">
                    <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                </button>
            </form>
        </search>

        <table class="table-pelelangan" border=1>
            <thead>
                <tr class="table-pelelangan-row">
                    <th class="table-pelelangan-header">Nomor</th>
                    <th class="table-pelelangan-header">Nama</th>
                    <th class="table-pelelangan-header">Foto Barang</th>
                    <th class="table-pelelangan-header">Barang Antik yang terlelang</th>
                    <th class="table-pelelangan-header">Harga Pelelangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($pelelangan as $plg) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td></td>
                        <td><?= $plg["nomor"] ?></td>
                        <td><?= $plg["nama"] ?></td>
                        <td><?= $plg["fotobarang"]?></td>
                        <td><?= $plg["barangpelelangan"] ?></td>
                        <td><?= $plg["hargapatok"] ?></td>
                <td> <a href="edit.php?id=<?= $plg['id'] ?>">Ubah</a> | <a href="delete.php?id=<?= $plg['id'] ?>" onclick="return confirm('Mau Hapus Data?');" >Hapus</a> </td>
            </tr>
            <?php $i++; endforeach ?>
            </tbody>
        </table>
    </main>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Center</h2>
        <p class="call-center">
            08111999555
        </p>
        <p class="email">
            De'Auction@gmail.com
        </p>
    </section>
    <hr>
    <footer id="footer">
        <div class="left-nav">
            <a href="#home" target="_blank">Home</a>
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