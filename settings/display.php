<?php 

	include_once ("./scripts/db_connection.php");
	include ('./scripts/view_settings.php');

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

			/*Randomize Background*/
			$bg = array('bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg', 'bg7.jpg', 'bg8.jpg', 'bg9.jpg', 'bg10.jpg', 
						'bg11.jpg','bg12.jpg','bg13.jpg','bg14.jpg','bg15.jpg','bg16.jpg','bg17.jpg','bg18.jpg','bg19.jpg','bg20.jpg',
						'bg21.jpg', 
					); 
			$i = rand(0, count($bg)-1);
            $selectedBg = "$bg[$i]"; 
            /*End Randomize Background*/
			
		if ($count == 0) { $class = 'carousel-item active';} else { $class = 'carousel-item'; }
			
			if ($foto == "") {
				echo "<div class='$class' style='background-image: url(./assets/images/slide2/$selectedBg)' no-repeat>";
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
