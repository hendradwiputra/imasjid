-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 02:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(2) NOT NULL,
  `nama_masjid` varchar(100) NOT NULL,
  `alamat_masjid` varchar(100) NOT NULL,
  `running_teks` varchar(255) NOT NULL,
  `kecepatan_teks` int(2) NOT NULL,
  `durasi_slide` varchar(5) NOT NULL,
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

INSERT INTO `settings` (`setting_id`, `nama_masjid`, `alamat_masjid`, `running_teks`, `kecepatan_teks`, `durasi_slide`, `koreksi_hijriah`, `metode_perhitungan`, `durasi_adzan`, `iqomah_shubuh`, `iqomah_dzuhur`, `iqomah_ashar`, `iqomah_maghrib`, `iqomah_isya`, `garis_lintang`, `garis_bujur`, `zona_waktu`) VALUES
(1, 'Masjid Raya Nurul Mubarok', 'Kompleks PT. RAPP Townsite II Baru', 'Jamaah diharapkan agar menggunakan masker ketika solat di masjid # Tetap menjaga protokol kesehatan # Untuk sementara anak-anak SMP  kebawah  agar tidak dibawa ke masjid # Cuci tangan sebelum masuk ke Masjid', 9, '18000', -1, 6, 5, 10, 5, 5, 5, 10, '0.406393', '101.845164', '+7');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi1` varchar(255) NOT NULL,
  `isi2` varchar(255) NOT NULL,
  `isi3` varchar(255) NOT NULL,
  `isi4` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slide_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `judul`, `isi1`, `isi2`, `isi3`, `isi4`, `foto`, `slide_status`) VALUES
(1, 'Info Qurban 1442 H', 'Pendaftaran bisa menghubungi panitia qurban', '', '', '', '20200930_062655_.jpg', 1),
(2, 'Laporan Keuangan Masjid', 'Infaq Jumat yang lalu', 'Dana Masuk\n\n', 'Dana Keluar', 'Sisa Saldo sampai saat ini', '20200930_062732_.jpg', 1),
(3, '', '', '', '', '', '20200930_062832_.jpg', 1),
(4, '', '', '', '', '', '20200930_063137_.jpg', 1),
(5, '', '', '', '', '', '20200930_063348_.jpg', 1),
(6, '', '', '', '', '', '20200930_063542_.jpg', 1),
(7, 'Membaca Surat Al Kahfi', 'â€œBarangsiapa yang membaca surat Al Kahfi pada hari Jumâ€™at, dia akan disinari cahaya di antara dua Jumâ€™at.â€', '(HR. An Nasaâ€™i dan Baihaqi)', '', '', 'quran-01.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
