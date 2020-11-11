<?php 
  include('../scripts/view_settings.php'); 
  include('slideModal.php'); 
  include('hadistModal.php'); 
?>
<form method="POST" id="setting_form" enctype="multipart/form-data">
  <div class="container-fluid">
    <h1 class="card-header bg-secondary text-white">iMasjid</h1><br>
    <div class="row">      
      <div class="col-3">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-pengaturan-list" data-toggle="list" href="#list-pengaturan" role="tab" aria-controls="pengaturan"><i class="fas fa-cog"></i> Pengaturan</a>
          <a class="list-group-item list-group-item-action" id="list-notifikasi-list" data-toggle="list" href="#list-notifikasi" role="tab" aria-controls="notifikasi"><i class="fas fa-comment-dots"></i> Notifikasi</a>
          <a class="list-group-item list-group-item-action" id="list-teks-list" data-toggle="list" href="#list-teks" role="tab" aria-controls="teks"><i class="fas fa-keyboard"></i> Teks Berjalan</a>
          <a class="list-group-item list-group-item-action" id="list-slides-list" data-toggle="list" href="#list-slides" role="tab" aria-controls="slides"><i class="fas fa-tv"></i> Slide</a>
          <a class="list-group-item list-group-item-action" id="list-hadist-list" data-toggle="list" href="#list-hadist" role="tab" aria-controls="hadist"><i class="fas fa-quran"></i></i> Database Hadist</a>
          <a class="list-group-item list-group-item-action" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about"><i class="fas fa-user-circle"></i> Tentang Aplikasi</a>
        </div>
        <div class="form-group">
          <small>* Perubahan akan diupdate setiap 5 menit</small>
        </div>       
        <div class="form-group">
          <div class="float-right">
            <input type="hidden" name="setting_id" id="setting_id" value="<?php echo $setting_id; ?>">
            <button type="button" class="btn btn-primary btn-sm" id="saveSetting" class="float-right"><i class="fas fa-save"></i> Simpan</button>         
          </div>
        </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
          <!-- Menu Pengaturan -->
          <div class="tab-pane fade show active" id="list-pengaturan" role="tabpanel" aria-labelledby="list-pengaturan-list">
            <div class="card">
              <h5 class="card-header"><i class="fas fa-cog"></i> Pengaturan Dasar</h5>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control form-control-sm col-md-6" value="<?php echo $nama_masjid; ?>" maxlength="100">
                </div>
                <div class="form-group">
                  <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control form-control-sm col-md-6" value="<?php echo $alamat_masjid; ?>" maxlength="100">
                </div>
                <div class="form-group">
                  <label>Koreksi Tanggal Hijriah</label>
                  <select name="koreksi_hijriah" id="koreksi_hijriah" class="form-control form-control-sm col-md-2">
                      <option <?php if ($koreksi_hijriah==-2) echo 'selected = "selected"'; ?> value="-2">-2</option>
                      <option <?php if ($koreksi_hijriah==-1) echo 'selected = "selected"'; ?> value="-1">-1</option>     
                      <option <?php if ($koreksi_hijriah==-0) echo 'selected = "selected"'; ?> value="0">0</option>  
                      <option <?php if ($koreksi_hijriah==1) echo 'selected = "selected"'; ?> value="1">1</option> 
                      <option <?php if ($koreksi_hijriah==2) echo 'selected = "selected"'; ?> value="2">2</option>                               
                  </select>
                </div>
                <div class="form-group">
                  <label>Metode Perhitungan</label>
                  <select name="metode_perhitungan" id="metode_perhitungan" class="form-control form-control-sm col-md-6">
                      <option <?php if ($metode_perhitungan==0) echo 'selected = "selected"'; ?> value="0">Ithna Ashari</option>
                      <option <?php if ($metode_perhitungan==1) echo 'selected = "selected"'; ?> value="1">University of Islamic Sciences, Karachi</option>     
                      <option <?php if ($metode_perhitungan==2) echo 'selected = "selected"'; ?> value="2">Islamic Society of North America (ISNA)</option>  
                      <option <?php if ($metode_perhitungan==3) echo 'selected = "selected"'; ?> value="3">Muslim World League</option> 
                      <option <?php if ($metode_perhitungan==4) echo 'selected = "selected"'; ?> value="4">Umm al-Qura, Makkah</option>     
                      <option <?php if ($metode_perhitungan==5) echo 'selected = "selected"'; ?> value="5">Egyptian General Authority of Survey</option>                        
                      <option <?php if ($metode_perhitungan==7) echo 'selected = "selected"'; ?> value="7">Institute of Geophysics, University of Tehran</option>                            
                      <option <?php if ($metode_perhitungan==8) echo 'selected = "selected"'; ?> value="8">Kementerian Agama Indonesia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Garis Lintang</label><input type="text" name="garis_lintang" id="garis_lintang" class="form-control form-control-sm col-md-2" value="<?php echo $garis_lintang; ?>">
                </div>
                <div class="form-group">
                  <label>Garis Bujur</label><input type="text" name="garis_bujur" id="garis_bujur" class="form-control form-control-sm col-md-2 " value="<?php echo $garis_bujur; ?>">
                </div>
                <div class="form-group">
                  <label>Zona Waktu</label>
                  <select name="zona_waktu" id="zona_waktu" class="form-control form-control-sm col-md-2">
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
            <h5 class="card-header"><i class="fas fa-comment-dots"></i> Notifikasi Adzan & Iqomah</h5>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
                  <select name="durasi_adzan" id="durasi_adzan" class="form-control form-control-sm col-md-2">
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
                    <select name="iqomah_shubuh" id="iqomah_shubuh" class="form-control form-control-sm">
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
                    <select name="iqomah_dzuhur" id="iqomah_dzuhur" class="form-control form-control-sm">
                      <option <?php if ($iqomah_dzuhur==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_dzuhur==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_dzuhur==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select name="iqomah_ashar" id="iqomah_ashar" class="form-control form-control-sm">
                      <option <?php if ($iqomah_ashar==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_ashar==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_ashar==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select name="iqomah_maghrib" id="iqomah_maghrib" class="form-control form-control-sm">
                      <option <?php if ($iqomah_maghrib==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($iqomah_maghrib==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_maghrib==10) echo 'selected = "selected"'; ?> value="10">10</option>                             
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select name="iqomah_isya" id="iqomah_isya" class="form-control form-control-sm">
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
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Perpindahan Label Sholat ke Sholat Berikutnya <small class="text-muted">(Hitungan menit)</small></label>               
                  <div class="form-row">                  
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Shubuh</label>
                    <select name="durasi_shubuh" id="durasi_shubuh" class="form-control form-control-sm">
                      <option <?php if ($durasi_shubuh==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_shubuh==15) echo 'selected = "selected"'; ?> value="15">15</option>
                      <option <?php if ($durasi_shubuh==30) echo 'selected = "selected"'; ?> value="30">30</option>
                      <option <?php if ($durasi_shubuh==45) echo 'selected = "selected"'; ?> value="45">45</option>  
                      <option <?php if ($durasi_shubuh==60) echo 'selected = "selected"'; ?> value="60">60</option>                                                              
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Syuruq</label>
                    <select name="durasi_syuruq" id="durasi_syuruq" class="form-control form-control-sm">
                      <option <?php if ($durasi_syuruq==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_syuruq==15) echo 'selected = "selected"'; ?> value="15">15</option>                                                             
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Dzuhur</label>
                    <select name="durasi_dzuhur" id="durasi_dzuhur" class="form-control form-control-sm">
                      <option <?php if ($durasi_dzuhur==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_dzuhur==15) echo 'selected = "selected"'; ?> value="15">15</option>
                      <option <?php if ($durasi_dzuhur==30) echo 'selected = "selected"'; ?> value="30">30</option>
                      <option <?php if ($durasi_dzuhur==45) echo 'selected = "selected"'; ?> value="45">45</option>  
                      <option <?php if ($durasi_dzuhur==60) echo 'selected = "selected"'; ?> value="60">60</option>                                                              
                    </select>
                  </div>                
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select name="durasi_ashar" id="durasi_ashar" class="form-control form-control-sm">
                      <option <?php if ($durasi_ashar==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_ashar==15) echo 'selected = "selected"'; ?> value="15">15</option>
                      <option <?php if ($durasi_ashar==30) echo 'selected = "selected"'; ?> value="30">30</option>
                      <option <?php if ($durasi_ashar==45) echo 'selected = "selected"'; ?> value="45">45</option>  
                      <option <?php if ($durasi_ashar==60) echo 'selected = "selected"'; ?> value="60">60</option>                                                              
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select name="durasi_maghrib" id="durasi_maghrib" class="form-control form-control-sm">
                      <option <?php if ($durasi_maghrib==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_maghrib==15) echo 'selected = "selected"'; ?> value="15">15</option>
                      <option <?php if ($durasi_maghrib==30) echo 'selected = "selected"'; ?> value="30">30</option>                                                             
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select name="durasi_isya" id="durasi_isya" class="form-control form-control-sm">
                      <option <?php if ($durasi_isya==0) echo 'selected = "selected"'; ?> value="0">0</option>
                      <option <?php if ($durasi_isya==15) echo 'selected = "selected"'; ?> value="15">15</option>
                      <option <?php if ($durasi_isya==30) echo 'selected = "selected"'; ?> value="30">30</option>
                      <option <?php if ($durasi_isya==45) echo 'selected = "selected"'; ?> value="45">45</option>  
                      <option <?php if ($durasi_isya==60) echo 'selected = "selected"'; ?> value="60">60</option>                                                              
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
            <h5 class="card-header"><i class="fas fa-keyboard"></i> Pengaturan Teks Berjalan</h5>
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Atur Kecepatan Teks</label>
                  <select name="kecepatan_teks" id="kecepatan_teks" class="form-control form-control-sm col-md-2">
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
                  <textarea class="form-control form-control-sm" id="running_teks" name="running_teks" rows="6" maxlength="255"><?php echo $running_teks; ?></textarea>
                </div>
            </div>
            </div>
          </div>
          <!-- Teks Berjalan -->       

          <!-- Slide -->
          <div class="tab-pane fade" id="list-slides" role="tabpanel" aria-labelledby="list-slides-list">
            <div class="card">
            <h5 class="card-header"><i class="fas fa-tv"></i> Pengaturan Slide</h5>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Pergantian Slide</label>
                  <select name="durasi_slide" id="durasi_slide" class="form-control form-control-sm col-md-2">
                    <option <?php if ($durasi_slide==6000) echo 'selected = "selected"'; ?> value="6000">6 Detik</option>
                    <option <?php if ($durasi_slide==9000) echo 'selected = "selected"'; ?> value="9000">9 Detik</option>
                    <option <?php if ($durasi_slide==12000) echo 'selected = "selected"'; ?> value="12000">12 Detik</option>
                    <option <?php if ($durasi_slide==15000) echo 'selected = "selected"'; ?> value="15000">15 Detik</option>
                    <option <?php if ($durasi_slide==18000) echo 'selected = "selected"'; ?> value="18000">18 Detik</option>
                    <option <?php if ($durasi_slide==21000) echo 'selected = "selected"'; ?> value="21000">21 Detik</option>              
                  </select> 
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary btn-sm" id="add_slide">Tambah Slide</button>     
                </div>
                <div class="form-group">  
                  <?php include('view_slides.php'); ?>
                </div>
              </div>
            </div>
          </div>          
          <!-- Slide --> 

          <!-- Hadist -->
          <div class="tab-pane fade" id="list-hadist" role="tabpanel" aria-labelledby="list-hadist-list">
            <div class="card">
            <h5 class="card-header"><i class="fas fa-quran"></i> Kumpulan Hadist Shahih</h5>
              <div class="card-body">                
                <div class="form-group">
                  <button type="button" class="btn btn-primary btn-sm" id="add_hadist">Tambah Hadist</button>     
                </div>
                <div class="form-group">  
                  <?php include('view_hadist.php'); ?>
                </div>
              </div>
            </div>
          </div>          
          <!-- Hadist --> 

          <!-- Tentang Aplikasi -->
          <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
            <?php include('about.php'); ?>
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
