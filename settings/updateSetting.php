<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  $nama_masjid = isset($_POST['nama_masjid']) ? $_POST['nama_masjid'] : '';
  $alamat_masjid = isset($_POST['alamat_masjid']) ? $_POST['alamat_masjid'] : '';
  $running_teks = isset($_POST['running_teks']) ? $_POST['running_teks'] : '';
  $garis_bujur = isset($_POST['garis_bujur']) ? $_POST['garis_bujur'] : '';
  $garis_lintang = isset($_POST['garis_lintang']) ? $_POST['garis_lintang'] : '';

  if(isset($_POST["setting_id"])) { 

    $query = $pdo->prepare("UPDATE settings SET nama_masjid=?,alamat_masjid=?,running_teks=?,kecepatan_teks=?,durasi_slide=?,koreksi_hijriah=?,durasi_adzan=?,iqomah_shubuh=?,iqomah_dzuhur=?,iqomah_ashar=?,iqomah_maghrib=?,iqomah_isya=?,garis_lintang=?,garis_bujur=?,zona_waktu=?,metode_perhitungan=? WHERE setting_id=?");
    
    $query->execute([$nama_masjid,$alamat_masjid,$running_teks,$kecepatan_teks,$durasi_slide,$koreksi_hijriah,$durasi_adzan,$iqomah_shubuh,$iqomah_dzuhur,$iqomah_ashar,$iqomah_maghrib,$iqomah_isya,$garis_lintang,$garis_bujur,$zona_waktu,$metode_perhitungan,$_POST['setting_id']]); 

    if(!empty($query)) {
      echo "<script>alert('Data berhasil disimpan.');</script>"; 
    } 

  }
  
?>
