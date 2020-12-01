<?php  
	
	include_once ("../scripts/db_connection.php");

  	$pdo = pdo_connect_mysql();
 	
	if(isset($_POST["slide_id"])) { 

		$query = $pdo->prepare("SELECT * FROM slides1 WHERE slide_id = '". $_POST['slide_id']. "'");
  		$query->execute();  
		$result = $query->fetchAll();
		  
		foreach($result as $row) {
			$output["slide_id"] 		= $row["slide_id"];
			$output["judul"] 	= $row["judul"];
			$output["isi1"] 		= $row["isi1"];
			$output["isi2"] 		= $row["isi2"];
			$output["isi3"] 		= $row["isi3"];
			$output["foto"] 		= $row["foto"];
			$output["slide_status"] 	= $row["slide_status"];
		}
	  
    	echo json_encode($output);  
	}
	
 ?>