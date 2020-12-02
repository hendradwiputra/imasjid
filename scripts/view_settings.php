<?php

  include_once ("db_connection.php");

  $pdo = pdo_connect_mysql();
  $query = $pdo->prepare('SELECT * FROM settings');
  $query->execute();  
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $row) {
    $setting_id = $row['setting_id'];
    $nama_masjid = $row['nama_masjid'];
    $alamat_masjid = $row['alamat_masjid'];
    $running_teks = $row['running_teks'];
    $kecepatan_teks = $row['kecepatan_teks'];
    $durasi_slide = $row['durasi_slide'];
    $slide_aktif = $row['slide_aktif'];
    $koreksi_hijriah = $row['koreksi_hijriah'];
    $metode_perhitungan = $row['metode_perhitungan'];
    $garis_lintang = $row['garis_lintang'];
    $garis_bujur = $row['garis_bujur'];
    $zona_waktu = $row['zona_waktu'];
    $durasi_adzan = $row['durasi_adzan'];
    $iqomah_shubuh = $row['iqomah_shubuh'];
    $iqomah_dzuhur = $row['iqomah_dzuhur'];
    $iqomah_ashar = $row['iqomah_ashar'];
    $iqomah_maghrib = $row['iqomah_maghrib'];
    $iqomah_isya = $row['iqomah_isya'];
    $durasi_shubuh = $row['durasi_shubuh'];
    $durasi_syuruq = $row['durasi_syuruq'];
    $durasi_dzuhur = $row['durasi_dzuhur'];
    $durasi_ashar = $row['durasi_ashar'];
    $durasi_maghrib = $row['durasi_maghrib'];
    $durasi_isya = $row['durasi_isya'];
    $prayer1 = $row['prayer1'];
    $prayer2 = $row['prayer2'];
    $prayer3 = $row['prayer3'];
    $prayer4 = $row['prayer4'];
    $prayer5 = $row['prayer5'];
    $prayer6 = $row['prayer6'];    
    $teks_sebelum_adzan = $row['teks_sebelum_adzan'];
    $teks_adzan = $row['teks_adzan'];
    $teks_iqomah = $row['teks_iqomah'];
    $teks_sebelum_sholat = $row['teks_sebelum_sholat'];
    $teks_khutbah = $row['teks_khutbah'];
    $teks_khutbah1 = $row['teks_khutbah1'];
    $teks_khutbah2 = $row['teks_khutbah2'];
    $header_position = $row['header_position'];
    $kunci_layar = $row['kunci_layar'];
    $kunci_layar_sholat = $row['kunci_layar_sholat'];
    $kunci_layar_jumat = $row['kunci_layar_jumat'];
    $teks_syuruq1 = $row['teks_syuruq1'];
    $teks_syuruq2 = $row['teks_syuruq2'];
    $teks_syuruq3 = $row['teks_syuruq3'];
  }
  

?>