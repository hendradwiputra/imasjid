<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  $nama_masjid      = isset($_POST['nama_masjid']) ? $_POST['nama_masjid'] : '';
  $alamat_masjid    = isset($_POST['alamat_masjid']) ? $_POST['alamat_masjid'] : '';
  $running_teks     = isset($_POST['running_teks']) ? $_POST['running_teks'] : '';
  $kecepatan_teks   = isset($_POST['kecepatan_teks']) ? $_POST['kecepatan_teks'] : '';
  $durasi_slide     = isset($_POST['durasi_slide']) ? $_POST['durasi_slide'] : '';
  $koreksi_hijriah  = isset($_POST['koreksi_hijriah']) ? $_POST['koreksi_hijriah'] : '';
  $durasi_adzan     = isset($_POST['durasi_adzan']) ? $_POST['durasi_adzan'] : '';
  $iqomah_shubuh    = isset($_POST['iqomah_shubuh']) ? $_POST['iqomah_shubuh'] : '';
  $iqomah_dzuhur    = isset($_POST['iqomah_dzuhur']) ? $_POST['iqomah_dzuhur'] : '';
  $iqomah_ashar     = isset($_POST['iqomah_ashar']) ? $_POST['iqomah_ashar'] : '';
  $iqomah_maghrib   = isset($_POST['iqomah_maghrib']) ? $_POST['iqomah_maghrib'] : '';
  $iqomah_isya      = isset($_POST['iqomah_isya']) ? $_POST['iqomah_isya'] : '';
  $durasi_shubuh    = isset($_POST['durasi_shubuh']) ? $_POST['durasi_shubuh'] : '';
  $durasi_syuruq    = isset($_POST['durasi_syuruq']) ? $_POST['durasi_syuruq'] : '';
  $durasi_dzuhur    = isset($_POST['durasi_dzuhur']) ? $_POST['durasi_dzuhur'] : '';
  $durasi_ashar     = isset($_POST['durasi_ashar']) ? $_POST['durasi_ashar'] : '';
  $durasi_maghrib   = isset($_POST['durasi_maghrib']) ? $_POST['durasi_maghrib'] : '';
  $durasi_isya      = isset($_POST['durasi_isya']) ? $_POST['durasi_isya'] : '';
  $prayer1          = isset($_POST['prayer1']) ? $_POST['prayer1'] : '';
  $prayer2          = isset($_POST['prayer2']) ? $_POST['prayer2'] : '';
  $prayer3          = isset($_POST['prayer3']) ? $_POST['prayer3'] : '';
  $prayer4          = isset($_POST['prayer4']) ? $_POST['prayer4'] : '';
  $prayer5          = isset($_POST['prayer5']) ? $_POST['prayer5'] : '';
  $prayer6          = isset($_POST['prayer6']) ? $_POST['prayer6'] : '';
  $zona_waktu       = isset($_POST['zona_waktu']) ? $_POST['zona_waktu'] : '';
  $garis_bujur      = isset($_POST['garis_bujur']) ? $_POST['garis_bujur'] : '';
  $garis_lintang    = isset($_POST['garis_lintang']) ? $_POST['garis_lintang'] : '';
  $metode_perhitungan = isset($_POST['metode_perhitungan']) ? $_POST['metode_perhitungan'] : '';
  $kunci_layar      = isset($_POST['kunci_layar']) ? $_POST['kunci_layar'] : '';

  if(isset($_POST["setting_id"])) { 

    $query = $pdo->prepare("UPDATE settings SET nama_masjid=?,alamat_masjid=?,running_teks=?,kecepatan_teks=?,durasi_slide=?,koreksi_hijriah=?,durasi_adzan=?,iqomah_shubuh=?,iqomah_dzuhur=?,iqomah_ashar=?,iqomah_maghrib=?,iqomah_isya=?,durasi_shubuh=?,durasi_syuruq=?,durasi_dzuhur=?,durasi_ashar=?,durasi_maghrib=?,durasi_isya=?,prayer1=?,prayer2=?,prayer3=?,prayer4=?,prayer5=?,prayer6=?,garis_lintang=?,garis_bujur=?,zona_waktu=?,metode_perhitungan=?,kunci_layar=? WHERE setting_id=?");    
    $query->execute([$nama_masjid,$alamat_masjid,$running_teks,$kecepatan_teks,$durasi_slide,$koreksi_hijriah,$durasi_adzan,$iqomah_shubuh,$iqomah_dzuhur,$iqomah_ashar,$iqomah_maghrib,$iqomah_isya,$durasi_shubuh,$durasi_syuruq,$durasi_dzuhur,$durasi_ashar,$durasi_maghrib,$durasi_isya,$prayer1,$prayer2,$prayer3,$prayer4,$prayer5,$prayer6,$garis_lintang,$garis_bujur,$zona_waktu,$metode_perhitungan,$kunci_layar,$_POST['setting_id']]); 
    
  }

  if(!empty($query)) {
    echo "Data berhasil disimpan."; 
  } 
  
?>
