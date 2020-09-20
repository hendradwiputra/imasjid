
  <?php  
 
  	include("../scripts/db_connection.php");

	if(isset($_POST["no"])) { 
  		$query = "SELECT * FROM slides where no = '". $_POST["no"]. "'";  
    	$result = mysqli_query($conn, $query);  
    	$row = mysqli_fetch_array($result);  
    	echo json_encode($row);  
	}
	
 ?>