<?php
	
	// include Database connection file 
	include("db_connection.php");
 		
	$sql = "SELECT * from settings";
  $query = $db->query($sql);  

  while($row = $query->fetchArray(SQLITE3_ASSOC) ) {
      $id = $row['id'];
      $nama_masjid = $row['nama_masjid'];
      $alamat_masjid = $row['alamat_masjid'];
      $kecepatan_teks = $row['kecepatan_teks'];
      $running_text = $row['running_text'];
      $koreksi_hijriah = $row['koreksi_hijriah'];
      $durasi_adzan = $row['durasi_adzan'];
      $iqomah_shubuh = $row['iqomah_shubuh'];
      $iqomah_dzuhur = $row['iqomah_dzuhur'];
      $iqomah_ashar = $row['iqomah_ashar'];
      $iqomah_maghrib = $row['iqomah_maghrib'];
      $iqomah_isya = $row['iqomah_isya'];
      $latitude = $row['latitude'];
      $longitude = $row['longitude'];
      $timezone = $row['timezone'];
      $metode_perhitungan = $row['metode_perhitungan'];
  }
    
  $db->close();

?>