<?php 

 	include("../scripts/db_connection.php");

	$sql = "SELECT * FROM images ORDER BY id desc";
	$result = mysqli_query($conn,$sql);

	echo "<table id='gallery' width='60%' cellpadding=5 align = 'left'><tr>";
	$count = 0;
	if ($result->num_rows > 0) {
		foreach($result as $data){ 
			$id = $data['id'];
			$filename = $data['name'];
			$image = $data['image'];

			echo "<td valign='bottom' colspan='2' class='text-center'><a href='$id'><img src='../assets/images/$filename' width='195px' height='130px'></a></td>";

			$count++;
            if($count >=6){
                echo "</tr><tr>";                
                $count = 0;
            }   
			
		}
		
	}
		
	echo "</tr></table>";

?>
