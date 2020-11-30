<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();     

  if(isset($_POST["foto_slide2"])) { 

    $query = $pdo->prepare("DELETE FROM images WHERE foto_slide2=?");
    $query->execute([$_POST["foto_slide2"]]);

    if (array_key_exists('foto_slide2', $_POST)) {
        $location = "../assets/images/slides2/"; 
        $filename = $location.$_POST['foto_slide2'];
        if (file_exists($filename)) {
          unlink($filename);
          //echo 'File '.$_POST['foto_slide2'].' berhasil dihapus.';
        } else {
          echo 'Hapus file gagal, file tidak ditemukan';
        }
    } 
    
  }   

  include('view_images2.php');
?>
