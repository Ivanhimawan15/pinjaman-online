-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2024 at 09:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pinjaman_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notelp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pencairan`
--

CREATE TABLE `tb_pencairan` (
  `id_verifikasi` int NOT NULL,
  `id_pengajuan` int NOT NULL,
  `tanggal_pencairan` date NOT NULL,
  `jumblah` int NOT NULL,
  `metode` enum('tranfer','cash') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan_pencairan`
--

CREATE TABLE `tb_pengajuan_pencairan` (
  `id_pengajuan` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `jumblah_pinjaman` int NOT NULL,
  `status` enum('berhasil','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_verifikasi_data`
--

CREATE TABLE `tb_verifikasi_data` (
  `id_verifikasi` int NOT NULL,
  `id_pengajuan` int NOT NULL,
  `data_verifikasi` varchar(20) NOT NULL,
  `status_verikasi` enum('berhasil','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pencairan`
--
ALTER TABLE `tb_pencairan`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `tb_pengajuan_pencairan`
--
ALTER TABLE `tb_pengajuan_pencairan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_verifikasi_data`
--
ALTER TABLE `tb_verifikasi_data`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
