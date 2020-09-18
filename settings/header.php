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

<!-- Jquery -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }
            
        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }

        label {
            font-weight: 700;
        }

        .image-preview{
            display:none;
            width : 195px;
            height : 130px;
        }

        .image-slide-preview {
            width: 195px;
            height: 130px;
        }

        .card-body {
            height: 90%;
        }

        .card-header {
            background: rgba(120, 175, 159, 0.3);
            color: #007070;
            font-weight: 500;
        }

        .list-group-item.active {  
            background-color: #007070;
            border-color: #78af9f;
        }
        
    </style>


<script>
  $(document).ready(function() { 

    $(document).on('click', '.edit_data', function() { 
        var no = $("#no").val();
        alert('Edit Btn' + no);
    });

    $("#slideBtn").click(function(){
      $("#slideModal").modal();       
    });       

    $('#uploadBtn').click(function() {    
              
      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

      $.ajax({
          url: '../scripts/upload.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
              if (response != 0) {
                  alert('File berhasil diupload');
              }else{
                  alert('file not uploaded');
              }
          }
      });                
    });
    
    $("#simpan").click(function(){

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
                url:'../scripts/update.php',
                type:'POST',
                data:{
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
                        $("#NamaMasjid").text('' + nama_masjid);
                        $("#AlamatMasjid").text('' + alamat_masjid);
                        $("#RunningTeks").text('' + running_teks);
                        $("#KoreksiHijriah").text('' + koreksi_hijriah);
                        $("#KecepatanTeks").text('' + kecepatan_teks);                    
                        //$('#editModal').modal('hide');                    
                }
        });    

    });        

  });
</script>

</head>
<body>
   