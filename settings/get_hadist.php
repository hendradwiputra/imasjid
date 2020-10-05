
  <?php  
 
 	include_once ("../scripts/db_connection.php");

 	$pdo = pdo_connect_mysql();

	if(isset($_POST["hadist_id"])) { 

   		$query = $pdo->prepare("SELECT * FROM hadist WHERE hadist_id = '". $_POST['hadist_id']. "'");
	 	$query->execute();  
   		$result = $query->fetchAll();
	 
   		foreach($result as $row) {
	   		$output["hadist_id"] = $row["hadist_id"];
	   		$output["hadist_judul"] = $row["hadist_judul"];
	   		$output["hadist_isi1"] = $row["hadist_isi1"];
	   		$output["hadist_isi2"] = $row["hadist_isi2"];
	   		$output["hadist_isi3"] = $row["hadist_isi3"];
	   		$output["hadist_status"] = $row["hadist_status"];	   
   		}
 
   		echo json_encode($output);  
	}
	
 ?>