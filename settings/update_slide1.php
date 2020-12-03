<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  if(isset($_POST["slide_id"])) {

    $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
    $isi1 = isset($_POST['isi1']) ? $_POST['isi1'] : '';
    $isi2 = isset($_POST['isi2']) ? $_POST['isi2'] : '';
    $isi3 = isset($_POST['isi3']) ? $_POST['isi3'] : '';    
    $foto = isset($_POST['foto']) ? $_POST['foto'] : '';  
    $tmp_filename = isset($_POST['tmp_filename']) ? $_POST['tmp_filename'] : '';
    $slide_status = isset($_POST['slide_status']) ? $_POST['slide_status'] : '';    
    
    if($_POST["slide_id"] != '') {
                           
      if(!empty($_POST["checkBoxValue"])) { 
        
        $foto = $_FILES['foto']['name']; 
        $size   = $_FILES['foto']['size']; 
        $location = "../assets/images/slide1/".$foto;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);  
        $valid_extensions = array("jpg","jpeg","png");      

        $query = $pdo->prepare("UPDATE slides1 SET judul=?,isi1=?,isi2=?,isi3=?,foto=?,slide_status=? WHERE slide_id=?");
        $query->execute([$judul,$isi1,$isi2,$isi3,$foto,$slide_status,$_POST['slide_id']]); 
        
        // Upload foto
        move_uploaded_file($_FILES['foto']['tmp_name'],$location); 

        // Default background tidak boleh dihapus
        if ($tmp_filename != "background.jpg") {
            $location = "../assets/images/slide1/"; 
            $filename = $location.$tmp_filename;
            if (file_exists($filename)) {
                unlink($filename);
            } 
        } 
        
      } else {

        //Pakai foto lama jika tidak ada perubahan foto
        $foto = $_POST['tmp_filename'];

        $query = $pdo->prepare("UPDATE slides1 SET judul=?,isi1=?,isi2=?,isi3=?,foto=?,slide_status=? WHERE slide_id=?");
        $query->execute([$judul,$isi1,$isi2,$isi3,$foto,$slide_status,$_POST['slide_id']]); 
        
      }      

    }

    if(!empty($query)) {
      echo "<script>alert('Data berhasil disimpan.');</script>"; 
    }    
    
  }  
    
  //--Load Table--//
  include('view_slides1.php');    

?>