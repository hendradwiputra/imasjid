<?php
  include("db_connection.php");
   	
  $sql = "UPDATE settings set nama_masjid = '". $_POST['nama_masjid'] . "',alamat_masjid = '". $_POST['alamat_masjid']. "'";  
  $result = $conn->query($sql);

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  include('retrieve.php');

  
?>