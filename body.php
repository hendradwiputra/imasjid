<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
      <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11 col-md-11 d-flex align-items-center">
          <span class="logo mr-auto">
            <p class="nama"><?php echo $nama_masjid; ?></p>
            <p class="alamat"><?php echo $alamat_masjid; ?></p>
            <p class="tanggal" id="penanggalan"></p>
          </span>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>              
              <li><a href="#" onClick="window.open('./settings');"><i class="fas fa-cog"></i></a></li>
            </ul>
          </nav><!-- .nav-menu -->

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

<!-- ======= Running Text Section ======= -->
<section id="text">
  <div class="intro-container">               
      <div class="running-text">          
          <h3><marquee scrollamount="<?php echo $kecepatan_teks; ?>"><?php echo $running_teks; ?></marquee></h3>        
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
        <p><i class="fas fa-phone-alt"></i> +62 811-6077-81</p>
      </div>
    </div>
</section>

<!-- ======= Footer Section ======= -->