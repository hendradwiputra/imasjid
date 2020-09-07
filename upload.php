<?php 
    
    include("db_connection.php");

    if(isset($_POST['upload'])){
        $filename = $_FILES['file']['filename'];
        $target_dir = "./images/upload/";
        $target_file = $target_dir . basename($_FILES["file"]["filename"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $query = "insert into images (filename,image) values('".$filename."','".$image."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'./images/upload/'.$name);

        }
    
    }
?>