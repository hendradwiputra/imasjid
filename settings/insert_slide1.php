<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  if(isset($_POST["slide_id"])) {

    $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
    $isi1 = isset($_POST['isi1']) ? $_POST['isi1'] : '';
    $isi2 = isset($_POST['isi2']) ? $_POST['isi2'] : '';
    $isi3 = isset($_POST['isi3']) ? $_POST['isi3'] : '';
    $slide_status = isset($_POST['slide_status']) ? $_POST['slide_status'] : '';
                              
      if(!empty($_POST["checkBoxValue"])) {

        $foto = $_FILES['foto']['name']; 
        $size   = $_FILES['foto']['size'];
        $location = "../assets/images/slide1/".$foto; 
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION); 
        $valid_extensions = array("jpg","jpeg","png");  

        $query = $pdo->prepare("INSERT INTO slides1 (judul,isi1,
                isi2,isi3,foto,slide_status) VALUES(?,?,?,?,?,?)");
              
        $query->execute([$judul,$isi1,$isi2,$isi3,$foto,$slide_status]); 

        move_uploaded_file($_FILES['foto']['tmp_name'],$location); 

      } else {
        
        $foto = "background.jpg";
        $query = $pdo->prepare("INSERT INTO slides1 (judul,isi1,
                isi2,isi3,foto,slide_status) VALUES(?,?,?,?,?,?)");
              
        $query->execute([$judul,$isi1,$isi2,$isi3,$foto,$slide_status]); 
        
      }

      if(!empty($query)) {
        echo "<script>alert('Data berhasil disimpan.');</script>"; 
      } 

  }       
  
  //--Load Table--//
  include('view_slides1.php');    

?>