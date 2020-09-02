<?php
	
	include("db_connection.php");

	//Update
	$sql = "UPDATE settings set nama_masjid=$_POST['nama_masjid'] WHERE id='".$_POST["id"]."'";
  $query = $db->exec($sql);

  //Insert
  $sql = "INSERT into settings (nama_masjid) VALUES($_POST['nama_masjid'])";
  $query = $db->exec($sql);

  //Delete
  $sql = "DELETE from settings WHERE id=$_POST['id']";
  $query = $db->query($sql);

?>