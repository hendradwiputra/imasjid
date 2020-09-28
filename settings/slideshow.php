<?php 

 	include("./scripts/db_connection.php");

	$sql = "SELECT * FROM slides";
	$result = $conn->query($sql);
	
	$count = 0;
	if ($result->num_rows > 0) {
		foreach ($result as $data) { 
			$judul = $data['judul'];
			$isi1 = $data['isi1'];
			$isi2 = $data['isi2'];
			$isi3 = $data['isi3'];
			$isi4 = $data['isi4'];
			$foto = rawurlencode($data['foto']);

			if ($count == 0) { $class = 'carousel-item active';} else { $class = 'carousel-item'; }

	    echo "<div class='$class' style='background-image: url(./assets/images/$foto)'>";
	    echo "<div class='carousel-container'>";
            echo "<div class='container'>";
            echo "<h2 class='animate__animated animate__fadeInDown'>$judul</h2>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi1</p>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi2</p>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi3</p>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi4</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
			$count++;
		}		
	}		

?>
