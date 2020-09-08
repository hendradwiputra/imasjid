
<form method="post" enctype="multipart/form-data">
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Menu Pengaturan</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      

        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-menu1-tab" data-toggle="pill" href="#v-pills-menu1" role="tab" aria-controls="v-pills-menu1" aria-selected="true">Pengaturan</a>
              <a class="nav-link" id="v-pills-menu2-tab" data-toggle="pill" href="#v-pills-menu2" role="tab" aria-controls="v-pills-menu2" aria-selected="false">Upload</a>
              <a class="nav-link" id="v-pills-menu3-tab" data-toggle="pill" href="#v-pills-menu3" role="tab" aria-controls="v-pills-menu3" aria-selected="false">Slide</a>
              <a class="nav-link" id="v-pills-menu4-tab" data-toggle="pill" href="#v-pills-menu4" role="tab" aria-controls="v-pills-menu4" aria-selected="false">Notifikasi</a>
              <a class="nav-link" id="v-pills-menu5-tab" data-toggle="pill" href="#v-pills-menu5" role="tab" aria-controls="v-pills-menu5" aria-selected="false">Teks Berjalan</a>
            </div>
          </div>

          <!-- Menu1 -->
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-menu1" role="tabpanel" aria-labelledby="v-pills-menu1-tab">
                <div class="form-group">
                  <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control" value="<?php echo $nama_masjid; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control" value="<?php echo $alamat_masjid; ?>">
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
                  <select name="metode_perhitungan" id="metode_perhitungan" class="form-control col-md-8">
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
                  <label>Garis Lintang</label><input type="text" name="garis_lintang" id="garis_lintang" class="form-control col-md-3" value="<?php echo $garis_lintang; ?>">
                </div>
                <div class="form-group">
                  <label>Garis Bujur</label><input type="text" name="garis_bujur" id="garis_bujur" class="form-control col-md-3 " value="<?php echo $garis_bujur; ?>">
                </div>
                <div class="form-group">
                  <label>Zona Waktu</label>
                  <select name="zona_waktu" id="zona_waktu" class="form-control col-md-2">
                    <option <?php if ($zona_waktu==+7) echo 'selected = "selected"'; ?> value="+7">+7</option>
                    <option <?php if ($zona_waktu==+8) echo 'selected = "selected"'; ?> value="+8">+8</option>                   
                  </select>
                </div>
              </div>
              <!-- End Menu1 -->

              <!-- Menu2 -->             
              <div class="tab-pane fade" id="v-pills-menu2" role="tabpanel" aria-labelledby="v-pills-menu2-tab">
                 <form method='post' action='' enctype="multipart/form-data">
                 <div class="form-group">
                  <label for="exampleFormControlSelect1">Upload Gambar</label>                  
                  <div>
                    <img id="image-preview" alt="image preview" class="image-preview border border-dark">
                  </div><br>
                  <button type="button" class="btn btn-outline-primary" id="uploadBtn">Upload</button>              
                  <input type="file" name="file" class="btn btn-sm btn-outline-primary" id="file" onchange="previewImage();"/>
                </div>
                </form>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Gallery</label>
                  <div class="media">
                    <?php include('images.php'); ?>                    
                  </div> 
                </div>                
              </div>
              <!-- End Menu2 -->

              <!-- Menu3 -->
              <div class="tab-pane fade" id="v-pills-menu3" role="tabpanel" aria-labelledby="v-pills-menu3-tab">
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
                  <div class="media">
                    <img src="./assets/images/quran-01.jpg" class="align-self-start mr-3 image-slide-preview" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">[Title]</h5>
                      <p>[Content-1]</p>
                      <p>[Content-2]</p>
                      <p>[Content-3]</p>
                      <p>[Content-4]</p>
                      <p>[Content-5]</p>
                    </div>
                  </div>
                </div>

              </div>
              <!-- End Menu3 -->

              <!-- Menu4 -->
              <div class="tab-pane fade" id="v-pills-menu4" role="tabpanel" aria-labelledby="v-pills-menu4-tab">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
                  <select name="durasi_adzan" id="durasi_adzan" class="form-control col-md-2">
                    <option <?php if ($durasi_adzan==3) echo 'selected = "selected"'; ?> value="3">3</option>
                    <option <?php if ($durasi_adzan==4) echo 'selected = "selected"'; ?> value="4">4</option>
                    <option <?php if ($durasi_adzan==5) echo 'selected = "selected"'; ?> value="5">5</option>
                    <option <?php if ($durasi_adzan==10) echo 'selected = "selected"'; ?> value="10">10</option>                    
                  </select>
                </div>

                <div class="form-group"><label for="exampleFormControlSelect1">Jarak Adzan ke Iqomah <small class="text-muted">(Hitungan menit)</small></label>                
                <div class="form-row">                  
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Shubuh</label>
                    <select name="iqomah_shubuh" id="iqomah_shubuh" class="form-control">
                      <option <?php if ($iqomah_shubuh==1) echo 'selected = "selected"'; ?> value="1">1</option>
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
                      <option <?php if ($iqomah_dzuhur==1) echo 'selected = "selected"'; ?> value="1">1</option>
                      <option <?php if ($iqomah_dzuhur==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_dzuhur==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select name="iqomah_ashar" id="iqomah_ashar" class="form-control">
                      <option <?php if ($iqomah_ashar==1) echo 'selected = "selected"'; ?> value="1">1</option>
                      <option <?php if ($iqomah_ashar==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_ashar==10) echo 'selected = "selected"'; ?> value="10">10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select name="iqomah_maghrib" id="iqomah_maghrib" class="form-control">
                      <option <?php if ($iqomah_maghrib==1) echo 'selected = "selected"'; ?> value="1">1</option>
                      <option <?php if ($iqomah_maghrib==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_maghrib==10) echo 'selected = "selected"'; ?> value="10">10</option>                             
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select name="iqomah_isya" id="iqomah_isya" class="form-control">
                      <option <?php if ($iqomah_isya==1) echo 'selected = "selected"'; ?> value="1">1</option>
                      <option <?php if ($iqomah_isya==5) echo 'selected = "selected"'; ?> value="5">5</option>
                      <option <?php if ($iqomah_isya==10) echo 'selected = "selected"'; ?> value="10">10</option>                                    
                    </select>
                  </div>
                </div>
              </div>
              </div>
              <!-- End Menu4 -->

              <!-- Menu5 -->
              <div class="tab-pane fade" id="v-pills-menu5" role="tabpanel" aria-labelledby="v-pills-menu5-tab">
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
                  <textarea class="form-control" id="running_teks" name="running_teks" rows="4"><?php echo $running_teks; ?></textarea>
                </div>
              </div>
              <!-- End Menu5 -->

            </div>
          </div>
        </div> 
      </div>

      <div class="modal-footer">
        <input type="hidden" name="no" id="no" class="form-control" value="<?php echo $no; ?>">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-sm btn-outline-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
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