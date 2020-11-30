<?php 

	include_once ("../scripts/db_connection.php");

	$pdo = pdo_connect_mysql();
	$query = $pdo->prepare('SELECT * FROM slides1');
	$query->execute();  
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>    
<table id="table_slide1" class="table table-sm table-responsive table-condensed">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th width="10%">Gambar</th>
            <th width="30%">Judul</th>
            <th width="45%">Isi</th>
            <th width="5%">Aktif</th>
            <th width="10%" colspan="2"></th>
        </tr>
      </thead>
    <tbody>      
<?php 
	$count = 1;
	
	foreach ($result as $row) {	
			$slide_id = $row['slide_id'];
			$foto = $row['foto'];
			$judul = $row['judul'];
			$isi1 = $row['isi1'];
			$isi2 = $row['isi2'];
			$isi3 = $row['isi3'];			
            $slide_status = $row['slide_status'];                  			
?>
			<tr>
				<td rowspan="3"><?php echo $count ."."; ?></td>	
				<td rowspan="3"><img src='../assets/images/slide1/<?php echo $foto; ?>' width='120px' height='80px' class="img border border-light"></td>				
      	      	<td rowspan="3"><?php echo $judul; ?></td>
      	      	<td><?php echo $isi1; ?></td>      	      	
      	      	<td rowspan="3" class="text-justify"><?php if($slide_status==0) { echo "<i class='fas fa-times'></i>";} else { echo "<i class='far fa-check-square'></i>"; } ?></td>
      			<td rowspan="3"><input type='button' name='edit' id='<?php echo $slide_id; ?>' value='Edit' class='btn btn-sm btn-outline-pastel edit_slide'></td>
      			<td rowspan="3"><input type='button' name='hapus' id='<?php echo $slide_id; ?>' value='Hapus' class='btn btn-sm btn-outline-pastel hapus_slide'></td>
      		</tr>
      		<tr>
      			<td><?php echo $isi2; ?></td>	
      		</tr>
      		<tr>
      			<td><?php echo $isi3; ?></td>	
      		</tr>     		    		
      		
<?php
	$count++;
	}				

?>
    </tbody>
</table> 	


