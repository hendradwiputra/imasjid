<?php 

	include_once ("./scripts/db_connection.php");
	include ('./scripts/view_settings.php');
	include ('./scripts/random_image.php');

	$pdo = pdo_connect_mysql();
	  
	if ($slide_aktif==1) {
		/*slide_aktif = 1*/
		$query = $pdo->prepare('SELECT judul as title,isi1 as content1,isi2 as content2,isi3 as content3,foto as picture from slides1 where slide_status=1');  
	
	} else if ($slide_aktif==2) {
		/*slide_aktif = 2*/
		$query = $pdo->prepare('SELECT slide2_judul as title,slide2_isi1 as content1,slide2_isi2 as content2,slide2_isi3 as content3,slide2_foto as picture from slides2 where slide2_status=1');  
	
	} else {
		/*slide_aktif = 3 (tampilkan isi kedua slide)*/
		$query = $pdo->prepare(' 
			(SELECT judul as title,isi1 as content1,isi2 as content2,isi3 as content3,foto as picture FROM slides1 WHERE slide_status=1) 
			UNION 
			(SELECT slide2_judul as title,slide2_isi1 as content1,slide2_isi2 as content2,slide2_isi3 as content3,slide2_foto as picture FROM slides2 WHERE slide2_status=1 ORDER BY rand() limit 1)  
			');
	}
		
	$query->execute();  
  	$result = $query->fetchAll(PDO::FETCH_ASSOC);
	
	$count = 0;
	foreach ($result as $row) { 
		$judul = $row['title'];
		$isi1 = $row['content1'];			
		$isi2 = $row['content2'];
		$isi3 = $row['content3'];			
		$foto = rawurlencode($row['picture']);

		/* Random Image from folder */
		$imgList = getImagesFromDir($root . $path);
		$img = getRandomFromArray($imgList);			
			
		if ($count == 0) { $class = 'carousel-item active';} else { $class = 'carousel-item'; }
			
			if ($foto == "") {
				echo "<div class='$class' style='background-image: url(./assets/images/slide2/$img)'>";
			} else {
				echo "<div class='$class' style='background-image: url(./assets/images/slide1/$foto)'>";
			}		
			
	    	echo "<div class='carousel-container'>";
            echo "<div class='container'>";
            echo "<h2 class='animate__animated animate__fadeInDown'>$judul</h2>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi1</p>";			
			echo "<p class='animate__animated animate__fadeInUp'>$isi2</p>";
            echo "<p class='animate__animated animate__fadeInUp'>$isi3</p>";
			echo "</div>";
            echo "</div>";
            echo "</div>";
			$count++;
	}		
	
?>
