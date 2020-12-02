<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  $nama_masjid      = isset($_POST['nama_masjid']) ? $_POST['nama_masjid'] : '';
  $alamat_masjid    = isset($_POST['alamat_masjid']) ? $_POST['alamat_masjid'] : '';
  $running_teks     = isset($_POST['running_teks']) ? $_POST['running_teks'] : '';
  $kecepatan_teks   = isset($_POST['kecepatan_teks']) ? $_POST['kecepatan_teks'] : '';
  $durasi_slide     = isset($_POST['durasi_slide']) ? $_POST['durasi_slide'] : '';
  $slide_aktif      = isset($_POST['slide_aktif']) ? $_POST['slide_aktif'] : '';
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
  $teks_sebelum_adzan = isset($_POST['teks_sebelum_adzan']) ? $_POST['teks_sebelum_adzan'] : '';
  $teks_adzan         = isset($_POST['teks_adzan']) ? $_POST['teks_adzan'] : '';
  $teks_iqomah        = isset($_POST['teks_iqomah']) ? $_POST['teks_iqomah'] : '';
  $teks_sebelum_sholat= isset($_POST['teks_sebelum_sholat']) ? $_POST['teks_sebelum_sholat'] : '';
  $teks_khutbah       = isset($_POST['teks_khutbah']) ? $_POST['teks_khutbah'] : '';
  $teks_khutbah1      = isset($_POST['teks_khutbah1']) ? $_POST['teks_khutbah1'] : '';
  $teks_khutbah2      = isset($_POST['teks_khutbah2']) ? $_POST['teks_khutbah2'] : '';
  $header_position    = isset($_POST['header_position']) ? $_POST['header_position'] : '';
  $kunci_layar        = isset($_POST['kunci_layar']) ? $_POST['kunci_layar'] : '';
  $kunci_layar_sholat = isset($_POST['kunci_layar_sholat']) ? $_POST['kunci_layar_sholat'] : '';
  $kunci_layar_jumat  = isset($_POST['kunci_layar_jumat']) ? $_POST['kunci_layar_jumat'] : '';
  $teks_syuruq1       = isset($_POST['teks_syuruq1']) ? $_POST['teks_syuruq1'] : '';
  $teks_syuruq2       = isset($_POST['teks_syuruq2']) ? $_POST['teks_syuruq2'] : '';

  if(isset($_POST["setting_id"])) { 

    $query = $pdo->prepare("UPDATE settings SET nama_masjid=?,alamat_masjid=?,running_teks=?,kecepatan_teks=?,durasi_slide=?,slide_aktif=?,koreksi_hijriah=?,durasi_adzan=?,iqomah_shubuh=?,iqomah_dzuhur=?,iqomah_ashar=?,iqomah_maghrib=?,iqomah_isya=?,durasi_shubuh=?,durasi_syuruq=?,durasi_dzuhur=?,durasi_ashar=?,durasi_maghrib=?,durasi_isya=?,prayer1=?,prayer2=?,prayer3=?,prayer4=?,prayer5=?,prayer6=?,garis_lintang=?,garis_bujur=?,zona_waktu=?,metode_perhitungan=?,teks_sebelum_adzan=?,teks_adzan=?,teks_iqomah=?,teks_sebelum_sholat=?,teks_khutbah=?,teks_khutbah1=?,teks_khutbah2=?,header_position=?,kunci_layar=?,kunci_layar_sholat=?,kunci_layar_jumat=?,teks_syuruq1=?,teks_syuruq2=? WHERE setting_id=?");    
    $query->execute([$nama_masjid,$alamat_masjid,$running_teks,$kecepatan_teks,$durasi_slide,$slide_aktif,$koreksi_hijriah,$durasi_adzan,$iqomah_shubuh,$iqomah_dzuhur,$iqomah_ashar,$iqomah_maghrib,$iqomah_isya,$durasi_shubuh,$durasi_syuruq,$durasi_dzuhur,$durasi_ashar,$durasi_maghrib,$durasi_isya,$prayer1,$prayer2,$prayer3,$prayer4,$prayer5,$prayer6,$garis_lintang,$garis_bujur,$zona_waktu,$metode_perhitungan,$teks_sebelum_adzan,$teks_adzan,$teks_iqomah,$teks_sebelum_sholat,$teks_khutbah,$teks_khutbah1,$teks_khutbah2,$header_position,$kunci_layar,$kunci_layar_sholat,$kunci_layar_jumat,$teks_syuruq1,$teks_syuruq2,$_POST['setting_id']]); 
    
  }

  if(!empty($query)) {
    echo "Data berhasil disimpan."; 
  } 
  
?>
