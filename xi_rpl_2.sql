-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2019 pada 06.11
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xi_rpl_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banjar1`
--

CREATE TABLE `banjar1` (
  `no` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banjar1`
--

INSERT INTO `banjar1` (`no`, `nama`) VALUES
(1, 'niken'),
(2, 'pinkan'),
(3, 'via rahmawati'),
(4, 'muhamad asyiri'),
(6, 'santi'),
(0, 'RIO GOTAMA'),
(0, 'vai valen'),
(0, 'via'),
(0, 'ikhwanuk'),
(0, 'RANA KUSUMA AJI PUTRA'),
(0, 'MUHAMMAD FATURROHMAN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
