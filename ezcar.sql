-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 05:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
  `namaPelanggan` varchar(20) NOT NULL,
  `alamat1` varchar(20) NOT NULL,
  `alamat2` varchar(20) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `negeri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`namaPelanggan`, `alamat1`, `alamat2`, `bandar`, `poskod`, `negeri`) VALUES
('David Kang', 'Taman Pisang', 'Tanjung Pisang', 'Tanjung Pisang', '15584', 'Pulau Pinang'),
('Jack Xing', 'Taman KLCC', 'Bayan Lepas', 'Bayan Lepas', '11950', 'Pulau Pinang'),
('MinT Lim', 'Wangsa Maju', 'Georgetown', 'Georgetown', '11500', 'Pulau Pinang'),
('Teaa', 'Jands', 'Hans', 'Bayan Lepass', '11972', 'Penang');

-- --------------------------------------------------------

--
-- Table structure for table `jualan`
--

CREATE TABLE `jualan` (
  `idJualan` varchar(11) NOT NULL,
  `tarikhJualan` date NOT NULL,
  `jenisBayaran` varchar(20) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `icPelanggan` varchar(12) DEFAULT NULL,
  `namaPekerja` varchar(10) NOT NULL,
  `namaPelanggan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jualan`
--

INSERT INTO `jualan` (`idJualan`, `tarikhJualan`, `jenisBayaran`, `noplat`, `icPelanggan`, `namaPekerja`, `namaPelanggan`) VALUES
('G8180', '2020-10-31', 'TUNAI', 'NNN1111', '019123443', 'wilsonn', 'Teaa');

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
('NNN1111', 400009, 'Proton cz', 2020, '63585.', 'SOLD'),
('WYX4455', 40000, 'PROTON SAGA', 2018, '69171.', 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `icpelanggan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomhp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`icpelanggan`, `nama`, `nomhp`) VALUES
('881210075352', 'David Kang', '01187938458'),
('950507070517', 'Jack Xing', '01787938458'),
('980101070123', 'MinT Lim', '01255484848');

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
('654891548945', 'Kang Zheng Yuu', 123444, 166722811, 'YES'),
('870640391645', 'Stanley Koay', 321, 128165165, 'YES'),
('wilson', 'wilsonn', 123, 1111111, 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`namaPelanggan`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
