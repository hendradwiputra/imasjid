<?php
  include("../scripts/db_connection.php");   

  if(isset($_POST["hadist_id"])) {  
    $sql = "DELETE FROM hadist WHERE hadist_id = '".$_POST["hadist_id"]."'";
      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus.');</script>";      
      }
  } 

  include('view_hadist.php');
?>
