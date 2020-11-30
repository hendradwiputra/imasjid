-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 01:23 AM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(3) NOT NULL,
  `foto_slide2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `foto_slide2`) VALUES
(1, 'bg1.jpg'),
(2, 'bg2.jpg'),
(3, 'bg3.jpg'),
(4, 'bg4.jpg'),
(5, 'bg5.jpg'),
(6, 'bg6.jpg'),
(7, 'bg7.jpg'),
(8, 'bg8.jpg'),
(9, 'bg9.jpg'),
(10, 'bg10.jpg'),
(11, 'bg11.jpg'),
(12, 'bg12.jpg'),
(13, 'bg13.jpg'),
(14, 'bg14.jpg'),
(15, 'bg15.jpg'),
(16, 'bg16.jpg'),
(17, 'bg17.jpg'),
(18, 'bg18.jpg'),
(19, 'bg19.jpg'),
(20, 'bg20.jpg'),
(21, 'bg21.jpg'),
(22, 'bg22.jpg'),
(23, 'bg23.jpg'),
(24, 'bg24.jpg'),
(25, 'bg25.jpg'),
(26, 'bg26.jpg'),
(27, 'bg27.jpg'),
(28, 'bg28.jpg'),
(29, 'bg29.jpg'),
(30, 'bg30.jpg'),
(31, 'bg31.jpg');

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
  `teks_sebelum_sholat` varchar(255) NOT NULL,
  `teks_khutbah` varchar(100) NOT NULL,
  `teks_khutbah1` varchar(255) NOT NULL,
  `teks_khutbah2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `nama_masjid`, `alamat_masjid`, `running_teks`, `kecepatan_teks`, `durasi_slide`, `slide_aktif`, `koreksi_hijriah`, `metode_perhitungan`, `durasi_adzan`, `iqomah_shubuh`, `iqomah_dzuhur`, `iqomah_ashar`, `iqomah_maghrib`, `iqomah_isya`, `durasi_shubuh`, `durasi_syuruq`, `durasi_dzuhur`, `durasi_ashar`, `durasi_maghrib`, `durasi_isya`, `prayer1`, `prayer2`, `prayer3`, `prayer4`, `prayer5`, `prayer6`, `garis_lintang`, `garis_bujur`, `zona_waktu`, `kunci_layar`, `teks_sebelum_adzan`, `teks_adzan`, `teks_iqomah`, `teks_sebelum_sholat`, `teks_khutbah`, `teks_khutbah1`, `teks_khutbah2`) VALUES
(1, 'Masjid Jannatul Firdaus', 'Kompleks PT. RAPP Townsite II Baru', 'Jama\'ah dihimbau untuk tetap mengenakan masker ketika berada di dalam Masjid.', 7, '6000', 2, -1, 8, 5, 10, 5, 5, 5, 5, 30, 15, 45, 45, 30, 60, 'shubuh', 'syuruq', 'dzuhur', 'ashar', 'maghrib', 'isya', '0.406393', '101.845164', '+7', 5, '“Barangsiapa duduk di masjid dalam rangka menunggu sholat, maka dia terhitung dalam keadaan sholat.” <br>(HR. an-Nasa’i dan Ahmad)', '“Ucapkanlah sebagaimana disebutkan oleh muadzin. Lalu jika sudah selesai kumandang adzan, berdoalah, maka akan diijabahi (dikabulkan).” <br>(HR. Abu Daud no. 524)', '“Sesungguhnya doa yang tidak tertolak adalah doa (yang dipanjatkan) di antara adzan dan iqomah, maka berdoalah (di waktu itu).” <br>(HR. Ahmad no. 12584)', 'Mohon untuk menonaktifkan handphone selama sholat berjamaah di masjid', 'Adab Ketika Mendengar <span>Khutbah</span> Jum\'at', 'Saat khutbah jum\'at sedang berlangsung, seorang dilarang menyibukkan diri dengan hal-hal yang bisa memalingkan konsentrasinya dari menyimak khutbah. Sebagaimana disebutkan dalam sabda Rasulullah Shallallahu‘alaihi Wasallam:', '“Jika engkau berkata pada sahabatmu pada hari Jum’at, <u>‘Diamlah, khotib sedang berkhutbah!’</u>. Sungguh engkau telah berkata sia-sia.” <br>(HR. Bukhari no. 934 dan Muslim no. 851).');

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
(1, '', '', '', '', '20200930_062655_.jpg', 0),
(2, '', '', '', '', '20200930_062732_.jpg', 1),
(3, '', '', '', '', '20200930_062832_.jpg', 0),
(4, '', '', '', '', '20200930_063348_.jpg', 0),
(5, '', '', '', '', 'covid prevention.jpg', 0),
(6, '', '', '', '', 'kamb.jpg', 0);

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
(7, 'Allah Itu Maha Indah', '\"Sesungguhnya Allah itu maha indah dan menyukai keindahan.\"', '(HR. Muslim No.91)', '', '', 1),
(8, 'Hukum Riba', '\"Dan Allah menghalalkan jual beli dan mengharamkan riba\"', '(QS. Al-Baqarah: 275)', '', '', 1),
(9, 'Riba Jahiliyah', '\"Hai orang-orang yang beriman, janganlah kamu memakan riba dengan berlipat ganda dan bertakwalah kamu kepada Allah supaya kamu mendapat keberuntungan.\"', '(QS. Ali \'Imran: 130)', '', '', 1),
(10, 'Taubat Dari Riba', '\"Sesungguhnya Allah \'Azza wa Jalla senantiasa menerima taubat hamba, selagi nafas belum sampai tenggorokan.\"', '(HR. Ibnu Majah dan dihasankan oleh Al-Albani\"', '', '', 1),
(11, 'Larangan Menasabkan Diri Kepada Selain Ayah', '\"Barang siapa mengaku (menasabkan diri) kepada selain ayahnya, padahal ia tahu bahwa dia bukan ayahnya, maka surga haram baginya.\"', '(HR. Bukhari No.6766) dan Muslim No.63)', '', '', 1),
(12, 'tes', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides1`
--
ALTER TABLE `slides1`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides2`
--
ALTER TABLE `slides2`
  MODIFY `slide2_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
