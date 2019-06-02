-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 02 Jun 2019 pada 11.32
-- Versi Server: 10.1.38-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lestarijaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tersedia` varchar(2) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `jenis`, `tersedia`, `harga`) VALUES
(1, 'Anvil 250 ml', '', '✘', 56000),
(2, 'Anvil 1 lt ', '', '✘', 200000),
(3, 'Apiro 100 ml', '', '✘', 138000),
(4, 'Apiro 250 ml', '', '✘', 324000),
(5, 'Applaud 100 ml', '', '✘', 13000),
(6, 'Applaud 500 ml', '', '✘', 57000),
(7, 'Applaud 100 gr ', '', '✘', 13000),
(8, 'Applaud 400 gr', '', '✘', 49000),
(9, 'Ares 100 ml', '', '✘', 27000),
(10, 'Ares 300 ml', '', '✘', 76000),
(11, 'Benlox 250 gr', '', '✘', 67000),
(12, 'Bensoid 100 gr ', '', '✘', 54000),
(13, 'BestFast 80 ml', '', '✘', 42000),
(14, 'BestFast 120 ml', '', '✘', 120000),
(15, 'Bestfast 500 ml', '', '✘', 227000),
(16, 'Bestfox 500 ml', '', '✘', 67000),
(17, 'Biggest 10 cc', '', '✘', 20000),
(18, 'Big Grow 5 gr', '', '✘', 36000),
(19, 'Biocron 500 ml', '', '✘', 70000),
(20, 'Bion-M 500 gr', '', '✘', 162000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
