<?php
  include("../scripts/db_connection.php");
  
  $nama_masjid = mysqli_real_escape_string($conn, $_POST["nama_masjid"]);
  $alamat_masjid = mysqli_real_escape_string($conn, $_POST["alamat_masjid"]);
  $running_teks = mysqli_real_escape_string($conn, $_POST["running_teks"]);
  $garis_bujur = mysqli_real_escape_string($conn, $_POST["garis_bujur"]);
  $garis_lintang = mysqli_real_escape_string($conn, $_POST["garis_lintang"]);

  if(isset($_POST["setting_id"])) { 

    $sql = "UPDATE settings set nama_masjid = '$nama_masjid',alamat_masjid = '$alamat_masjid',";
    $sql.= "running_teks = '$running_teks',kecepatan_teks = '". $_POST['kecepatan_teks']. "',";
    $sql.= "durasi_slide = '". $_POST['durasi_slide']. "',";
    $sql.= "koreksi_hijriah = '".$_POST['koreksi_hijriah']."',durasi_adzan = '".$_POST['durasi_adzan']."',";
    $sql.= "iqomah_shubuh = '".$_POST['iqomah_shubuh']."',iqomah_dzuhur = '".$_POST['iqomah_dzuhur']."',";
    $sql.= "iqomah_ashar = '".$_POST['iqomah_ashar']."',iqomah_maghrib = '".$_POST['iqomah_maghrib']."',";
    $sql.= "iqomah_isya = '".$_POST['iqomah_isya']."',garis_lintang = '$garis_lintang',";
    $sql.= "garis_bujur = '$garis_bujur',zona_waktu = '".$_POST['zona_waktu']."',";
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
