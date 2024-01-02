-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 09.48
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_bus`
--

CREATE TABLE `kelas_bus` (
  `id_bus` varchar(7) NOT NULL,
  `kelas_penumpang` varchar(30) NOT NULL,
  `harga_bus` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas_bus`
--

INSERT INTO `kelas_bus` (`id_bus`, `kelas_penumpang`, `harga_bus`) VALUES
('BS-BI', 'Kelas Bisnis', '100.000'),
('BS-EK', 'Kelas Ekonomi', '50.000'),
('BS.EKS', 'Kelas Eksekutif', '150.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_identitas` varchar(16) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `kelas_penumpang` varchar(30) NOT NULL,
  `jadwal` date NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `jumlah_penumpang_lansia` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `no_identitas`, `nomor_hp`, `kelas_penumpang`, `jadwal`, `jumlah_penumpang`, `jumlah_penumpang_lansia`, `harga`, `total`) VALUES
(18, 'ANGGI RIKO SAPUTRA', '1638293663', '087870517792', 'Kelas Eksekutif', '2023-10-29', 1, 1, '150.000', 'Rp. 285.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas_bus`
--
ALTER TABLE `kelas_bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
