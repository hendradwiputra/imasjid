<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();     

  if(isset($_POST["slide_id"])) { 

    $query = $pdo->prepare("DELETE FROM slides WHERE slide_id=?");
    $query->execute([$_POST["slide_id"]]);
    
    if(!empty($query)) {
      echo "<script>alert('Data berhasil dihapus.');</script>"; 
    } 

  } 

  include('view_slides.php');
?>
