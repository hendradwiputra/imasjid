<?php
  include("../scripts/db_connection.php");   

  if(isset($_POST["slide_id"])) {  
    $sql = "DELETE FROM slides WHERE slide_id = '".$_POST["slide_id"]."'";
      if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus.');</script>";      
      }
  } 

  include('view_slides.php');
?>
