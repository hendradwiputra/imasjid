<?php include('retrieve.php'); ?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengaturan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      

        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-menu1-tab" data-toggle="pill" href="#v-pills-menu1" role="tab" aria-controls="v-pills-menu1" aria-selected="true">Pengaturan</a>
              <a class="nav-link" id="v-pills-menu2-tab" data-toggle="pill" href="#v-pills-menu2" role="tab" aria-controls="v-pills-menu2" aria-selected="false">Tampilan</a>
              <a class="nav-link" id="v-pills-menu3-tab" data-toggle="pill" href="#v-pills-menu3" role="tab" aria-controls="v-pills-menu3" aria-selected="false">Notifikasi</a>
              <a class="nav-link" id="v-pills-menu4-tab" data-toggle="pill" href="#v-pills-menu4" role="tab" aria-controls="v-pills-menu4" aria-selected="false">Teks Berjalan</a>
            </div>
          </div>

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
                  <select name="koreksi_hijriah" class="form-control col-md-2">
                      <option <?php if ($koreksi_hijriah==-2) echo 'selected = "selected"'; ?> >-2</option>
                      <option <?php if ($koreksi_hijriah==-1) echo 'selected = "selected"'; ?>>-1</option>     
                      <option <?php if ($koreksi_hijriah==-0) echo 'selected = "selected"'; ?>>0</option>  
                      <option <?php if ($koreksi_hijriah==1) echo 'selected = "selected"'; ?>>1</option> 
                      <option <?php if ($koreksi_hijriah==2) echo 'selected = "selected"'; ?>>2</option>                               
                  </select>
                </div>
                <div class="form-group">
                  <label>Metode Perhitungan</label>
                  <select name="metode_perhitungan" class="form-control col-md-8">
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
                  <label>Latitude</label><input type="text" name="latitude" id="latitude" class="form-control col-md-3" value="<?php echo $latitude; ?>">
                </div>
                <div class="form-group">
                  <label>Longitude</label><input type="text" name="longitude" id="longitude" class="form-control col-md-3 " value="<?php echo $longitude; ?>">
                </div>
                <div class="form-group">
                  <label>Timezone</label>
                  <select name="timezone" class="form-control col-md-2">
                    <option <?php if ($timezone==+7) echo 'selected = "selected"'; ?>>+7</option>
                    <option <?php if ($timezone==+8) echo 'selected = "selected"'; ?>>+8</option>                   
                  </select>
                </div>

              </div>

              <div class="tab-pane fade" id="v-pills-menu2" role="tabpanel" aria-labelledby="v-pills-menu2-tab">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Pilih file</label>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-menu3" role="tabpanel" aria-labelledby="v-pills-menu3-tab">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
                  <select name="durasi_adzan" class="form-control col-md-2">
                    <option <?php if ($durasi_adzan==3) echo 'selected = "selected"'; ?>>3</option>
                    <option <?php if ($durasi_adzan==5) echo 'selected = "selected"'; ?>>5</option>
                    <option <?php if ($durasi_adzan==10) echo 'selected = "selected"'; ?>>10</option>                    
                  </select>
                </div>

                <div class="form-group"><label for="exampleFormControlSelect1">Jarak Adzan ke Iqomah <small class="text-muted">(Hitungan menit)</small></label>                
                <div class="form-row">                  
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Shubuh</label>
                    <select name="iqomah_shubuh" class="form-control">
                      <option <?php if ($iqomah_shubuh==1) echo 'selected = "selected"'; ?>>1</option>
                      <option <?php if ($iqomah_shubuh==5) echo 'selected = "selected"'; ?>>5</option>
                      <option <?php if ($iqomah_shubuh==10) echo 'selected = "selected"'; ?>>10</option>
                      <option <?php if ($iqomah_shubuh==15) echo 'selected = "selected"'; ?>>15</option>  
                      <option <?php if ($iqomah_shubuh==20) echo 'selected = "selected"'; ?>>20</option>  
                      <option <?php if ($iqomah_shubuh==25) echo 'selected = "selected"'; ?>>25</option> 
                      <option <?php if ($iqomah_shubuh==30) echo 'selected = "selected"'; ?>>30</option>                                       
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Dzuhur</label>
                    <select name="iqomah_dzuhur" class="form-control">
                      <option <?php if ($iqomah_dzuhur==1) echo 'selected = "selected"'; ?>>1</option>
                      <option <?php if ($iqomah_dzuhur==5) echo 'selected = "selected"'; ?>>5</option>
                      <option <?php if ($iqomah_dzuhur==10) echo 'selected = "selected"'; ?>>10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select name="iqomah_ashar" class="form-control">
                      <option <?php if ($iqomah_ashar==1) echo 'selected = "selected"'; ?>>1</option>
                      <option <?php if ($iqomah_ashar==5) echo 'selected = "selected"'; ?>>5</option>
                      <option <?php if ($iqomah_ashar==10) echo 'selected = "selected"'; ?>>10</option>                                  
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select name="iqomah_maghrib" class="form-control">
                      <option <?php if ($iqomah_maghrib==1) echo 'selected = "selected"'; ?>>1</option>
                      <option <?php if ($iqomah_maghrib==5) echo 'selected = "selected"'; ?>>5</option>
                      <option <?php if ($iqomah_maghrib==10) echo 'selected = "selected"'; ?>>10</option>                                    
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select name="iqomah_isya" class="form-control">
                      <option <?php if ($iqomah_isya==1) echo 'selected = "selected"'; ?>>1</option>
                      <option <?php if ($iqomah_isya==5) echo 'selected = "selected"'; ?>>5</option>
                      <option <?php if ($iqomah_isya==10) echo 'selected = "selected"'; ?>>10</option>                                    
                    </select>
                  </div>
                </div>
              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-menu4" role="tabpanel" aria-labelledby="v-pills-menu4-tab">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Atur Kecepatan Teks</label>
                  <select name="kecepatan_teks" class="form-control col-md-2">
                    <option <?php if ($kecepatan_teks==5) echo 'selected = "selected"'; ?>>5</option>
                    <option <?php if ($kecepatan_teks==7) echo 'selected = "selected"'; ?>>7</option>
                    <option <?php if ($kecepatan_teks==10) echo 'selected = "selected"'; ?>>10</option>
                    <option <?php if ($kecepatan_teks==15) echo 'selected = "selected"'; ?>>15</option>                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Teks Berjalan</label>
                  <textarea class="form-control" id="running_text" name="running_text" rows="4"><?php echo $running_text; ?></textarea>
                </div>
              </div>

            </div>
          </div>
        </div> 
      </div>

      <div class="modal-footer">
        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>

