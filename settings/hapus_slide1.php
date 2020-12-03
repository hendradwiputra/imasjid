<?php
  
  include_once ("../scripts/db_connection.php");
  $pdo = pdo_connect_mysql();     

  if(isset($_POST["slide_id"])) { 

    // Cari nama foto berdasarkan slide_id
    $query2 = $pdo->prepare("SELECT foto FROM slides1 WHERE slide_id=?");
    $query2->execute([$_POST["slide_id"]]); 
  	$result = $query2->fetchAll(PDO::FETCH_ASSOC);
		
	  foreach ($result as $row) { 
      $foto = $row['foto'];
    }
    
    // Default background tidak boleh dihapus
    if ($foto != "background.jpg") {
        $location = "../assets/images/slide1/"; 
        $filename = $location.$foto;
        if (file_exists($filename)) {
            unlink($filename);
        } 
    }
    
    // Hapus record dari database
    $query = $pdo->prepare("DELETE FROM slides1 WHERE slide_id=?");
    $query->execute([$_POST["slide_id"]]);

    if(!empty($query)) {
      echo "<script>alert('Data berhasil dihapus.');</script>"; 
    } 
    
  } 

  include('view_slides1.php');
?>
