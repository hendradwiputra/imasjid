<?php 

	include_once ("../scripts/db_connection.php");

	$pdo = pdo_connect_mysql();
	$query = $pdo->prepare('SELECT * FROM images');
	$query->execute();  
	$result = $query->fetchAll(PDO::FETCH_ASSOC);   
    
    echo "<div class='gallery2' id='table_images'>";	

	foreach ($result as $row) {	
                    
        $image_id    = $row['image_id'];
		$foto_slide2 = $row['foto_slide2'];			               			
        			
		echo "<a href='../assets/images/slide2/$foto_slide2' id='$foto_slide2' class='hapus_image2' ><img src='../assets/images/slide2/$foto_slide2' alt='' title='$foto_slide2' width='120px' height='80px' class='image border border-light'></a>";
                  
    }    

    echo "<div class='clear'></div>";
    echo "</div>";                
    
?>

<script type="text/javascript">
    $(document).ready(function(){

        var $lightbox2 = new SimpleLightbox('.gallery2 a', {});  

    });

    
</script>
