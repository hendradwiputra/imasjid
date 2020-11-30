<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iMasjid - Konfigurasi</title>
</head>

<!-- FontAwesome -->
<link rel="stylesheet" href="../assets/vendor/fontawesome/css/fontawesome.css"> 
<link rel="stylesheet" href="../assets/vendor/fontawesome/css/regular.css">
<link rel="stylesheet" href="../assets/vendor/fontawesome/css/solid.css">
<link rel="stylesheet" href="../assets/vendor/fontawesome/css/brands.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css"> 

<!-- Custom styles for this template -->
<link rel="stylesheet" href="../assets/css/dashboard.css">

<!-- Simplelightbox -->
<link rel="stylesheet" href="../assets/vendor/simplelightbox/simple-lightbox.css">

<!-- Simplelightbox -->
<script src="../assets/vendor/simplelightbox/simple-lightbox.js"></script>

<!-- Jquery -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() { 

    /* Slides1 */
    $.ajax({
        url: 'view_slides1.php',
        type: "POST",
        cache: false,
        success: function(dataResult){
            $('#table_slide1').html(dataResult); 
        }
    });

    $("#cancel_slide").click(function(){
        $('#slide_form')[0].reset();
        $('#images').attr("src","");
        $('#foto').attr(""); 
    });
    
    $("#add_slide").click(function(){
        $("#slide-modal-title").html("Tambah Slide");
        $('#slide_form')[0].reset();
        $('#images').attr("src","../assets/images/slide1/background.jpg");
        $('#foto').attr("");
        $("#slide1_modal").modal('show');
        $("#slide-id").html(""); 
        $('#filename').html("Default Background");
        $('#foto').hide();
        $('#save_slide').val("Simpan");
        $("#save_slide").attr("disabled", false);
    });     

    $(document).on('click', '.hapus_slide', function() {         
        var slide_id = $(this).attr("id");        
        
        if(confirm("Anda yakin akan menghapus slide ini ?")) {        
            $.ajax({
                url:"hapus_slide1.php",
                method:"POST",
                data:{slide_id:slide_id},
                success:function(data) {   
                    $('#table_slide1').html(data);
                }
            })
        } else {
            return false;
        }
    });    
    
    $(document).on('click', '.edit_slide', function() {   
        $("#slide-modal-title").html("Edit Slide");      
        var slide_id = $(this).attr("id");   
        var data = new FormData();        
       
        $.ajax({
            url:"get_slide1.php",
            method:"POST",
            data:{slide_id:slide_id},
            dataType:"json",
            success:function(data) {
                
                $('#slide_id').val(data.slide_id);
                $('#judul').val(data.judul);  
                $('#isi1').val(data.isi1);
                $('#isi2').val(data.isi2);
                $('#isi3').val(data.isi3);                
                $('#slide_status').val(data.slide_status);              
                $('#images').attr("src","../assets/images/slide1/" + data.foto);
                $('#filename').html(data.foto);
                $('#tmp_filename').val(data.foto);
                $('#slide1_modal').modal('show');
                $('#checkBox-form').show();  
                $('#foto').hide();
                $('#save_slide').val("Update");    
                $("#save_slide").attr("disabled", false);            
            }
        });        
    });     

    $("#save_slide").click(function(){  
        
        var data = new FormData();    

        data.append('slide_id', $("#slide_id").val());
        data.append('judul', $("#judul").val());
        data.append('isi1', $("#isi1").val());
        data.append('isi2', $("#isi2").val());
        data.append('isi3', $("#isi3").val());       
        data.append('slide_status', $("#slide_status").val());
        data.append('foto', $("#foto")[0].files[0]);
        data.append('tmp_filename', $("#tmp_filename").val());
        data.append('checkBoxValue', $("#checkBoxValue").val());

        if($('#save_slide').val() == "Simpan")  {  
            $.ajax({
                url:'insert_slide1.php',
                type:'POST',
                contentType: false,
                processData: false,
                data:data,
                success:function(response){
                    $('#slide_form')[0].reset();                     
                    $('#slide1_modal').modal('hide');
                    $('#table_slide1').html(response);                    
                }
            });    
        } else {
            $.ajax({
                url:'update_slide1.php',
                type:'POST',
                contentType: false,
                processData: false,
                data:data,
                success:function(response){
                    $('#slide_form')[0].reset();                     
                    $('#slide1_modal').modal('hide');
                    $('#table_slide1').html(response);                    
                }
            });  
        }       
    });   

    /* Slides2 */
    $.ajax({
        url: 'view_slides2.php',
        type: "POST",
        cache: false,
        success: function(dataResult){
            $('#table_slide2').html(dataResult); 
        }
    });

    $("#cancel_slide2").click(function(){
        $('#slide2_form')[0].reset();
    });

    $("#add_slide2").click(function(){
        $("#slide2-modal-title").html("Tambah Slide");
        $('#slide2_form')[0].reset();        
        $("#slide2_modal").modal('show');
        $("#slide2-id").html(""); 
        $('#save_slide2').val("Simpan");
    });   

    $(document).on('click', '.hapus_slide2', function() {         
        var slide2_id = $(this).attr("id");        
        
        if(confirm("Anda yakin akan menghapus slide ini ?")) {        
            $.ajax({
                url:"hapus_slide2.php",
                method:"POST",
                data:{slide2_id:slide2_id},
                success:function(data) {   
                    $('#table_slide2').html(data);
                }
            })
        } else {
            return false;
        }
    });  

    $(document).on('click', '.edit_slide2', function() {   
        $("#slide2-modal-title").html("Edit Slide");      
        var slide2_id = $(this).attr("id");     
       
        $.ajax({
            url:"get_slide2.php",
            method:"POST",
            data:{slide2_id:slide2_id},
            dataType:"json",
            success:function(data) {
                $("#slide2-id").html("slide2 id : " + slide2_id);
                $('#slide2_id').val(data.slide2_id);
                $('#slide2_judul').val(data.slide2_judul);  
                $('#slide2_isi1').val(data.slide2_isi1);
                $('#slide2_isi2').val(data.slide2_isi2);
                $('#slide2_isi3').val(data.slide2_isi3);  
                $('#slide2_status').val(data.slide2_status);                                
                $('#slide2_modal').modal('show');                
                $('#save_slide2').val("Update");                
            }
        });        
    });     

    $("#save_slide2").click(function(){
        var data = $("#slide2_form").serialize();
        
        if($('#save_slide2').val() == "Simpan")  { 
            $.ajax({
                url:'insert_slide2.php',
                type:'POST',
                data:data,
                success:function(response){                   
                    $('#slide2_modal').modal('hide');
                    $('#table_slide2').html(response);                    
                }
            }); 
        } else {
            $.ajax({
                url:'update_slide2.php',
                type:'POST',
                data:data,
                success:function(response){                     
                    $('#slide2_modal').modal('hide');
                    $('#table_slide2').html(response);                  
                }
            });  
        }  
    });   
       
    /* Tabel Settings */    
    $("#save_setting").click(function(){
        var data = $("#setting_form").serialize();
                
        $.ajax({
                url:'update_setting.php',
                type:'POST',
                data:data,
                    success:function(data){
                        alert(data);                                       
                }
        });
    });     

    /* Upload Image */   

    $("#add_image").click(function(){     
        $('#upload_form')[0].reset();  
        $("#upload_modal").modal('show');
        $('#image_slide2').attr("src","");
        $('#foto_slide2').attr("");
        $("#upload_image").attr("disabled", true);
    });  

    $("#cancel_upload").click(function(){
        $('#upload_form')[0].reset(); 
        $('#image_slide2').attr("src","");
        $('#foto_slide2').attr("test"); 
    });

    $("#upload_image").click(function(){  
        
        var data = new FormData();    

        data.append('image_id', $("#image_id").val());        
        data.append('foto_slide2', $("#foto_slide2")[0].files[0]);
       
        $.ajax({
                url:'upload_image.php',
                type:'POST',
                contentType: false,
                processData: false,
                data:data,
                success:function(response){
                    $('#upload_form')[0].reset();                     
                    $('#upload_modal').modal('hide');
                    $('#table_images').html(response);                    
                }
        });    
            
    });   

    $(document).on('click', '.hapus_image2', function() {         
        var foto_slide2 = $(this).attr("id");        
        
        if(confirm("Anda yakin akan menghapus gambar ini ?")) {        
            $.ajax({
                url:"hapus_image2.php",
                method:"POST",
                data:{foto_slide2:foto_slide2},
                success:function(data) {   
                    $('#table_images').html(data);
                }
            })
        } else {
            return false;
        }
    });

});
</script>

</head>
<body>