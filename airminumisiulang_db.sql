-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 10:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airminumisiulang_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarakun`
--

CREATE TABLE `daftarakun` (
  `akun_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `tglh` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `id_posisi` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarakun`
--

INSERT INTO `daftarakun` (`akun_id`, `username`, `password`, `namadepan`, `namabelakang`, `tglh`, `email`, `nohp`, `alamat`, `id_posisi`) VALUES
(1, 'frezneel', '515abf88e6edb3a255e554034c3936a1', 'Galih', 'M Ichsan', '2021-04-07', 'nyomangalih12@gmail.com', 2147483647, 'Jl. K H Agus Salim', 1),
(2, 'RirinGan', '8ec1faa8e5c143bb66e524d568c6cc27', 'Ririn', 'Werty', '2021-04-27', 'RirinWerty@gmail.com', 4646048, 'Jl. Soekarno', 2),
(4, 'KukuhBruh', '9af5e632716b53086d2265d92e59019f', 'kukuh', 'Raharjo', '2021-04-14', 'kukuh@gmail.com', 0, 'lkafhlawfhaw', 2),
(5, 'saya', '515abf88e6edb3a255e554034c3936a1', 'siapa', 'nama', '2021-05-12', 'saiapasaya@gmail.com', 533573, 'kahlawkfawlkfaw', 2),
(6, 'test1', '2903d26dd0714fd507870d3c282f9815', 'huahua', 'ahuahu', '2021-05-12', 'afwafawfaw@gmail.com', 6464654, 'awhdjawdhkjaw', 2),
(7, 'bayuaman', '25f9e794323b453885f5181f1b624d0b', 'bayu', 'aman', '2000-05-03', 'bayuaman12@gmail.com', 858585, 'Jl. Kertoaji', 2),
(8, 'Miranti', '1813204e1c74fb95829e652355155c9c', 'Miranti', 'Sukmaningrum', '2000-07-21', 'MirantiSukmaningrum@gmail.com', 2147483647, 'Jl. Anggrek No.20', 1),
(9, 'NurWijaya', '9d1298781c7d091b62327c9b01b0978a', 'Nur', 'Wijayaningsih', '2000-03-07', 'NurWijayaningsih@gmail.com', 2147483647, 'Jl. Kemangi No. 105', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `tgps` date NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `catatan` text DEFAULT NULL,
  `id_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `username`, `namadepan`, `namabelakang`, `tgps`, `id_tagihan`, `nohp`, `alamat`, `catatan`, `id_status`) VALUES
(18, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL, 1),
(23, 'bayuaman', 'Bayu', 'Aman', '2021-05-27', 2, 858585, 'Jl. Sarumbat', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(11) NOT NULL,
  `nama_posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama_posisi`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Pending'),
(2, 'Pesanan Diterima'),
(3, 'Pesanan Dikirim'),
(4, 'Pesanan Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `nama_tagihan` varchar(50) NOT NULL,
  `harga_tagihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `nama_tagihan`, `harga_tagihan`) VALUES
(1, 'Isi Ulang air minum Galon', 10000),
(2, 'Pencucian Dispenser', 25000),
(3, 'Service Dispenser', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarakun`
--
ALTER TABLE `daftarakun`
  ADD PRIMARY KEY (`akun_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_id_tagihan` (`id_tagihan`) USING BTREE,
  ADD KEY `fk_id_status` (`id_status`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarakun`
--
ALTER TABLE `daftarakun`
  MODIFY `akun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
