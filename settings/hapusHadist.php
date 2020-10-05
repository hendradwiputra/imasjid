<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();   

  if(isset($_POST["hadist_id"])) {  

    $query = $pdo->prepare("DELETE FROM hadist WHERE hadist_id=?");
    $query->execute([$_POST["hadist_id"]]);
    
    if(!empty($query)) {
      echo "<script>alert('Data berhasil dihapus.');</script>"; 
    } 

  } 

  include('view_hadist.php');
?>
