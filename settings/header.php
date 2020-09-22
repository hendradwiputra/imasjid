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

<!-- Google Fonts -->
<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">-->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css"> 

<!-- Custom styles for this template -->
<link href="../assets/css/style2.css" rel="stylesheet">

<!-- Jquery -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>


<script>
$(document).ready(function() { 
     
    $('#uploadBtn').click(function() {  
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    alert('File sudah diupload');
                    $("#img").attr("src",response); 
                    $("img").show();
                }else{
                    alert('file not uploaded');
                }
            },
        });     
    });    

    // Slides Table
    $.ajax({
        url: 'view_slides.php',
        type: "POST",
        cache: false,
        success: function(dataResult){
            $('#table').html(dataResult); 
        }
    });

    $("#addSlide").click(function(){
        $('#insert_form')[0].reset();
        $("#slideModal").modal('show'); 

    });      

    $(document).on('click', '.edit_data', function() {         
        var slide_id = $(this).attr("id");
        $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{slide_id:slide_id},
            dataType:"json",
            success:function(data) {
                $('#slide_id').val(data.slide_id);
                $('#judul').val(data.judul);  
                $('#isi1').val(data.isi1);
                $('#isi2').val(data.isi2);
                $('#isi3').val(data.isi3);
                $('#isi4').val(data.isi4);
                $('#image_id').val(data.image_id);
                $('#slideModal').modal('show');
            }
        });        
    }); 

    $("#saveSlide").click(function(){
        
        var slide_id = $("#slide_id").val();
        var judul = $("#judul").val();        
        var isi1 = $("#isi1").val();
        var isi2 = $("#isi2").val(); 
        var isi3 = $("#isi3").val(); 
        var isi4 = $("#isi4").val();  
        
        
        $.ajax({
                url:'updateSlide.php',
                type:'POST',
                data:{
                    slide_id:slide_id,
                    judul:judul, 
                    isi1:isi1,
                    isi2:isi2,
                    isi3:isi3,
                    isi4:isi4
                   
                },
                success:function(data){
                    //alert(data);
                    $('#insert_form')[0].reset();                     
                    $('#slideModal').modal('hide');
                    $('#table').html(data);                    
                }
            });      
    });   
    
    //Settings Table    
    $("#saveSetting").click(function(){
        var setting_id = $("#setting_id").val();
        var nama_masjid = $("#nama_masjid").val();
        var alamat_masjid = $("#alamat_masjid").val();
        var running_teks = $("#running_teks").val();
        var kecepatan_teks = $("#kecepatan_teks").val();
        var durasi_slide = $("#durasi_slide").val();
        var koreksi_hijriah = $("#koreksi_hijriah").val();
        var durasi_adzan = $("#durasi_adzan").val();
        var iqomah_shubuh = $("#iqomah_shubuh").val();
        var iqomah_dzuhur = $("#iqomah_dzuhur").val();
        var iqomah_ashar = $("#iqomah_ashar").val();
        var iqomah_maghrib = $("#iqomah_maghrib").val();
        var iqomah_isya = $("#iqomah_isya").val();
        var garis_lintang = $("#garis_lintang").val();
        var garis_bujur = $("#garis_bujur").val();
        var zona_waktu = $("#zona_waktu").val();
        var metode_perhitungan = $("#metode_perhitungan").val();        
        
        $.ajax({
                url:'updateSetting.php',
                type:'POST',
                data:{
                    setting_id:setting_id,
                    nama_masjid:nama_masjid,
                    alamat_masjid:alamat_masjid,
                    running_teks:running_teks,
                    kecepatan_teks:kecepatan_teks,
                    durasi_slide:durasi_slide,
                    koreksi_hijriah:koreksi_hijriah,
                    durasi_adzan:durasi_adzan,
                    iqomah_shubuh:iqomah_shubuh,
                    iqomah_dzuhur:iqomah_dzuhur,
                    iqomah_ashar:iqomah_ashar,
                    iqomah_maghrib:iqomah_maghrib,
                    iqomah_isya:iqomah_isya,
                    garis_lintang:garis_lintang,
                    garis_bujur:garis_bujur,
                    zona_waktu:zona_waktu,
                    metode_perhitungan:metode_perhitungan
                },
                    success:function(data){
                        alert(data);                                       
                }
        });
    });        

});
</script>

</head>
<body>
   
