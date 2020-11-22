-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `slide_aktif` int(11) NOT NULL,
  `koreksi_hijriah` int(2) NOT NULL,
  `metode_perhitungan` int(1) NOT NULL,
  `durasi_adzan` int(2) NOT NULL,
  `iqomah_shubuh` int(2) NOT NULL,
  `iqomah_dzuhur` int(2) NOT NULL,
  `iqomah_ashar` int(2) NOT NULL,
  `iqomah_maghrib` int(2) NOT NULL,
  `iqomah_isya` int(2) NOT NULL,
  `durasi_shubuh` int(2) NOT NULL,
  `durasi_syuruq` int(2) NOT NULL,
  `durasi_dzuhur` int(2) NOT NULL,
  `durasi_ashar` int(2) NOT NULL,
  `durasi_maghrib` int(2) NOT NULL,
  `durasi_isya` int(2) NOT NULL,
  `prayer1` varchar(10) NOT NULL,
  `prayer2` varchar(10) NOT NULL,
  `prayer3` varchar(10) NOT NULL,
  `prayer4` varchar(10) NOT NULL,
  `prayer5` varchar(10) NOT NULL,
  `prayer6` varchar(10) NOT NULL,
  `garis_lintang` varchar(10) NOT NULL,
  `garis_bujur` varchar(10) NOT NULL,
  `zona_waktu` varchar(2) NOT NULL,
  `kunci_layar` int(2) NOT NULL,
  `teks_sebelum_adzan` varchar(255) NOT NULL,
  `teks_adzan` varchar(255) NOT NULL,
  `teks_iqomah` varchar(255) NOT NULL,
  `teks_sebelum_sholat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `nama_masjid`, `alamat_masjid`, `running_teks`, `kecepatan_teks`, `durasi_slide`, `slide_aktif`, `koreksi_hijriah`, `metode_perhitungan`, `durasi_adzan`, `iqomah_shubuh`, `iqomah_dzuhur`, `iqomah_ashar`, `iqomah_maghrib`, `iqomah_isya`, `durasi_shubuh`, `durasi_syuruq`, `durasi_dzuhur`, `durasi_ashar`, `durasi_maghrib`, `durasi_isya`, `prayer1`, `prayer2`, `prayer3`, `prayer4`, `prayer5`, `prayer6`, `garis_lintang`, `garis_bujur`, `zona_waktu`, `kunci_layar`, `teks_sebelum_adzan`, `teks_adzan`, `teks_iqomah`, `teks_sebelum_sholat`) VALUES
(1, 'Masjid Raya Nurul Mubarok', 'Kompleks PT. RAPP Townsite II Baru', 'Jamaah agar selalu menggunakan masker ketika sholat di Masjid # Anak-anak jangan ribut # HP mohon dinonaktifkan # Patuhi protokol kesehatan', 7, '6000', 2, -1, 8, 5, 10, 5, 5, 5, 5, 30, 15, 45, 45, 30, 60, 'shubuh', 'syuruq', 'dzuhur', 'ashar', 'maghrib', 'isya', '0.406393', '101.845164', '+7', 5, '“Barangsiapa duduk di masjid dalam rangka menunggu sholat, maka dia terhitung dalam keadaan sholat.” <br>(HR. an-Nasa’i dan Ahmad)', '“Ucapkanlah sebagaimana disebutkan oleh muadzin. Lalu jika sudah selesai kumandang adzan, berdoalah, maka akan diijabahi (dikabulkan).” <br>(HR. Abu Daud no. 524)', '“Sesungguhnya doa yang tidak tertolak adalah doa (yang dipanjatkan) di antara adzan dan iqomah, maka berdoalah (di waktu itu).” <br>(HR. Ahmad no. 12584)', 'Mohon untuk menonaktifkan handphone selama sholat berjamaah di masjid');

-- --------------------------------------------------------

--
-- Table structure for table `slides1`
--

CREATE TABLE `slides1` (
  `slide_id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi1` varchar(255) NOT NULL,
  `isi2` varchar(255) NOT NULL,
  `isi3` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slide_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides1`
--

INSERT INTO `slides1` (`slide_id`, `judul`, `isi1`, `isi2`, `isi3`, `foto`, `slide_status`) VALUES
(2, 'Info Haji Tahun 2021 PT. Riau Andalan Pulp And Paper', 'Jamaah sudah bisa mendaftarkan haji sama panitia BKM yang telah terbentuk di masjid kita ini. Semoga banyak yang daftar', '', '', 'arafah-01.jpg', 1),
(3, 'Info Qurban 1442 H', '', '', '', 'madina-02.jpg', 0),
(12, '', '', '', '', '20200930_062655_.jpg', 0),
(15, '', '', '', '', 'kaaba-02.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides2`
--

CREATE TABLE `slides2` (
  `slide2_id` int(3) NOT NULL,
  `slide2_judul` varchar(100) NOT NULL,
  `slide2_isi1` varchar(255) NOT NULL,
  `slide2_isi2` varchar(255) NOT NULL,
  `slide2_isi3` varchar(255) NOT NULL,
  `slide2_foto` varchar(50) NOT NULL,
  `slide2_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides2`
--

INSERT INTO `slides2` (`slide2_id`, `slide2_judul`, `slide2_isi1`, `slide2_isi2`, `slide2_isi3`, `slide2_foto`, `slide2_status`) VALUES
(1, 'Amal Itu Tergantung Niat', '\"Amal itu tergantung niatnya, dan seseorang mendapatkan (balasan) sesuai niatnya.\"', '(HR. Bukhari No.1 & Muslim No.3530)', '', '', 1),
(2, 'Di Balik Musibah', '\"Barangsiapa yang dikehendaki kebaikan oleh Allah, maka Allah akan mengujinya dengan musibah.\"', '(HR. Bukhari No.5645)', '', '', 1),
(3, 'Istiqomah Ya', '\"Amalan yang paling dicintai Allah adalah amalan yang rutin dilakukan meskipun sedikit.\"', '(HR. Bukhari No.6464 & Muslim No.783)', '', '', 1),
(4, 'Jangan Mencela Seorang Muslim', '\"Mencela seorang muslim adalah kefasikan sedang membunuhnya adalah kekafiran.\"', '(HR. Ahmad | Shahih Al Jaami\' No.3595)', '', '', 1),
(5, 'Memutus Silaturahmi', '\"Tidak akan masuk surga orang yang memutuskan tali silaturahmi.\"', '(HR. Bukhari No.5984 & Muslim No.2556)', '', '', 1),
(6, 'Belajar Al-Quran', '\"Sebaik-baik kalian adalah yang mempelajari Al-Quran dan mengajarkannya.\"', '(HR. Bukhari No.5027)', '', '', 1),
(7, 'Allah Itu Maha Indah', '\"Sesungguhnya Allah itu maha indah dan menyukai keindahan.\"', '(HR. Muslim No.91)', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `slides1`
--
ALTER TABLE `slides1`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `slides2`
--
ALTER TABLE `slides2`
  ADD PRIMARY KEY (`slide2_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides1`
--
ALTER TABLE `slides1`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slides2`
--
ALTER TABLE `slides2`
  MODIFY `slide2_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
