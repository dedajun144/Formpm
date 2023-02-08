-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 02.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formpm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwh`
--

CREATE TABLE `kwh` (
  `id` int(11) NOT NULL,
  `namepop` varchar(250) NOT NULL,
  `dayalistrik` int(11) NOT NULL,
  `cos` varchar(11) NOT NULL,
  `arester` varchar(10) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `phasa` varchar(11) NOT NULL,
  `tipecos` varchar(11) NOT NULL,
  `tipearester` varchar(11) NOT NULL,
  `rn` double NOT NULL,
  `tn` double NOT NULL,
  `rt` double NOT NULL,
  `ng` double NOT NULL,
  `sn` double NOT NULL,
  `rs` double NOT NULL,
  `st` double NOT NULL,
  `r` double NOT NULL,
  `s` double NOT NULL,
  `t` double NOT NULL,
  `rmcb` int(11) NOT NULL,
  `smcb` int(11) NOT NULL,
  `tmcb` int(11) NOT NULL,
  `rwarna` varchar(25) NOT NULL,
  `nwarna` varchar(25) NOT NULL,
  `swarna` varchar(25) NOT NULL,
  `gwarna` varchar(25) NOT NULL,
  `twarna` varchar(25) NOT NULL,
  `rmm` int(11) NOT NULL,
  `nmm` int(11) NOT NULL,
  `smm` int(11) NOT NULL,
  `gmm` int(11) NOT NULL,
  `tmm` int(11) NOT NULL,
  `temuan` varchar(255) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kwh`
--

INSERT INTO `kwh` (`id`, `namepop`, `dayalistrik`, `cos`, `arester`, `idpelanggan`, `phasa`, `tipecos`, `tipearester`, `rn`, `tn`, `rt`, `ng`, `sn`, `rs`, `st`, `r`, `s`, `t`, `rmcb`, `smcb`, `tmcb`, `rwarna`, `nwarna`, `swarna`, `gwarna`, `twarna`, `rmm`, `nmm`, `smm`, `gmm`, `tmm`, `temuan`, `rekomendasi`) VALUES
(1, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 2, 3, 2, 4, 2, 1, 4, 3, 2, 2, 3, 2, 2, '', '', '', '', '', 0, 0, 0, 0, 0, '', ''),
(2, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 7, 8, 9, 7, 6, 8, 9, 7, 8, 6, 7, 9, 8, 'Merah', 'Biru', 'Kuning', 'Kuning hijau', 'Hitam', 6, 6, 6, 6, 6, 'sudah ', 'jleas'),
(3, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 7, 8, 9, 7, 6, 8, 9, 7, 8, 6, 7, 9, 8, 'Merah', 'Biru', 'Kuning', 'Kuning hijau', 'Hitam', 6, 6, 6, 6, 6, 'sudah ', 'jleas'),
(4, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 7, 8, 9, 7, 6, 8, 9, 7, 8, 6, 7, 9, 8, 'Merah', 'Biru', 'Kuning', 'Kuning hijau', 'Hitam', 6, 6, 6, 6, 6, 'sudah ', 'jleas'),
(5, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 6, 8, 9, 6, 8, 7, 8, 8, 9, 0, 8, 9, 7, 'Merah', 'Biru', 'Kuning', 'Kuning hijau', 'Hitam', 6, 6, 6, 6, 6, 'sudah jelas dimtemkuan', 'dapat ditemukan'),
(6, 'POP_1KYB159 Icon+ MAMPANG SHELTER PLN', 33000, 'ADA', 'ADA', 2147483647, '3-Phase', 'Manual', 'OBO', 6, 8, 9, 6, 8, 7, 8, 8, 9, 0, 8, 9, 7, 'Merah', 'Biru', 'Kuning', 'Kuning hijau', 'Hitam', 6, 6, 6, 6, 6, 'sudah jelas dimtemkuan', 'dapat ditemukan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kwh`
--
ALTER TABLE `kwh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kwh`
--
ALTER TABLE `kwh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
