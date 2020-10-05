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
<link href="../assets/css/style.css" rel="stylesheet">

<!-- Jquery -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>


<script>
$(document).ready(function() { 

    //---Tabel Hadist---//
    $.ajax({
        url: 'view_hadist.php',
        type: "POST",
        cache: false,
        success: function(dataResult){
            $('#table_hadist').html(dataResult); 
        }
    });

    $("#cancel_hadist").click(function(){
        $('#hadist_form')[0].reset();
    });

    $("#add_hadist").click(function(){
        $("#hadist-modal-title").html("Tambah Hadist");
        $('#hadist_form')[0].reset();        
        $("#hadistModal").modal('show');
        $("#hadist-id").html(""); 
        $('#save_hadist').val("Simpan");
    });   

    $(document).on('click', '.hapus_hadist', function() {         
        var hadist_id = $(this).attr("id");        
        
        if(confirm("Antum yakin akan menghapus hadist ini ?")) {        
            $.ajax({
                url:"hapusHadist.php",
                method:"POST",
                data:{hadist_id:hadist_id},
                success:function(data) {   
                    $('#table_hadist').html(data);
                }
            })
        } else {
            return false;
        }
    });  

    $(document).on('click', '.edit_hadist', function() {   
        $("#hadist-modal-title").html("Edit Hadist");      
        var hadist_id = $(this).attr("id");     
       
        $.ajax({
            url:"get_hadist.php",
            method:"POST",
            data:{hadist_id:hadist_id},
            dataType:"json",
            success:function(data) {
                $("#hadist-id").html("Hadist id : " + hadist_id);
                $('#hadist_id').val(data.hadist_id);
                $('#hadist_judul').val(data.hadist_judul);  
                $('#hadist_isi1').val(data.hadist_isi1);
                $('#hadist_isi2').val(data.hadist_isi2);
                $('#hadist_isi3').val(data.hadist_isi3);                
                $('#hadistModal').modal('show');                
                $('#save_hadist').val("Update");                
            }
        });        
    });     

    $("#save_hadist").click(function(){
        var data = $("#hadist_form").serialize();
        
        if($('#save_hadist').val() == "Simpan")  { 
            $.ajax({
                url:'insertHadist.php',
                type:'POST',
                data:data,
                success:function(response){                   
                    $('#hadistModal').modal('hide');
                    $('#table_hadist').html(response);                    
                }
            }); 
        } else {
            $.ajax({
                url:'updateHadist.php',
                type:'POST',
                data:data,
                success:function(response){                     
                    $('#hadistModal').modal('hide');
                    $('#table_hadist').html(response);                  
                }
            });  
        }  
    });   
    
    //---Tabel Slides---//
    $.ajax({
        url: 'view_slides.php',
        type: "POST",
        cache: false,
        success: function(dataResult){
            $('#table_slide').html(dataResult); 
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
        $('#images').attr("src","../assets/images/background.jpg");
        $('#foto').attr("");
        $("#slideModal").modal('show');
        $("#slide-id").html(""); 
        $('#filename').html("Default Background");
        $('#foto').hide();
        $('#save_slide').val("Simpan");
    });     

    $(document).on('click', '.hapus_slide', function() {         
        var slide_id = $(this).attr("id");        
        
        if(confirm("Antum yakin akan menghapus slide ini ?")) {        
            $.ajax({
                url:"hapusSlide.php",
                method:"POST",
                data:{slide_id:slide_id},
                success:function(data) {   
                    $('#table_slide').html(data);
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
            url:"get_slide.php",
            method:"POST",
            data:{slide_id:slide_id},
            dataType:"json",
            success:function(data) {
                $("#slide-id").html("Slide id : " + slide_id);
                $('#slide_id').val(data.slide_id);
                $('#judul').val(data.judul);  
                $('#isi1').val(data.isi1);
                $('#isi2').val(data.isi2);
                $('#isi3').val(data.isi3);
                $('#isi4').val(data.isi4);
                $('#slide_status').val(data.slide_status);                    
                $('#images').attr("src","../assets/images/" + data.foto);
                $('#filename').html(data.foto);
                $('#tmp_filename').val(data.foto);
                $('#slideModal').modal('show');
                $('#checkBox-form').show();  
                $('#foto').hide();
                $('#save_slide').val("Update");                
            }
        });        
    });     

    $("#save_slide").click(function(){  
        //https://www.mynotescode.com/cara-membuat-crud-plus-upload-gambar-dengan-php-ajax-bootstrap/ 
        var data = new FormData();    

        data.append('slide_id', $("#slide_id").val());
        data.append('judul', $("#judul").val());
        data.append('isi1', $("#isi1").val());
        data.append('isi2', $("#isi2").val());
        data.append('isi3', $("#isi3").val());
        data.append('isi4', $("#isi4").val());
        data.append('slide_status', $("#slide_status").val());
        data.append('foto', $("#foto")[0].files[0]);
        data.append('tmp_filename', $("#tmp_filename").val());
        data.append('checkBoxValue', $("#checkBoxValue").val());

        if($('#save_slide').val() == "Simpan")  {  
            $.ajax({
                url:'insertSlide.php',
                type:'POST',
                contentType: false,
                processData: false,
                data:data,
                success:function(response){
                    $('#slide_form')[0].reset();                     
                    $('#slideModal').modal('hide');
                    $('#table_slide').html(response);                    
                }
            });    
        } else {
            $.ajax({
                url:'updateSlide.php',
                type:'POST',
                contentType: false,
                processData: false,
                data:data,
                success:function(response){
                    $('#slide_form')[0].reset();                     
                    $('#slideModal').modal('hide');
                    $('#table_slide').html(response);                    
                }
            });  
        }       
    });   
    
    //---Tabel Settings---//    
    $("#saveSetting").click(function(){
        var data = $("#setting_form").serialize();
                
        $.ajax({
                url:'updateSetting.php',
                type:'POST',
                data:data,
                    success:function(data){
                        alert(data);                                       
                }
        });
    });        

});
</script>

</head>
<body>