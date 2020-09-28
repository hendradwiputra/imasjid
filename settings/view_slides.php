<?php 

 	include("../scripts/db_connection.php");

	$sql = "SELECT * FROM slides";
	$result = $conn->query($sql);
?>    
      <table id="table" class="table table-sm table-responsive table-borderless">
      <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aktif</th>
            <th colspan="2">#</th>
        </tr>
      </thead>
      <tbody>      
<?php 
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
                  $slide_status = $data['slide_status'];                  			
?>
			<tr>
			<td rowspan="4"><?php echo $count; ?></td>;	
      			<td rowspan="4"><?php echo $judul; ?></td>;
      			<td><?php echo $isi1; ?></td>;
      			<td rowspan="4"><img src='../assets/images/<?php echo $foto; ?>' width='120px' height='80px' class="img border border-dark"></td>;
      			<td rowspan="4" class="text-justify"><?php if($slide_status==0) { echo "<i class='fas fa-times'></i>";} else { echo "<i class='far fa-check-circle'></i>"; } ?></td>;
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
      </tbody>
      </table> 	


