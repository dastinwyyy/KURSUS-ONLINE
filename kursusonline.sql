-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2024 pada 06.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursusonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(9, 'Belajar Apapun Cuma di #MY HOME', 'Ayo Semangat Belajar', '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;open sans&amp;quot;, sans-serif; font-size: medium;&quot;&gt;Selamat datang di website kami&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2024-07-19 00:41:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
