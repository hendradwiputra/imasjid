<?php
  // https://www.tutlane.com/tutorial/sqlite/sqlite-php-tutorial
	
	include("db_connection.php");
  
  $id = $_POST['id'];
  $nama_masjid = $_POST['nama_masjid'];
	
	$sql = "UPDATE settings set nama_masjid='Nurul' WHERE id=$id";
  $query = $db->exec($sql);

  if (!$query) {
    echo "Error in query";
  } else {
    echo "Data updated";
  }

  $sql2 = "SELECT * from settings";
  $query2 = $db->query($sql2);

  while($row = $query->fetchArray()) {
      $id = $row['id'];
      $nama_masjid = $row['nama_masjid'];
      $alamat_masjid = $row['alamat_masjid'];
      $kecepatan_teks = $row['kecepatan_teks'];
      $running_text = $row['running_text'];
  }

  $db->close();

?>