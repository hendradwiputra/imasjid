<?php 

	include_once ("../scripts/db_connection.php");

	$pdo = pdo_connect_mysql();
	$query = $pdo->prepare('SELECT * FROM slides2');
	$query->execute();  
	$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>    
    <table id="table_slide2" class="table table-sm table-responsive table-condensed">
      <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th width="30%">Judul</th>
			<th width="55%">Isi</th>
			<th width="5%">Aktif</th>
            <th width="10%" colspan="2"></th>
        </tr>
      </thead>
      <tbody>      
	<?php 
	$count = 1;
	
	foreach ($result as $row) {	
            $slide2_id 		= $row['slide2_id'];
			$slide2_judul 	= $row['slide2_judul'];
			$slide2_isi1 	= $row['slide2_isi1'];
			$slide2_isi2 	= $row['slide2_isi2'];
			$slide2_isi3 	= $row['slide2_isi3'];  
			$slide2_status 	= $row['slide2_status'];                  			
	?>
			<tr>
			    <td rowspan="3"><?php echo $count ."."; ?></td>	
      		    <td rowspan="3"><?php echo $slide2_judul; ?></td>
				<td><?php echo $slide2_isi1; ?></td>  				  
				<td rowspan="3" class="text-justify"><?php if ($slide2_status==0) { echo "<i class='fas fa-times'></i>"; } else { echo "<i class='far fa-check-square'></i>"; } ?></td>    			
      		    <td rowspan="3"><input type='button' name='edit' id='<?php echo $slide2_id; ?>' value='Edit' class='btn btn-sm btn-outline-pastel edit_slide2'></td>
      		    <td rowspan="3"><input type='button' name='hapus' id='<?php echo $slide2_id; ?>' value='Hapus' class='btn btn-sm btn-outline-pastel btn-sm hapus_slide2'></td>
      		</tr>
      		<tr>
      			<td><?php echo $slide2_isi2; ?></td>	
      		</tr>
      		<tr>
      			<td><?php echo $slide2_isi3; ?></td>	
      		</tr>     		   		
      		
	<?php
		$count++;
						
	}
	?>
      </tbody>
    </table> 	


