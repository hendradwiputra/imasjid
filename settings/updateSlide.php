<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  if(isset($_POST["slide_id"])) {

    $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
    $isi1 = isset($_POST['isi1']) ? $_POST['isi1'] : '';
    $isi2 = isset($_POST['isi2']) ? $_POST['isi2'] : '';
    $isi3 = isset($_POST['isi3']) ? $_POST['isi3'] : '';
    $isi4 = isset($_POST['isi4']) ? $_POST['isi4'] : '';
    $tmp_filename = isset($_POST['tmp_filename']) ? $_POST['tmp_filename'] : '';
    $slide_status = isset($_POST['slide_status']) ? $_POST['slide_status'] : '';    
    
    if($_POST["slide_id"] != '') {
                           
      if(!empty($_POST["checkBoxValue"])) { 
        
        $foto = $_FILES['foto']['name'];
        $size   = $_FILES['foto']['size'];
        $foto = $_FILES['foto']['tmp_name'];
        $location = "../assets/images/".$foto;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);  
        $valid_extensions = array("jpg","jpeg","png");
        move_uploaded_file($_FILES['foto']['tmp_name'],$location);

        $query = $pdo->prepare("UPDATE slides SET judul=?,isi1=?,isi2=?,isi3=?,isi4=?,foto=?,slide_status=? WHERE slide_id=?");
        $query->execute([$judul,$isi1,$isi2,$isi3,$isi4,$foto,$slide_status,$_POST['slide_id']]); 
        
      } else {
        //Pakai foto lama jika tidak ada perubahan foto
        $foto = $_POST['tmp_filename'];

        $query = $pdo->prepare("UPDATE slides SET judul=?,isi1=?,isi2=?,isi3=?,isi4=?,foto=?,slide_status=? WHERE slide_id=?");
        $query->execute([$judul,$isi1,$isi2,$isi3,$isi4,$foto,$slide_status,$_POST['slide_id']]); 
        
      }      

    }

    if(!empty($query)) {
      echo "<script>alert('Data berhasil disimpan.');</script>"; 
    }    
    
  }  
    
  //--Load Table--//
  include('view_slides.php');    

?>