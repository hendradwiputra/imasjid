<?php
  include("../scripts/db_connection.php"); 
  
  if(isset($_POST["hadist_id"])) {

    $hadist_judul = mysqli_real_escape_string($conn, $_POST["hadist_judul"]); 
    $hadist_isi1 = mysqli_real_escape_string($conn, $_POST["hadist_isi1"]); 
    $hadist_isi2 = mysqli_real_escape_string($conn, $_POST["hadist_isi2"]); 
    $hadist_isi3 = mysqli_real_escape_string($conn, $_POST["hadist_isi3"]); 
    $hadist_status = mysqli_real_escape_string($conn, $_POST["hadist_status"]); 
      
    $sql = "
              INSERT INTO hadist (hadist_judul,hadist_isi1,hadist_isi2,hadist_isi3,hadist_status)
              VALUES ('$hadist_judul','$hadist_isi1','$hadist_isi2','$hadist_isi3','$hadist_status')
            ";    

    //--Query penyimpanan data ke database--//
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Data berhasil disimpan.');</script>";                   
    } else {
      echo "<script>alert('Terjadi kegagalan dalam penyimpanan data : " . $conn->error . ". Cek koneksi database.)";
    }   
  }  
    
  //--Load Table--//
  include('view_hadist.php');    

?>