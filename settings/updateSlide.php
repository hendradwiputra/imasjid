<?php
  include("../scripts/db_connection.php"); 
  
  $judul = mysqli_real_escape_string($conn, $_POST["judul"]); 
  $isi1 = mysqli_real_escape_string($conn, $_POST["isi1"]); 
  $isi2 = mysqli_real_escape_string($conn, $_POST["isi2"]); 
  $isi3 = mysqli_real_escape_string($conn, $_POST["isi3"]); 
  $isi4 = mysqli_real_escape_string($conn, $_POST["isi4"]); 
  $foto = $_FILES['foto']['name'];
  $size   = $_FILES['foto']['size'];

  $location = "../assets/images/".$foto;
  $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
  $valid_extensions = array("jpg","jpeg","png");
  
  if(isset($_POST["slide_id"])) {   

    if(!in_array(strtolower($imageFileType),$valid_extensions) ) {
      echo "<script>alert('File harus dalam format JPG, JPEG atau PNG');</script>";
    } else {
      if ($size > 1024000) {
        echo "<script>alert('Ukuran file harus di bawah 1 MB');</script>";
      } else {
          //--Proses simpan data--//
          //--Upload foto ke folder--//
          if(move_uploaded_file($_FILES['foto']['tmp_name'],$location)) {
            //--Proses penyimpanan data ke database--//
            if($_POST["slide_id"] != '') {
              
              $sql = "UPDATE slides SET judul = '$judul',";
              $sql.= "isi1 = '$isi1',isi2 = '$isi2',";
              $sql.= "isi3 = '$isi3',isi4 = '$isi4',";
              $sql.= "foto = '$foto'";
              $sql.= "WHERE slide_id = '".$_POST['slide_id']."'";
            } else {
                //Jika data sebelum nya tidak ada, buat data baru--//
                $sql = "INSERT INTO slides (judul,isi1,isi2,isi3,isi4,foto)";
                $sql.= "VALUES ('$judul','$isi1','$isi2','$isi3','$isi4','$foto')";
            }   
            //--Query penyimpanan data ke database--//
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Data berhasil disimpan.');</script>";                   
            } else {
                echo "<script>alert('Terjadi kegagalan dalam penyimpanan data : " . $conn->error . ". Cek koneksi database.)";
            }            
          } else {
            echo "<script>alert('Proses upload foto gagal. Periksa lokasi penyimpanan.');</script>";
          }
      }
    }
  }
  //--Load Table--//
  include('view_slides.php'); 
    

?>