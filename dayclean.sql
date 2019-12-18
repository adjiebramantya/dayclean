-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 03:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayclean`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `id_treatment` int(11) NOT NULL,
  `nama_treatment` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detail`, `invoice`, `id_treatment`, `nama_treatment`, `jumlah_sepatu`, `total`) VALUES
(8, 'TR181220190010', 2, 'Fast Clean', 4, 60000),
(9, 'TR181220190010', 2, 'Fast Clean', 4, 60000),
(10, 'TR181220190010', 2, 'Fast Clean', 4, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(10) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat_user` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `status` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `invoice`, `tanggal`, `nama_user`, `no_hp`, `alamat_user`, `jumlah_sepatu`, `status`, `total`) VALUES
(13, 'TR181220190001', '2019-12-18', 'erwr', 231, 'err', 0, 'Belum', 0),
(14, 'TR181220190014', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(15, 'TR181220190015', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(16, 'TR181220190016', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(17, 'TR181220190017', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(18, 'TR181220190018', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(19, 'TR181220190019', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(20, 'TR181220190020', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(21, 'TR181220190021', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(22, 'TR181220190022', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(23, 'TR181220190023', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(24, 'TR181220190024', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(25, 'TR181220190025', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(26, 'TR181220190026', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(27, 'TR181220190027', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(28, 'TR181220190028', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(29, 'TR181220190029', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(30, 'TR181220190030', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(3) NOT NULL,
  `nama_treatment` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `nama_treatment`, `deskripsi`, `harga`) VALUES
(1, 'Deep Clean', 'Pembersihan hingga ke insole sepatu', 25000),
(2, 'Fast Clean', 'Adalah treatment pembersihan secara cepat dan bersih hanya pada bagian MIDSOLE dan UPPER sepatu. Waktu pengerjaan maksimal 1-2 hari', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
