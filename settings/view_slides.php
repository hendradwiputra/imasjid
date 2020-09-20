<?php 

 	include("../scripts/db_connection.php");

	$sql = "SELECT t1.name,t2.no,t2.slide,t2.judul,t2.isi FROM images t1 INNER JOIN slides t2 ON t1.id = t2.image_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		foreach ($result as $data) { 			
			  $no = $data['no'];
			  $slide = $data['slide'];
			  $judul = $data['judul'];
			  $isi = $data['isi'];
			  $image = $data['name'];			
  			
    		echo "<tr>";
      	echo "<td>$slide</td>";
      	echo "<td>$judul</td>";
      	echo "<td>$isi</td>";
      	echo "<td><img src='../assets/images/$image' width='120px' height='80px'></td>";
      	echo "<td></td>";
      	echo "<td><input type='button' name='edit' id='$no' value='Edit' class='btn btn-success btn-sm edit_data'></td>";
      	echo "<td><input type='button' name='hapus' id='$no' value='Hapus' class='btn btn-outline-success btn-sm hapus_data'></td>";
      	echo "</tr>";
    }				
	}	
 
?>
