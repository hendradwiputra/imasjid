-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 05:13 PM
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
-- Table structure for table `hadist`
--

CREATE TABLE `hadist` (
  `hadist_id` int(3) NOT NULL,
  `hadist_judul` varchar(100) NOT NULL,
  `hadist_isi1` varchar(255) NOT NULL,
  `hadist_isi2` varchar(255) NOT NULL,
  `hadist_isi3` varchar(255) NOT NULL,
  `hadist_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hadist`
--

INSERT INTO `hadist` (`hadist_id`, `hadist_judul`, `hadist_isi1`, `hadist_isi2`, `hadist_isi3`, `hadist_status`) VALUES
(1, 'Amal Itu Tergantung Niat', '\"Amal itu tergantung niatnya, dan seseorang mendapatkan (balasan) sesuai niatnya.\"', '(HR. Bukhari No.1 & Muslim No.3530)', '', 1),
(2, 'Di Balik Musibah', '\"Barangsiapa yang dikehendaki kebaikan oleh Allah, maka Allah akan mengujinya dengan musibah.\"', '(HR. Bukhari No.5645)', '', 1),
(3, 'Istiqomah Ya', '\"Amalan yang paling dicintai Allah adalah amalan yang rutin dilakukan meskipun sedikit.\"', '(HR. Bukhari No.6464 & Muslim No.783)', '', 0),
(4, 'Jangan Mencela Seorang Muslim', '\"Mencela seorang muslim adalah kefasikan sedang membunuhnya adalah kekafiran.\"', '(HR. Ahmad | Shahih Al Jaami\' No.3595)', '', 0),
(5, 'Memutus Silaturahmi', '\"Tidak akan masuk surga orang yang memutuskan tali silaturahmi.\"', '(HR. Bukhari No.5984 & Muslim No.2556)', '', 0),
(6, 'Belajar Al-Quran', '\"Sebaik-baik kalian adalah yang mempelajari Al-Quran dan mengajarkannya.\"', '(HR. Bukhari No.5027)', '', 0),
(7, 'Allah Itu Maha Indah', '\"Sesungguhnya Allah itu maha indah dan menyukai keindahan.\"', '(HR. Muslim No.91)', '', 0);

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
(1, 'Masjid Raya Nurul Mubarok', 'Kompleks PT. RAPP Townsite II Baru', 'Jamaah agar selalu menggunakan masker ketika solat di Masjid # Anak-anak jangan ribut # HP mohon dinonaktifkan # Patuhi protokol kesehatan', 9, '6000', -1, 6, 5, 10, 5, 5, 5, 10, '0.406393', '101.845164', '+7');

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
(1, 'Info Qurban 1442 H', 'Pendaftaran Qurban telah dibuka. Silahkan hubungi panitia Qurban yang telah terbentuk', '', '', '', '20200930_062732_.jpg', 1),
(2, '', '', '', '', '', '20200930_062832_.jpg', 0),
(3, '', '', '', '', '', '20200930_063137_.jpg', 1),
(4, '', '', '', '', '', '20200930_063348_.jpg', 0),
(5, '', '', '', '', '', '20200930_063542_.jpg', 0),
(6, '', '', '', '', '', 'background.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hadist`
--
ALTER TABLE `hadist`
  ADD PRIMARY KEY (`hadist_id`);

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
-- AUTO_INCREMENT for table `hadist`
--
ALTER TABLE `hadist`
  MODIFY `hadist_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
