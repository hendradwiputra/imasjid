<?php
	include('header.php');
	include('sidebar.php');
    include('../scripts/retrieve.php');
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">                 
  <div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
          <h5 class="card-header">Upload Gambar</h5>
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Pergantian Slide</label>
                  <select name="durasi_slide" id="durasi_slide" class="form-control col-md-2">
                    <option <?php if ($durasi_slide==6000) echo 'selected = "selected"'; ?> value="6000">6 Detik</option>
                    <option <?php if ($durasi_slide==9000) echo 'selected = "selected"'; ?> value="9000">9 Detik</option>
                    <option <?php if ($durasi_slide==12000) echo 'selected = "selected"'; ?> value="12000">12 Detik</option>
                    <option <?php if ($durasi_slide==15000) echo 'selected = "selected"'; ?> value="15000">15 Detik</option>
                    <option <?php if ($durasi_slide==18000) echo 'selected = "selected"'; ?> value="18000">18 Detik</option>
                    <option <?php if ($durasi_slide==21000) echo 'selected = "selected"'; ?> value="21000">21 Detik</option>              
                  </select> 
                </div> 
                <hr>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Pilih Slide</label>
                  <select name="durasi_slide" id="durasi_slide" class="form-control col-md-3">
                    <option>-- Pilih Slide --</option>
                    <option value="slide1">Slide 1</option>
                    <option value="slide2">Slide 2</option>
                    <option value="slide3">Slide 3</option>
                    <option value="slide4">Slide 4</option>
                    <option value="slide5">Slide 5</option>
                    <option value="slide6">Slide 6</option>              
                  </select> 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Pilih Gambar</label><br>
                  <?php include('../settings/dir_images.php'); ?>
                </div>

                <div class="form-group">           
                  <div class="form-group">
                    <label>Judul</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control" value="<?php //echo $nama_masjid; ?>">
                  </div>
  
                  <div class="form-group">
                    <label>Isi</label>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Aktif</label>
                  </div>

                </div>
            </div>
        </div>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>
