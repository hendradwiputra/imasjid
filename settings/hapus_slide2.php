<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();   

  if(isset($_POST["slide2_id"])) {  

    $query = $pdo->prepare("DELETE FROM slides2 WHERE slide2_id=?");
    $query->execute([$_POST["slide2_id"]]);
    
    if(!empty($query)) {
      echo "<script>alert('Data berhasil dihapus.');</script>"; 
    } 

  } 

  include('view_slides2.php');
?>
