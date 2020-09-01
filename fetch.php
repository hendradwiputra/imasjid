<?php
	
	// include Database connection file 
	include("db_connection.php");
 		
	$sql = "SELECT * from settings WHERE id='".$_POST["id"]."'";
  	$query = $db->exec($sql);

  	$ret = $db->query($sql);
  
  
  	$row = mysqli_fetch_array($ret);  
    echo json_encode($row);  
    
  	$db->close();

?>