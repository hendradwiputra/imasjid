<?php
  include("../scripts/db_connection.php");
    
  if(isset($_POST["setting_id"])) { 

    $sql = "UPDATE settings set nama_masjid = '". $_POST['nama_masjid']. "',alamat_masjid = '".$_POST['alamat_masjid']."',";
    $sql.= "running_teks = '". $_POST['running_teks']. "',kecepatan_teks = '". $_POST['kecepatan_teks']. "',";
    $sql.= "durasi_slide = '". $_POST['durasi_slide']. "',";
    $sql.= "koreksi_hijriah = '".$_POST['koreksi_hijriah']."',durasi_adzan = '".$_POST['durasi_adzan']."',";
    $sql.= "iqomah_shubuh = '".$_POST['iqomah_shubuh']."',iqomah_dzuhur = '".$_POST['iqomah_dzuhur']."',";
    $sql.= "iqomah_ashar = '".$_POST['iqomah_ashar']."',iqomah_maghrib = '".$_POST['iqomah_maghrib']."',";
    $sql.= "iqomah_isya = '".$_POST['iqomah_isya']."',garis_lintang = '".$_POST['garis_lintang']."',";
    $sql.= "garis_bujur = '".$_POST['garis_bujur']."',zona_waktu = '".$_POST['zona_waktu']."',";
    $sql.= "metode_perhitungan = '".$_POST['metode_perhitungan']."' ";
    $sql.= "WHERE setting_id = '". $_POST['setting_id'] ."'";

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";
    } else {
      echo "Terjadi kegagalan dalam penyimpanan data : " . $conn->error;
    }
  }

  $conn->close();
  
?>
