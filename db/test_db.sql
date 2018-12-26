-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2018 pada 07.29
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_test`
--

CREATE TABLE `tb_test` (
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `note` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_test`
--

INSERT INTO `tb_test` (`username`, `email`, `image`, `note`) VALUES
('abyan', 'abyan@gmail.com', 'http://localhost/test/uploads/test-avatar/image_1545805187.jpg', 1),
('abydarts', 'abyan@gmail.com', 'http://localhost/test/uploads/test-avatar/image_1545805345.jpg', 0),
('abyzed', 'abyanahmad@hotmail.com', 'http://localhost/test/uploads/test-avatar/image_1545805493.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
