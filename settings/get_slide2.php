
  <?php  
 
 	include_once ("../scripts/db_connection.php");

 	$pdo = pdo_connect_mysql();

	if(isset($_POST["slide2_id"])) { 

   		$query = $pdo->prepare("SELECT * FROM slides2 WHERE slide2_id = '". $_POST['slide2_id']. "'");
	 	$query->execute();  
   		$result = $query->fetchAll();
	 
   		foreach($result as $row) {
	   		$output["slide2_id"] 		= $row["slide2_id"];
	   		$output["slide2_judul"] 	= $row["slide2_judul"];
	   		$output["slide2_isi1"] 		= $row["slide2_isi1"];
	   		$output["slide2_isi2"] 		= $row["slide2_isi2"];
	   		$output["slide2_isi3"] 		= $row["slide2_isi3"];
	   		$output["slide2_status"] 	= $row["slide2_status"];	   
   		}
 
   		echo json_encode($output);  
	}
	
 ?>