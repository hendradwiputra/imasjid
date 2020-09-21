<?php
  include("../scripts/db_connection.php");
   
  if(isset($_POST["no"])) {  
  
    $sql = "UPDATE slides SET judul = '". $_POST['judul']. "',isi1 = '".$_POST['isi1']."',";
    $sql.= "isi2 = '". $_POST['isi2']. "',isi3 = '".$_POST['isi3']."',";
    $sql.= "isi4 = '". $_POST['isi4']. "' ";
    $sql.= "WHERE no='".$_POST['no']."'";
 
    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";
     
    } else {
      echo "Terjadi kegagalan dalam penyimpanan data : " . $conn->error;
    }
  }  

  $conn->close();
  
?>
