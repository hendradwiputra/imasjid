<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();
  
  if(isset($_POST["hadist_id"])) {

    $hadist_judul = isset($_POST['hadist_judul']) ? $_POST['hadist_judul'] : '';
    $hadist_isi1 = isset($_POST['hadist_isi1']) ? $_POST['hadist_isi1'] : '';
    $hadist_isi2 = isset($_POST['hadist_isi2']) ? $_POST['hadist_isi2'] : '';
    $hadist_isi3 = isset($_POST['hadist_isi3']) ? $_POST['hadist_isi3'] : '';
    $hadist_status = isset($_POST['hadist_status']) ? $_POST['hadist_status'] : '';
      
    $query = $pdo->prepare("INSERT INTO hadist(hadist_judul,hadist_isi1,
              hadist_isi2,hadist_isi3,hadist_status) VALUES(?,?,?,?,?)");
              
    $query->execute([$hadist_judul,$hadist_isi1,$hadist_isi2,$hadist_isi3,$hadist_status]); 

    if(!empty($query)) {
      echo "<script>alert('Data berhasil disimpan.');</script>"; 
    }  

  }  
    
  //--Load Table--//
  include('view_hadist.php');    

?>