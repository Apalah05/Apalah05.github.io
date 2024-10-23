-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2024 pada 15.31
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelelangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Nanda Loeth', 'nanda', '$2y$10$wtEqyqJkjERsG9BgJqRDbep0oaMMuX0OO9CdSRY6bQ23Sc7wzw2MK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelelangan`
--

CREATE TABLE `pelelangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `harga_dipatok` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelelangan`
--

INSERT INTO `pelelangan` (`id`, `nama`, `harga_dipatok`, `foto`) VALUES
(13, 'Patung Antik', 'HIGH AUCTION', 'patung antik.jpg'),
(14, 'Meja Antik', 'LOW AUCTION', 'meja china antik.jpg'),
(15, 'Mesin Ketik Antiqqq', 'HIGH', 'mesin ketik antik.jpg'),
(16, 'Mobil Antik', 'HIGH AUCTION', 'mobil antik.jpg'),
(17, 'Seruling Antik', 'LOW AUCTION', 'suling antik.jpg'),
(18, 'Teko Antik', 'LOW AUCTION', 'teko antik.jpg'),
(19, 'Telepon Antik', 'MEDIUM AUCTION', 'telepon antik.jpg'),
(20, 'Teropong Antik', 'MEDIUM AUCTION', 'teropong antik.jpg'),
(21, 'Buku Sejarah Antik', 'LOW AUCTION', 'Buku Antik.jpg'),
(22, 'Vas Antik', 'HIGH AUCTION', 'vas antik.jpg'),
(23, 'TV kecil Antik', 'MEDIUM AUCTION', 'tv kecil antik.jpg'),
(24, 'Globe Antik', 'LOW AUCTION', 'benda antik berbentuk bumi.jpg'),
(25, 'test', 'MEDIUM', 'test.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `pelelangan`
--
ALTER TABLE `pelelangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelelangan`
--
ALTER TABLE `pelelangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
