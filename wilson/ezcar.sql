-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 03:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `nama` varchar(20) NOT NULL,
  `noRumah` int(10) DEFAULT NULL,
  `alamat1` varchar(20) NOT NULL,
  `alamat2` varchar(20) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `negeri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jualan`
--

CREATE TABLE `jualan` (
  `idJualan` int(11) NOT NULL,
  `tarikhJualan` date NOT NULL,
  `jenisBayaran` varchar(20) NOT NULL,
  `nomplat` varchar(10) NOT NULL,
  `icpelanggan` varchar(12) DEFAULT NULL,
  `idPekerja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kenderaan`
--

CREATE TABLE `kenderaan` (
  `nomplat` varchar(7) NOT NULL,
  `harga` int(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `tahun_perbuat` int(4) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kenderaan`
--

INSERT INTO `kenderaan` (`nomplat`, `harga`, `model`, `tahun_perbuat`, `gambar`, `status`) VALUES
('PMG9991', 385000, 'Lexus RX300', 2020, 'rx30022765.jpeg', 'ADA'),
('WYX4455', 40000, 'PROTON SAGA', 2018, 'car61598.jpg', 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `icpelanggan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomhp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPekerja` varchar(20) NOT NULL,
  `namaPekerja` varchar(20) NOT NULL,
  `kataLaluan` int(10) NOT NULL,
  `noTelefonPekerja` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPekerja`, `namaPekerja`, `kataLaluan`, `noTelefonPekerja`, `status`) VALUES
('654891548946', 'Kang Zheng Yu', 1234, 166722812, 'YES'),
('760503987356', 'TEH LI XIN', 5678, 0, 'PEKERJA'),
('870640391645', 'Stanley Koay', 321, 128165165, 'YES'),
('wilson', 'wilson', 123, 1111111, 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `jualan`
--
ALTER TABLE `jualan`
  ADD PRIMARY KEY (`idJualan`);

--
-- Indexes for table `kenderaan`
--
ALTER TABLE `kenderaan`
  ADD PRIMARY KEY (`nomplat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`icpelanggan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPekerja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jualan`
--
ALTER TABLE `jualan`
  MODIFY `idJualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
