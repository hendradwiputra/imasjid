<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  if(isset($_POST["image_id"])) {
                              
     
        $foto   = $_FILES['foto_slide2']['name']; 
        $size   = $_FILES['foto_slide2']['size'];
        $location = "../assets/images/slide2/".$foto; 
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION); 
        $valid_extensions = array("jpg","jpeg","png");  

        $query = $pdo->prepare("INSERT INTO images (foto_slide2) VALUES(?)");
              
        $query->execute([$foto]); 

        move_uploaded_file($_FILES['foto_slide2']['tmp_name'],$location); 

      if(!empty($query)) {
        echo "<script>alert('Data berhasil disimpan.');</script>"; 
      } 

  }       
  
  //--Load Table--//
  include('view_images2.php');    

?>