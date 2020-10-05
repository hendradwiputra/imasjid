<?php 

	include_once ("./scripts/db_connection.php");

  	$pdo = pdo_connect_mysql();
  	$query = $pdo->prepare('SELECT * FROM slides where slide_status=1');
  	$query->execute();  
  	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	
	$count = 0;
	foreach ($result as $row) { 
			$judul = $row['judul'];
			$isi1 = $row['isi1'];
			$isi2 = $row['isi2'];
			$isi3 = $row['isi3'];
			$isi4 = $row['isi4'];
			$foto = rawurlencode($row['foto']);

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
	
?>
