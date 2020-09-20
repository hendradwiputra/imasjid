<?php
  include("../scripts/db_connection.php");

  $no = $_POST['no'];
  if(isset($_POST["no"])) {  

    $sql = "UPDATE slides SET judul = '". $_POST['judul']. "',isi = '".$_POST['isi']."' ";
    $sql.= "WHERE no='$no'";
 
    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";
    } else {
      echo "Terjadi kegagalan dalam penyimpanan data : " . $conn->error;
    }
  }

  $conn->close();
  
?>