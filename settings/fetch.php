
  <?php  
 
  	include("../scripts/db_connection.php");

	if(isset($_POST["slide_id"])) { 
  		$query = "SELECT * FROM slides where slide_id = '". $_POST["slide_id"]. "'";  
    	$result = mysqli_query($conn, $query);  
    	$row = mysqli_fetch_array($result);  
    	echo json_encode($row);  
	}
	
 ?>