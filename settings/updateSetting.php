<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  $nama_masjid = isset($_POST['nama_masjid']) ? $_POST['nama_masjid'] : '';
  $alamat_masjid = isset($_POST['alamat_masjid']) ? $_POST['alamat_masjid'] : '';
  $running_teks = isset($_POST['running_teks']) ? $_POST['running_teks'] : '';
  $kecepatan_teks = isset($_POST['kecepatan_teks']) ? $_POST['kecepatan_teks'] : '';
  $durasi_slide = isset($_POST['durasi_slide']) ? $_POST['durasi_slide'] : '';
  $koreksi_hijriah = isset($_POST['koreksi_hijriah']) ? $_POST['koreksi_hijriah'] : '';
  $durasi_adzan = isset($_POST['durasi_adzan']) ? $_POST['durasi_adzan'] : '';
  $iqomah_shubuh = isset($_POST['iqomah_shubuh']) ? $_POST['iqomah_shubuh'] : '';
  $iqomah_dzuhur = isset($_POST['iqomah_dzuhur']) ? $_POST['iqomah_dzuhur'] : '';
  $iqomah_ashar = isset($_POST['iqomah_ashar']) ? $_POST['iqomah_ashar'] : '';
  $iqomah_maghrib = isset($_POST['iqomah_maghrib']) ? $_POST['iqomah_maghrib'] : '';
  $iqomah_isya = isset($_POST['iqomah_isya']) ? $_POST['iqomah_isya'] : '';
  $zona_waktu = isset($_POST['zona_waktu']) ? $_POST['zona_waktu'] : '';
  $garis_bujur = isset($_POST['garis_bujur']) ? $_POST['garis_bujur'] : '';
  $garis_lintang = isset($_POST['garis_lintang']) ? $_POST['garis_lintang'] : '';
  $metode_perhitungan = isset($_POST['metode_perhitungan']) ? $_POST['metode_perhitungan'] : '';

  if(isset($_POST["setting_id"])) { 

    $query = $pdo->prepare("UPDATE settings SET nama_masjid=?,alamat_masjid=?,running_teks=?,kecepatan_teks=?,durasi_slide=?,koreksi_hijriah=?,durasi_adzan=?,iqomah_shubuh=?,iqomah_dzuhur=?,iqomah_ashar=?,iqomah_maghrib=?,iqomah_isya=?,garis_lintang=?,garis_bujur=?,zona_waktu=?,metode_perhitungan=? WHERE setting_id=?");    
    $query->execute([$nama_masjid,$alamat_masjid,$running_teks,$kecepatan_teks,$durasi_slide,$koreksi_hijriah,$durasi_adzan,$iqomah_shubuh,$iqomah_dzuhur,$iqomah_ashar,$iqomah_maghrib,$iqomah_isya,$garis_lintang,$garis_bujur,$zona_waktu,$metode_perhitungan,$_POST['setting_id']]); 
    
  }

  if(!empty($query)) {
    echo "Data berhasil disimpan."; 
  } 
  
?>
