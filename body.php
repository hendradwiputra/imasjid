<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 d-flex justify-content-<?php echo $header_position; ?>">
          <span class="logo">
            <p class="nama"><?php echo $nama_masjid; ?></p>
            <p class="alamat <?php if($header_position=="start") { echo "text-left";} else if($header_position=="center") { echo "text-center";} else { echo "text-right";} ?>"><?php echo $alamat_masjid; ?></p>
            <p class="tanggal <?php if($header_position=="start") { echo "text-left";} else if($header_position=="center") { echo "text-center";} else { echo "text-right";} ?>" id="penanggalan"></p>
          </span>
        </div>        
      </div>
</header>
<!-- ======= Header ======= -->

<!-- ======= Intro ======= -->
<section id="intro">  
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel" data-interval="<?php echo $durasi_slide; ?>">
        <ol class="carousel-indicators" id="introCarouselIndicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php include('./settings/display.php'); ?>
        </div>     
      </div>  
</section>
<!-- ======= Intro ======= -->

<!-- ======= Clock Section ======= -->
<section id="clock">
  <div class="intro-container">               
      <div class="left">
        <h2 id="jam"></h2>            
      </div> 
        
      <div class="right">
        <h3 id="timer"></h3>            
      </div> 
  </div>
</section>
<!-- Clock Section -->

<section id="text">
  <div class="intro-container">
    <div class="d-flex">               
      <div class="running-text">          
          <h3><marquee scrollamount="<?php echo $kecepatan_teks; ?>"><?php echo $running_teks; ?></marquee></h3>        
      </div>
    </div>
  </div>
</section>
<!-- Running Text Section -->

<!-- ======= Prayer Section ======= -->
<section id="prayer">
    <div class="intro-container">        
        <div class="d-flex bg1 justify-content-around">
            <div class="p-2"><h3 id="prayer1"></h3><h2 id="time1"></h2></div>
            <div class="p-2"><h3 id="prayer2"></h3><h2 id="time2"></h2></div>
            <div class="p-2"><h3 id="prayer3"></h3><h2 id="time3"></h2></div>
            <div class="p-2"><h3 id="prayer4"></h3><h2 id="time4"></h2></div>
            <div class="p-2"><h3 id="prayer5"></h3><h2 id="time5"></h2></div>
            <div class="p-2"><h3 id="prayer6"></h3><h2 id="time6"></h2></div>
        </div>
    </div>
</section>
<!-- ======= Prayer Section ======= -->

<!-- ======= Footer Section ======= -->
  <?php
    $tahun = date('Y');
    $create_date = "2020";
                
    if ($create_date == $tahun) {
		    $copyright_years = $create_date;
		} else {
		    $copyright_years = $create_date . " - " . $tahun;
		}
                               
  ?>

<section id="footer" class="d-none d-lg-block">
    <div class="intro-container clearfix">
      <div class="social-links float-left">
        <p>iMasjid versi 1.1 <i class="far fa-copyright"></i> <?php echo " $copyright_years $nama_masjid "  ?>  </p>        
      </div>
      
      <div class="social-links float-right">
        <p><a href="#" onClick="window.open('./settings');"><i class="fas fa-cog"></i> Settings</a></p>
      </div>

      <div class="social-links float-right">
        <p><i class="fas fa-phone-alt"></i> +62 811-6077-81</p>
      </div>
    </div>
</section>

<!-- ======= Footer Section ======= -->