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

  }
  

?>
