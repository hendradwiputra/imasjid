<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
      <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11 col-md-11 d-flex align-items-center">
          <span class="logo mr-auto">
            <p class="nama"><?php echo $nama_masjid; ?></p>
            <p class="alamat"><?php echo $alamat_masjid; ?></p>
            <p class="tanggal" id="penanggalan">[KALENDER]</p>
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
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel" data-interval="<?php echo $durasi_slide; ?>">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <?php include('./settings/slideshow.php'); ?>
        </div>     
    </div>
</section>
<!-- ======= Intro ======= -->

<!-- ======= Clock Section ======= -->
<section id="clock">
  <div class="intro-container">               
      <div class="left">
        <h2 id="jam">[CLOCK]</h2>            
      </div>    
      <div class="right">
        <h3 id="timer">[TIMER]</h3>            
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
            <div class="p-2"><h3 id="prayer1"></h3><h2 id="shubuh"></h2></div>
            <div class="p-2"><h3 id="prayer2"></h3><h2 id="syuruq"></h2></div>
            <div class="p-2"><h3 id="prayer3"></h3><h2 id="dzuhur"></h2></div>
            <div class="p-2"><h3 id="prayer4"></h3><h2 id="ashar"></h2></div>
            <div class="p-2"><h3 id="prayer5"></h3><h2 id="maghrib"></h2></div>
            <div class="p-2"><h3 id="prayer6"></h3><h2 id="isya"></h2></div>
        </div>
    </div>
</section>
<!-- ======= Prayer Section ======= -->
