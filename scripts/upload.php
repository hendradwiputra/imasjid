<?php
  //https://makitweb.com/make-bootstrap-modal-file-upload-preview-jquery-ajax/
  include("db_connection.php");

  //if(isset($_POST['uploadBtn'])) {
    $name = $_FILES['file']['name'];
    $target_file = '../assets/images/'.$name;

    // file extension
    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    // Valid image extensions
    $image_ext = array("jpg","png","jpeg","gif");
  
    $response = 0;
    if (in_array($file_extension,$image_ext)) {
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
      $image = 'data:image/'.$file_extension.';base64,'.$image_base64;

      // Insert record
      $sql = "insert into images (name,image) values('".$name."','".$image."')";           
      $result = $conn->query($sql);      
      
      if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
        $response = $target_file;
      }
    }
    echo $response;

    // -----------
  



  //}

 
  ?>