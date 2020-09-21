<?php
  include("../scripts/db_connection.php");
   
  $judul = mysqli_real_escape_string($conn, $_POST["judul"]); 
  $isi1 = mysqli_real_escape_string($conn, $_POST["isi1"]); 
  $isi2 = mysqli_real_escape_string($conn, $_POST["isi2"]); 
  $isi3 = mysqli_real_escape_string($conn, $_POST["isi3"]); 
  $isi4 = mysqli_real_escape_string($conn, $_POST["isi4"]); 
  

  if(isset($_POST["slide_id"])) {  

    if($_POST["slide_id"] != '') {

      $sql = "UPDATE slides SET judul = '$judul',";
      $sql.= "isi1 = '$isi1',isi2 = '$isi2',";
      $sql.= "isi3 = '$isi3',isi4 = '$isi4'";
      //$sql.= "filename = '$filename'";
      $sql.= "WHERE slide_id = '".$_POST['slide_id']."'";

    } else {

      $sql = "INSERT INTO slides (judul,isi1,isi2,isi3,isi4)";
      $sql.= "VALUES ('$judul','$isi1','$isi2','$isi3','$isi4')";

    }           
 
    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil disimpan";     
    } else {
      echo "Terjadi kegagalan dalam penyimpanan data : " . $conn->error;
    }
  } 


  // ---
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
      $image_name = $data['filename'];            
  ?>
        <tr>
          <td rowspan="4"><?php echo $count; ?></td>; 
          <td rowspan="4"><?php echo $judul; ?></td>;
          <td><?php echo $isi1; ?></td>;
          <td rowspan="4"><img src='../assets/images/<?php echo $filename; ?>' width='120px' height='80px'></td>;
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