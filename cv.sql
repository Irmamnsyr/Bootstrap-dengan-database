-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 03:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `Nama` varchar(30) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `TTL` date NOT NULL,
  `Status` varchar(35) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `Prodi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`Nama`, `NIM`, `TTL`, `Status`, `Alamat`, `Prodi`) VALUES
('Irmawati Mansyur', '2004411222', '2001-03-10', 'Mahasiswa', 'Btn Hartaco blok 2f no.2,', 'S1 Infromatika'),
('Anisya fitra maharani', '2004411220', '2002-01-12', 'Mahasiswa', 'Bentang Raya, Palopo.', 'S1 Infromatika'),
('Husnani', '2004411235', '2003-01-07', 'Mahasiswa', 'Bentang Raya, Palopo.', 'S1 Infromatika');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `Nama` varchar(30) NOT NULL,
  `SD` varchar(40) NOT NULL,
  `SMP` varchar(45) NOT NULL,
  `SMA` varchar(50) NOT NULL,
  `S1` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`Nama`, `SD`, `SMP`, `SMA`, `S1`) VALUES
('Irmawati Mansyur', 'SDN 1 Tambarana', 'SMPN 2 Poso Pesisir Utara', 'SMKN 4 Palopo', 'Universitas Cokroaminoto Palopo'),
('Ade Grecia Deswita B.', 'Sdn 128 Padangngelle', 'Smpn 5 Satap Malangke', 'Sman 11 Luwu Utara', 'Universitas Cokroaminoto Palopo'),
('Husnani', 'Sdn  136 Takkalala', 'Mts Nurul Hikmah Tolada', 'Sman 11 Luwu Utara', 'Universitas Cokroaminoto Palopo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
