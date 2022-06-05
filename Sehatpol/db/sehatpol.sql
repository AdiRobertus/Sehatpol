-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 09.08
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehatpol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `Nama`, `username`, `password`) VALUES
(1, 'Admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `idA` int(10) NOT NULL,
  `idAdmin` int(10) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Tgl` date NOT NULL,
  `Penulis` varchar(50) NOT NULL,
  `Deskripsi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`idA`, `idAdmin`, `Judul`, `Gambar`, `Tgl`, `Penulis`, `Deskripsi`) VALUES
(1, 1, 'Tips Pola Makan Untuk Diet', 'diet.png', '2022-05-20', '', 'Diet kerap digunakan sebagai cara untuk mendapatkan berat badan ideal. Namun, pola makan untuk diet sehat bukan berarti harus dilakukan dengan melewatkan waktu makan. Nah, untuk mengetahui cara tepat menjalani diet sehat, simak penjelasannya dalam artikel.'),
(2, 1, 'Makanan yang Baik untuk Kesehatan', 'artikel2.jpg', '2022-05-21', 'Admin1', 'Makanan sehat adalah makanan yang seharusnya mengandung beragam nutrisi yang dibutuhkan oleh tubuh. Tubuh memerlukan berbagai macam nutrisi agar dapat tetap sehat dan pertumbuhan dapat berjalan dengan optimal.'),
(3, 1, 'Bayam, Sayuran Hijau yang Sangat Menyehatkan', 'artikel3.jpg', '2022-05-21', 'Admin1', 'Bayam merupakan sayuran berdaun hijau yang dianggap sangat sehat karena sarat akan nutrisi dan antioksidan. Mengonsumsi bayam dapat bermanfaat bagi kesehatan mata, menurunkan stres oksidatif, mengurangi tekanan darah, dan lain-lain.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `curahin`
--

CREATE TABLE `curahin` (
  `idC` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Telepon` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Keluhan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `curahin`
--

INSERT INTO `curahin` (`idC`, `Nama`, `Telepon`, `Email`, `Keluhan`) VALUES
(1, 'cxzc', 'xzcxzcv', 'cxzv', 'czxvzvcv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gizi`
--

CREATE TABLE `gizi` (
  `KodeG` int(10) NOT NULL,
  `KodeM` int(10) NOT NULL,
  `Mineral` varchar(50) NOT NULL,
  `Vitamin` varchar(50) NOT NULL,
  `Serat` varchar(50) NOT NULL,
  `Protein` varchar(50) NOT NULL,
  `Glukosa` varchar(50) NOT NULL,
  `Kalori` varchar(50) NOT NULL,
  `Manfaat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gizi`
--

INSERT INTO `gizi` (`KodeG`, `KodeM`, `Mineral`, `Vitamin`, `Serat`, `Protein`, `Glukosa`, `Kalori`, `Manfaat`) VALUES
(1, 1, '122 gram', 'Vitamin A, B1, B2, B3, B6, B9, C, dan E', '1,36 gram', '1,09 gram', '23,4 gram', '104 kalori', 'Buah anggur bermanfaat untuk menurunkan risiko kanker, meningkatkan gen pembasmi kuman, mengurangi risiko penyakit jantung, menurunkan tekanan darah, mencegah konstipasi, mengurangi gejala alergi, menjaga kesehatan mata, dan aman bagi penderita diabetes.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `KodeM` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`KodeM`, `Nama`, `Gambar`) VALUES
(1, 'Anggur', 'anggur.png'),
(2, 'Nanas', 'nanas.png'),
(3, 'Wortel', 'wortel.png'),
(4, 'Kangkung', 'kangkung.png'),
(5, 'Bayam', 'bayam.png'),
(6, 'Zaitun', 'zaitun.jpeg'),
(7, 'Cempedak', 'cempedak.jpg'),
(8, 'Delima', 'delima.jpg'),
(9, 'Enau', 'enau.jpg'),
(10, 'Frambos', 'frambos.jpg'),
(11, 'Gambas', 'gambas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan`
--

CREATE TABLE `masukan` (
  `idM` int(10) NOT NULL,
  `Email or Telephone` varchar(50) NOT NULL,
  `Masukan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `idR` int(10) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`idR`, `Judul`, `Link`) VALUES
(1, 'Pedoman Gizi Seimbang', '8WQHKD8-ooc'),
(2, 'MENU DIET SEMINGGU. SEHARI MAKAN NASI 2X. DEFICIT ', '_W6OOKn03Xs'),
(3, ' Membuat Menu Makanan Sehat dan Praktis untuk Beka', 'qivRkn96bd8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indeks untuk tabel `curahin`
--
ALTER TABLE `curahin`
  ADD PRIMARY KEY (`idC`);

--
-- Indeks untuk tabel `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`KodeG`),
  ADD KEY `KodeM` (`KodeM`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`KodeM`);

--
-- Indeks untuk tabel `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`idM`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`idR`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `idA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `curahin`
--
ALTER TABLE `curahin`
  MODIFY `idC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gizi`
--
ALTER TABLE `gizi`
  MODIFY `KodeG` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `KodeM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `masukan`
--
ALTER TABLE `masukan`
  MODIFY `idM` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `idR` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Ketidakleluasaan untuk tabel `gizi`
--
ALTER TABLE `gizi`
  ADD CONSTRAINT `gizi_ibfk_1` FOREIGN KEY (`KodeM`) REFERENCES `makanan` (`KodeM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
