<?php 

 	include("../scripts/db_connection.php");

	$sql = "SELECT * FROM hadist";
	$result = $conn->query($sql);
?>    
      <table id="table_hadist" class="table table-sm table-responsive table-condensed">
      <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>      
<?php 
	$count = 1;
	if ($result->num_rows > 0) {
		foreach ($result as $data) {	
                  $hadist_id = $data['hadist_id'];
			$hadist_judul = $data['hadist_judul'];
			$hadist_isi1 = $data['hadist_isi1'];
			$hadist_isi2 = $data['hadist_isi2'];
                  $hadist_isi3 = $data['hadist_isi3'];                 			
?>
			<tr>
			    <td rowspan="3"><?php echo $count ."."; ?></td>	
      		    <td rowspan="3"><?php echo $hadist_judul; ?></td>
      		    <td><?php echo $hadist_isi1; ?></td>      			
      		    <td rowspan="3"><input type='button' name='edit' id='<?php echo $hadist_id; ?>' value='Edit' class='btn btn-primary btn-sm edit_hadist'></td>
      		    <td rowspan="3"><input type='button' name='hapus' id='<?php echo $hadist_id; ?>' value='Hapus' class='btn btn-outline-primary btn-sm hapus_hadist'></td>
      		</tr>
      		<tr>
      			<td><?php echo $hadist_isi2; ?></td>	
      		</tr>
      		<tr>
      			<td><?php echo $hadist_isi3; ?></td>	
      		</tr>     		   		
      		
<?php
			$count++;
		}				
	}
?>
      </tbody>
      </table> 	


