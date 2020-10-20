-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 02:28 AM
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
('WYX4455', 40000, 'PROTON SAGA', 2018, 'car61598.jpg', 'ADA'),
('WYX4456', 40000, 'baba', 2018, 'SONATA-hero-option1-', 'ADA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kenderaan`
--
ALTER TABLE `kenderaan`
  ADD PRIMARY KEY (`nomplat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
