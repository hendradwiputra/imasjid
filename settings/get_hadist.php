
  <?php  
 
  	include("../scripts/db_connection.php");

	if(isset($_POST["hadist_id"])) { 
  		$query = "SELECT * FROM hadist where hadist_id = '". $_POST["hadist_id"]. "'";  
    	$result = mysqli_query($conn, $query);  
    	$row = mysqli_fetch_array($result);  
    	echo json_encode($row);  
	}
	
 ?>