<?php 

	include_once ("../scripts/db_connection.php");

	$pdo = pdo_connect_mysql();
	$query = $pdo->prepare('SELECT * FROM slides');
	$query->execute();  
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>    
<table id="table_slide" class="table table-sm table-responsive table-condensed">
    <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aktif</th>
            <th colspan="2"></th>
        </tr>
      </thead>
    <tbody>      
<?php 
	$count = 1;
	
	foreach ($result as $row) {	
            $slide_id = $row['slide_id'];
			$judul = $row['judul'];
			$isi1 = $row['isi1'];
			$isi2 = $row['isi2'];
			$isi3 = $row['isi3'];
			$isi4 = $row['isi4'];
			$foto = $row['foto'];
            $slide_status = $row['slide_status'];                  			
?>
			<tr>
				<td rowspan="4"><?php echo $count ."."; ?></td>	
      	      	<td rowspan="4"><?php echo $judul; ?></td>
      	      	<td><?php echo $isi1; ?></td>
      	      	<td rowspan="4"><img src='../assets/images/<?php echo $foto; ?>' width='120px' height='80px' class="img border border-secondary"></td>
      	      	<td rowspan="4" class="text-justify"><?php if($slide_status==0) { echo "<i class='fas fa-times'></i>";} else { echo "<i class='far fa-check-circle'></i>"; } ?></td>
      			<td rowspan="4"><input type='button' name='edit' id='<?php echo $slide_id; ?>' value='Edit' class='btn btn-primary btn-sm edit_slide'></td>
      			<td rowspan="4"><input type='button' name='hapus' id='<?php echo $slide_id; ?>' value='Hapus' class='btn btn-outline-primary btn-sm hapus_slide'></td>
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

?>
    </tbody>
</table> 	


