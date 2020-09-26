<?php 
  include('../scripts/view_settings.php'); 
  include('slideModal.php'); 
?>
<form method="POST" enctype="multipart/form-data">
  <div class="container-fluid">
    <h1 class="card-header">iMasjid</h1><br>
    <div class="row">      
      <div class="col-3">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-pengaturan-list" data-toggle="list" href="#list-pengaturan" role="tab" aria-controls="pengaturan">Pengaturan</a>
          <a class="list-group-item list-group-item-action" id="list-notifikasi-list" data-toggle="list" href="#list-notifikasi" role="tab" aria-controls="notifikasi">Notifikasi</a>
          <a class="list-group-item list-group-item-action" id="list-teks-list" data-toggle="list" href="#list-teks" role="tab" aria-controls="teks">Teks Berjalan</a>
          <a class="list-group-item list-group-item-action" id="list-slides-list" data-toggle="list" href="#list-slides" role="tab" aria-controls="slides">Slide</a>
          <a class="list-group-item list-group-item-action" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about">Tentang Aplikasi</a>
        </div><br>
        <small>* Perubahan akan diupdate setiap 5 menit</small>        
        <div class="form-group">
          <div class="float-right">
            <input type="hidden" name="setting_id" id="setting_id" value="<?php echo $setting_id; ?>">
            <button type="button" class="btn btn-outline-success" id="saveSetting" class="float-right">Simpan</button>         
          </div>
        </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
          <!-- Menu Pengaturan -->
          <div class="tab-pane fade show active" id="list-pengaturan" role="tabpanel" aria-labelledby="list-pengaturan-list">
            <div class="card">
              <h5 class="card-header">Pengaturan Dasar</h5>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control col-md-6" value="<?php echo $nama_masjid; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control col-md-6" value="<?php echo $alamat_masjid; ?>">
                </div>
                <div class="form-group">
                  <label>Koreksi Tanggal Hijriah</label>
                  <select name="koreksi_hijriah" id="koreksi_hijriah" class="form-control col-md-2">
                      <option <?php if ($koreksi_hijriah==-2) echo 'selected = "selected"'; ?> value="-2">-2</option>
                      <option <?php if ($koreksi_hijriah==-1) echo 'selected = "selected"'; ?> value="-1">-1</option>     
                      <option <?php if ($koreksi_hijriah==-0) echo 'selected = "selected"'; ?> value="0">0</option>  
                      <option <?php if ($koreksi_hijriah==1) echo 'selected = "selected"'; ?> value="1">1</option> 
                      <option <?php if ($koreksi_hijriah==2) echo 'selected = "selected"'; ?> value="2">2</option>                               
                  </select>
                </div>
                <div class="form-group">
                  <label>Metode Perhitungan</label>
                  <select name="metode_perhitungan" id="metode_perhitungan" class="form-control col-md-6">
                      <option <?php if ($metode_perhitungan==0) echo 'selected = "selected"'; ?> value="0">Ithna Ashari</option>
                      <option <?php if ($metode_perhitungan==1) echo 'selected = "selected"'; ?> value="1">University of Islamic Sciences, Karachi</option>     
                      <option <?php if ($metode_perhitungan==2) echo 'selected = "selected"'; ?> value="2">Islamic Society of North America (ISNA)</option>  
                      <option <?php if ($metode_perhitungan==3) echo 'selected = "selected"'; ?> value="3">Muslim World League</option> 
                      <option <?php if ($metode_perhitungan==4) echo 'selected = "selected"'; ?> value="4">Umm al-Qura, Makkah</option>     
                      <option <?php if ($metode_perhitungan==5) echo 'selected = "selected"'; ?> value="5">Egyptian General Authority of Survey</option>  
                      <option <?php if ($metode_perhitungan==7) echo 'selected = "selected"'; ?> value="7">Institute of Geophysics, University of Tehran</option>                            
                  </select>
                </div>
                <div class="form-group">
                  <label>Garis Lintang</label><input type="text" name="garis_lintang" id="garis_lintang" class="form-control col-md-2" value="<?php echo $garis_lintang; ?>">
                </div>
                <div class="form-group">
                  <label>Garis Bujur</label><input type="text" name="garis_bujur" id="garis_bujur" class="form-control col-md-2 " value="<?php echo $garis_bujur; ?>">
                </div>
                <div class="form-group">
                  <label>Zona Waktu</label>
                  <select name="zona_waktu" id="zona_waktu" class="form-control col-md-2">
                    <option <?php if ($zona_waktu==+7) echo 'selected = "selected"'; ?> value="+7">+7</option>
                    <option <?php if ($zona_waktu==+8) echo 'selected = "selected"'; ?> value="+8">+8</option>                   
                  </select>                  
                </div>
              </div>
            </div>                       
          </div>
          <!-- Menu Pengaturan -->

          <!-- Notifikasi -->
          <div class="tab-pane fade" id="list-notifikasi" role="tabpanel" aria-labelledby="list-notifikasi-list">
            <div class="card">
            <h5 class="card-header">Notifikasi Adzan & Iqomah</h5>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
                  <select name="durasi_adzan" id="durasi_adzan" class="form-control col-md-2">
                    <option <?php if ($durasi_adzan==3) echo 'selected = "selected"'; ?> value="3">3</option>
                    <option <?php if ($durasi_adzan==4) echo 'selected = "selected"'; ?> value="4">4</option>
                    <option <?php if ($durasi_adzan==5) echo 'selected = "selected"'; ?> value="5">5</option>
                    <option <?php if ($durasi_adzan==10) echo 'selected = "selected"'; ?> value="10">10</option>                    
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jarak Adzan ke Iqomah <small class="text-muted">(Hitungan menit)</small></label>                
                  <div class="form-row">                  
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Shubuh</label>
                    <select name="iqomah_shubuh" id="iqomah_shubuh" class="form-control">
                      <option <?php if ($iqomah_shubuh==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_shubuh==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_shubuh==10) echo 'selected = "selected"'; ?> value="10">10</option>
                      <option <?php if ($iqomah_shubuh==15) echo 'selected = "selected"'; ?> value="15">15</option>  
                      <option <?php if ($iqomah_shubuh==20) echo 'selected = "selected"'; ?> value="20">20</option>  
                      <option <?php if ($iqomah_shubuh==25) echo 'selected = "selected"'; ?> value="25">25</option> 
                      <option <?php if ($iqomah_shubuh==30) echo 'selected = "selected"'; ?> value="30">30</option>                                       
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Dzuhur</label>
                    <select name="iqomah_dzuhur" id="iqomah_dzuhur" class="form-control">
                      <option <?php if ($iqomah_dzuhur==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_dzuhur==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_dzuhur==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select name="iqomah_ashar" id="iqomah_ashar" class="form-control">
                      <option <?php if ($iqomah_ashar==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_ashar==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_ashar==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select name="iqomah_maghrib" id="iqomah_maghrib" class="form-control">
                      <option <?php if ($iqomah_maghrib==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_maghrib==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_maghrib==10) echo 'selected = "selected"'; ?> value="10">10</option>                             
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select name="iqomah_isya" id="iqomah_isya" class="form-control">
                      <option <?php if ($iqomah_isya==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_isya==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_isya==10) echo 'selected = "selected"'; ?> value="10">10</option>
                      <option <?php if ($iqomah_isya==15) echo 'selected = "selected"'; ?> value="15">15</option>  
                      <option <?php if ($iqomah_isya==20) echo 'selected = "selected"'; ?> value="20">20</option>  
                      <option <?php if ($iqomah_isya==25) echo 'selected = "selected"'; ?> value="25">25</option> 
                      <option <?php if ($iqomah_isya==30) echo 'selected = "selected"'; ?> value="30">30</option>                                      
                    </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Notifikasi -->
                      
          <!-- Teks Berjalan -->
          <div class="tab-pane fade" id="list-teks" role="tabpanel" aria-labelledby="list-teks-list">
            <div class="card">
            <h5 class="card-header">Pengaturan Teks Berjalan</h5>
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Atur Kecepatan Teks</label>
                  <select name="kecepatan_teks" id="kecepatan_teks" class="form-control col-md-2">
                    <option <?php if ($kecepatan_teks==5) echo 'selected = "selected"'; ?> value="5">5</option>
                    <option <?php if ($kecepatan_teks==6) echo 'selected = "selected"'; ?> value="6">6</option>
                    <option <?php if ($kecepatan_teks==7) echo 'selected = "selected"'; ?> value="7">7</option>
                    <option <?php if ($kecepatan_teks==8) echo 'selected = "selected"'; ?> value="8">8</option>
                    <option <?php if ($kecepatan_teks==9) echo 'selected = "selected"'; ?> value="9">9</option>
                    <option <?php if ($kecepatan_teks==10) echo 'selected = "selected"'; ?> value="10">10</option>                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Teks Berjalan</label>
                  <textarea class="form-control" id="running_teks" name="running_teks" rows="6"><?php echo $running_teks; ?></textarea>
                </div>
            </div>
            </div>
          </div>
          <!-- Teks Berjalan -->       

          <!-- Slide -->
          <div class="tab-pane fade" id="list-slides" role="tabpanel" aria-labelledby="list-slides-list">
            <div class="card">
            <h5 class="card-header">Pengaturan Slide</h5>
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
                <div class="form-group">
                  <button type="button" class="btn btn-success" id="addSlide">Tambah Slide</button>     
                </div>
                <div class="form-group">  
                  <?php include('view_slides.php'); ?>
                </div>
              </div>
            </div>
          </div>          
          <!-- Slide --> 

          <!-- Tentang Aplikasi -->
          <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
            <div class="card">
            <h5 class="card-header">Tentang Aplikasi</h5>
            <div class="card-body">
                <div class="form-group">
                  <h4>Developer</h4>
                  <p><i class="fas fa-user-circle"></i> Hendra Dwi Putra</p>
                  <p><i class="fas fa-envelope-open-text"></i> hendra.doank@gmail.com</p> 
                  <p><i class="fas fa-phone-square-alt"></i> 62-811-6077-81</p>                  
                  <p><i class="fab fa-github"></i> https://github.com/hendradwiputra/imasjid</p>                  
                </div>
                <br>                
                <h4>Copyright</h4>
                <p>Aplikasi ini <strong>bebas</strong> dipakai/dikembangkan oleh siapa saja. <strong>Dilarang</strong> memperjualbelikan aplikasi ini.</p>
            </div>
            </div>
          </div>
          <!-- Tentang Aplikasi --> 

        </div>
      </div>
    </div><!-- row -->
  </div><!-- container-fluid -->
</form>                    

<script type="text/javascript">
    // https://agung-setiawan.com/preview-image-before-upload/
    function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };   
</script>
