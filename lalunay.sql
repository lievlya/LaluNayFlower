-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2025 pada 11.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalunay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_stories`
--

CREATE TABLE `customer_stories` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `cerita` text DEFAULT NULL,
  `emosi` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer_stories`
--

INSERT INTO `customer_stories` (`id`, `nama`, `cerita`, `emosi`, `foto`) VALUES
(1, 'Kai', 'Makasihh Banyakk untuk bunganyaa, istri aku bener bener menyukainyaa bener bener cakepp poll', '💖💖💖💖💖💖💖💖💖💖', 'Hydrangea Pink.jpeg'),
(2, 'Customer Anonim', 'Bunganyaa bener bener Elegann, sangat berkesan mewahh', '🎓🎓🎓🎓🎓', '685fca1146656.jpg'),
(3, 'Customer Anonim', 'omg bagus bgt temen aq suka bagt terimakasi kak udah cimpaiin toko bunga secantik ini', '💕💕💕💕💕', '686f92a1805f3.jpg'),
(4, 'Customer Anonim', 'wahh bungga cantik sekali terimakasih ', '💕💕💕💕💕', '68709b6448b3d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer_stories`
--
ALTER TABLE `customer_stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer_stories`
--
ALTER TABLE `customer_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
