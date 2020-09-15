<?php 

 	include("db_connection.php");

	$sql = "SELECT t1.name,t2.judul,t2.isi FROM images t1 INNER JOIN slides t2 ON t1.id = t2.image_id";
	$result = $conn->query($sql);
	
	$count = 0;
	if ($result->num_rows > 0) {
		foreach ($result as $data) { 
			$image = $data['name'];
			$judul = $data['judul'];
			$isi = $data['isi'];
		

			if ($count == 0) { $class = 'carousel-item active';} else { $class = 'carousel-item'; }

			echo "<div class='$class' style='background-image: url(./assets/images/$image)'>";
			echo "<div class='carousel-container'>";
            echo "<div class='container'>";
            echo "<h2 class='animate__animated animate__fadeInDown'>$judul</h2>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
			$count++;
		}		
	}		

?>
