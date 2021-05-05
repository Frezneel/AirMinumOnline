-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 04:52 PM
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
  `jml_galon` int(3) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `username`, `namadepan`, `namabelakang`, `tgps`, `jml_galon`, `nohp`, `alamat`, `catatan`) VALUES
(10, 'frezneel', 'Galih', 'M Ichsan', '2021-05-05', 2, 2147483647, 'Jl K.H Agus Salim', NULL),
(11, 'frezneel', 'Galih', 'M Ichsan', '2021-05-05', 2, 2147483647, 'Jl K.H Agus Salim', NULL),
(12, 'frezneel', 'a', 'b', '2021-05-05', 2, 2147483647, 'Jl. K H Agus Salim', NULL);

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
  ADD KEY `fk_daftarakun_pesanan` (`username`);

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
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
