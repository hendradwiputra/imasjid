-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 07:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(2) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `no` int(11) NOT NULL,
  `nama_masjid` varchar(100) NOT NULL,
  `alamat_masjid` varchar(100) NOT NULL,
  `running_teks` varchar(255) NOT NULL,
  `kecepatan_teks` int(2) NOT NULL,
  `koreksi_hijriah` int(2) NOT NULL,
  `metode_perhitungan` int(1) NOT NULL,
  `durasi_adzan` int(2) NOT NULL,
  `iqomah_shubuh` int(2) NOT NULL,
  `iqomah_dzuhur` int(2) NOT NULL,
  `iqomah_ashar` int(2) NOT NULL,
  `iqomah_maghrib` int(2) NOT NULL,
  `iqomah_isya` int(2) NOT NULL,
  `garis_lintang` varchar(10) NOT NULL,
  `garis_bujur` varchar(10) NOT NULL,
  `zona_waktu` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`no`, `nama_masjid`, `alamat_masjid`, `running_teks`, `kecepatan_teks`, `koreksi_hijriah`, `metode_perhitungan`, `durasi_adzan`, `iqomah_shubuh`, `iqomah_dzuhur`, `iqomah_ashar`, `iqomah_maghrib`, `iqomah_isya`, `garis_lintang`, `garis_bujur`, `zona_waktu`) VALUES
(1, 'Masjid Raya Nurul Mubarok', 'Kompleks PT. RAPP Townsite 2 Baru', 'Jamaah agar selalu menggunakan masker ketika solat di Masjid # Anak-anak jangan ribut # Hp mohon dinonaktifkan # Patuhi protokol kesehatan #', 7, -1, 5, 5, 10, 5, 5, 5, 10, '0.406393', '101.845164', '+7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
