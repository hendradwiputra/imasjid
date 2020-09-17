<?php
  include("db_connection.php");
  
	$sql = "SELECT * FROM settings";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $no = $row['no'];
      $nama_masjid = $row['nama_masjid'];
      $alamat_masjid = $row['alamat_masjid'];
      $kecepatan_teks = $row['kecepatan_teks'];
      $running_teks = $row['running_teks'];
      $durasi_slide = $row['durasi_slide'];
      $koreksi_hijriah = $row['koreksi_hijriah'];
      $durasi_adzan = $row['durasi_adzan'];
      $iqomah_shubuh = $row['iqomah_shubuh'];
      $iqomah_dzuhur = $row['iqomah_dzuhur'];
      $iqomah_ashar = $row['iqomah_ashar'];
      $iqomah_maghrib = $row['iqomah_maghrib'];
      $iqomah_isya = $row['iqomah_isya'];
      $garis_lintang = $row['garis_lintang'];
      $garis_bujur = $row['garis_bujur'];
      $zona_waktu = $row['zona_waktu'];
      $metode_perhitungan = $row['metode_perhitungan'];
    }
  }

  /*
  $sql2 = "SELECT * FROM slide";
  $result2 = $conn->query($sql2);

  if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
      $id = $row2['id'];
      $title = $row2['title'];
      $content1 = $row2['content1'];
      $content2 = $row2['content2'];
      $content3 = $row2['content3'];
      $content4 = $row2['content4'];
      $content5 = $row2['content5'];
      $id_image = $row2['id_image'];
      
    }
  }
  */
  $conn->close();
 
?>