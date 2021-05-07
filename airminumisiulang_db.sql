-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 06:53 PM
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
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarakun`
--

INSERT INTO `daftarakun` (`akun_id`, `username`, `password`, `namadepan`, `namabelakang`, `tglh`, `email`, `nohp`, `alamat`) VALUES
(1, 'frezneel', '515abf88e6edb3a255e554034c3936a1', 'Galih', 'M Ichsan', '2021-04-07', 'nyomangalih12@gmail.com', 2147483647, 'Jl. K H Agus Salim'),
(2, 'RirinGan', '8ec1faa8e5c143bb66e524d568c6cc27', 'Ririn', 'Werty', '2021-04-27', 'RirinWerty@gmail.com', 4646048, 'Jl. Soekarno'),
(4, 'KukuhBruh', '9af5e632716b53086d2265d92e59019f', 'kukuh', 'Raharjo', '2021-04-14', 'kukuh@gmail.com', 0, 'lkafhlawfhaw');

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
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `username`, `namadepan`, `namabelakang`, `tgps`, `id_tagihan`, `nohp`, `alamat`, `catatan`) VALUES
(10, 'frezneel', 'Galih', 'M Ichsan', '2021-05-05', 0, 2147483647, 'Jl K.H Agus Salim', NULL),
(11, 'frezneel', 'Galih', 'M Ichsan', '2021-05-05', 0, 2147483647, 'Jl K.H Agus Salim', NULL),
(12, 'frezneel', 'a', 'b', '2021-05-05', 0, 2147483647, 'Jl. K H Agus Salim', NULL),
(13, 'frezneel', 'Test', 'ke-2', '2021-05-07', 0, 2147483647, 'J.L K.H Agus Salim', NULL),
(14, 'frezneel', 'Test', 'ke-2', '2021-05-07', 0, 2147483647, 'J.L K.H Agus Salim', NULL),
(15, 'frezneel', 'Test', 'ke-2', '2021-05-07', 0, 2147483647, 'J.L K.H Agus Salim', NULL),
(16, 'frezneel', 'test', 'ke-3', '2021-05-07', 1, 2147483647, 'Jl K.H Agus Salim', NULL),
(17, 'frezneel', 'test', 'ke-3', '2021-05-07', 2, 2147483647, 'Jl K.H Agus Salim', NULL),
(18, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL),
(19, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL),
(20, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL),
(21, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL),
(22, 'frezneel', 'test 4', 'lagi', '2021-05-07', 3, 556464, 'J.L Kaliagung', NULL);

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
  ADD KEY `fk_id_tagihan` (`id_tagihan`) USING BTREE;

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
  MODIFY `akun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
