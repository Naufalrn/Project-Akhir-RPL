-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 08:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`) VALUES
(1, 'Beras', 20000),
(2, 'Gula', 10000),
(3, 'Minyak Goreng', 15000),
(4, 'Telur', 2500),
(5, 'Daging Sapi', 50000),
(6, 'Ayam Potong', 30000),
(7, 'Ikan Segar', 25000),
(8, 'Susu', 8000),
(9, 'Roti', 5000),
(10, 'Kopi', 12000),
(11, 'Teh', 10000),
(12, 'Garam', 3000),
(13, 'Mie Instan', 1500),
(14, 'Sarden Kalengan', 4000),
(15, 'Keju', 10000),
(16, 'Coklat', 3500),
(17, 'Biskuit', 2000),
(18, 'Permen', 1000),
(19, 'Shampoo', 7000),
(20, 'Sabun Mandi', 5000),
(21, 'Pasta Gigi', 3500),
(22, 'Sikat Gigi', 2000),
(23, 'Tisu', 1500),
(24, 'Sabun Cuci Piring', 6000),
(25, 'Deterjen', 8000),
(26, 'Pembersih Lantai', 7500),
(27, 'Sapu', 5000),
(28, 'Sikat Toilet', 3000),
(29, 'Pisau Dapur', 9000),
(30, 'Garpu', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `toko` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `cabang` varchar(20) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `owner`, `toko`, `alamat`, `cabang`, `foto`) VALUES
(1, 'noris', 'sss', 'sss', 'hf', '1894677613_IF.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
