-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2024 pada 14.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` char(10) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `prodi`, `email`, `gambar`) VALUES
(1, 'Juniartha Indra Pratama', '1810651045', 'Keperawatan', 'juniarthapratama1997@gmail.com', '65b1bb1b2e2ec.jpg'),
(2, 'Ahmad Zainal Arifin', '1710651045', 'Teknik Mesin', 'ahmad@gmail.com', 'hayabusa.jpg'),
(3, 'Jalauddin Nury', '1910651045', 'Teknik Sipil', 'didin@gmail.com', 'martis.jpg'),
(4, 'Rizmawan Iqbal', '1810651099', 'Teknik Lingkungan', 'iqbal@gmail.com', '1.jpg'),
(5, 'Asep Sulaiman', '2010651044', 'Pendidikan Bahasa Inggris', 'asep@gmail.com', '2.jpg'),
(6, 'Rania Virda', '2210651045', 'Pendidikan Bahasa Indonesia', 'rania@gmail.com', '3.jpg'),
(7, 'Endah Dwi Utari', '1910651011', 'Pendidikan Bahasa Jerman', 'endah@gmail.com', '5.jpg'),
(8, 'Aditya Farizki Wijaya', '2010431010', 'Pendidikan Bahasa Jepang', 'adit@gmail.com', '4.jpg'),
(9, 'Indah Wulandari', '2310551010', 'Ilmu Komunikasi', 'indah@gmail.com', '6.jpg'),
(10, 'Febrian Indro Dwi Cahyo', '2205105310', 'Administrasi Negara', 'rian@gmail.com', '7.jpg'),
(14, 'Arif Wibowo Simanjuntak', '2010101045', 'Keperawatan', 'arifw@gmail.com', '9.jpg'),
(16, 'Anisa Indah', '1610551109', 'Sistem Informasi', 'anisa@gmail.com', '6.jpg'),
(20, 'Kitten Kitten', '1511651067', 'Pendidikan Bahasa Indonesia', 'kittendust@gmail.com', '5.jpg'),
(21, 'Minyaktelon', '2005106589', 'Teknik Industri', 'minyaktelon@gmail.com', '9.jpg'),
(23, 'Afrian Piesca Firmanda', '1810651017', 'Teknik Informatika', 'afrian@gmail.com', '8.jpg'),
(29, 'Anggi Septiarini', '1410651010', 'Kedokteran', 'anggi@gmail.com', '3.jpg'),
(30, 'Zainal Abidin', '1515106410', 'Teknik Nuklir', 'zainal@gmail.com', '65b1b717c3491.jpg'),
(31, 'coba session', '123', 'bug oi bug', 'wkwk@gmail.com', '65bc5e1337a6d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'juniartha', '$2y$10$MQmGd51cnaAEcxoVdNW99ePR4Tr.LdSvjVICGOAmpTriJd9RU.7FC'),
(3, 'arifin', '$2y$10$qpL8HjvC2qq9iCNbitLZsOQ3shSSnZleSgsWHdmOiOFsv/PYnE/jS'),
(4, 'indra', '$2y$10$KBMRYvdjV.FekY.hqMQdg.JYoGq7yw13muo.v.7J7ASp/5l6DuCpu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
