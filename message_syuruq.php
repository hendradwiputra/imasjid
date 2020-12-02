<?php 
    
    include('./scripts/view_settings.php'); 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Message</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome / ionicons-->
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/fontawesome.css"> 
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/regular.css">
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/solid.css">  
  
  <!-- Template Main CSS File -->
  <link href="./assets/css/timer.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url(./assets/images/background/timer-bg.jpg)">
    
      <div class="container-fluid">
        <div class="row justify-content-center">

          <div class="col-xl-12 col-lg-12 text-center">
            <h1><?php echo $teks_syuruq1 ?></h1>  
          </div>
        </div>
        <br>
        <div class="row icon-boxes2">
          <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
            <div class="icon-box2">            
                <h4 class="description"><?php echo $teks_syuruq2 ?></h4>
            </div>
          </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
          <div class="col-md-1">            
            <img src="./assets/images/background/praying.png" width="200px" height="180px">
          </div>          
        </div>

      </div>

    </section>
    <!-- ======= Hero Section ======= -->

</body>
<script>
        
        var url = "<?php echo $_SERVER['HTTP_HOST'] ?>";

        var timer = setTimeout(function() {
            window.location="http://" + url + "/imasjid"
        }, 600000);

</script>
</html>
