<?php 

 	include("../scripts/db_connection.php");

	$sql = "SELECT * FROM slides";
	$result = $conn->query($sql);
	
	$count = 1;
	if ($result->num_rows > 0) {
		foreach ($result as $data) {	
                  $slide_id = $data['slide_id'];
			$judul = $data['judul'];
			$isi1 = $data['isi1'];
			$isi2 = $data['isi2'];
			$isi3 = $data['isi3'];
			$isi4 = $data['isi4'];
			$foto = $data['foto'];			
  	?>
			<tr>
				<td rowspan="4"><?php echo $count; ?></td>;	
      			<td rowspan="4"><?php echo $judul; ?></td>;
      			<td><?php echo $isi1; ?></td>;
      			<td rowspan="4"><img src='../assets/images/<?php echo $foto; ?>' width='120px' height='80px'></td>;
      			<td rowspan="4"></td>;
      			<td rowspan="4"><input type='button' name='edit' id='<?php echo $slide_id; ?>' value='Edit' class='btn btn-success btn-sm edit_data'></td>;
      			<td rowspan="4"><input type='button' name='hapus' id='<?php echo $slide_id; ?>' value='Hapus' class='btn btn-outline-success btn-sm hapus_data'></td>;
      		</tr>
      		<tr>
      			<td><?php echo $isi2; ?></td>	
      		</tr>
      		<tr>
      			<td><?php echo $isi3; ?></td>	
      		</tr>
      		<tr>
      			<td><?php echo $isi4; ?></td>	
      		</tr>      		
      		
    <?php
			$count++;
		}				
	}	
?>

