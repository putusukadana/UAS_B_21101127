-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2022 pada 13.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `KodeDosen` int(11) NOT NULL,
  `NamaDosen` varchar(100) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`KodeDosen`, `NamaDosen`, `JK`, `Jurusan`) VALUES
(4124412, 'wawan', 'L', 'SK'),
(55585655, 'ajeng', 'P', 'MTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JURUSAN` varchar(50) NOT NULL,
  `JK` varchar(100) NOT NULL,
  `TGLLAHIR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`NIM`, `NAMA`, `JURUSAN`, `JK`, `TGLLAHIR`) VALUES
(3213123, 'fandi', 'SK', 'L', '2022-06-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk`
--

CREATE TABLE `mk` (
  `KODE_MK` int(10) NOT NULL,
  `MATAKULIAH` varchar(100) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk`
--

INSERT INTO `mk` (`KODE_MK`, `MATAKULIAH`, `SEMESTER`) VALUES
(31232, 'pti', 'S1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`KODE_MK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
