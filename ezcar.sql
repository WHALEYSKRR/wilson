-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1
CREATE DATABASE ezcar ;
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
  `noplat` varchar(10) NOT NULL,
  `idPelanggan` varchar(12) DEFAULT NULL,
  `idPekerja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `noPlat` varchar(6) NOT NULL,
  `harga` int(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `tahunDibuat` int(4) NOT NULL,
  `modelKereta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` varchar(12) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL,
  `noTelefonPekerja` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPekerja` varchar(20) NOT NULL,
  `namaPekerja` varchar(20) NOT NULL,
  `kataLaluan` int(10) NOT NULL,
  `noTelefonPekerja` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`noPlat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

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
  MODIFY `idJualan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
