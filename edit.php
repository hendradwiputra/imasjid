
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengaturan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form method="post">
        <div class="row">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-menu1-tab" data-toggle="pill" href="#v-pills-menu1" role="tab" aria-controls="v-pills-menu1" aria-selected="true">Pengaturan</a>
              <a class="nav-link" id="v-pills-menu2-tab" data-toggle="pill" href="#v-pills-menu2" role="tab" aria-controls="v-pills-menu2" aria-selected="false">Tampilan</a>
              <a class="nav-link" id="v-pills-menu3s-tab" data-toggle="pill" href="#v-pills-menu3s" role="tab" aria-controls="v-pills-menu3s" aria-selected="false">Notifikasi</a>
              <a class="nav-link" id="v-pills-menu4-tab" data-toggle="pill" href="#v-pills-menu4" role="tab" aria-controls="v-pills-menu4" aria-selected="false">Teks Berjalan</a>
            </div>
          </div>

          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-menu1" role="tabpanel" aria-labelledby="v-pills-menu1-tab">
                <div class="form-group">
                  <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Koreksi Tanggal Hijriah</label>
                  <select class="form-control col-md-2">
                      <option>-2</option>
                      <option>-1</option>     
                      <option>0</option>  
                      <option>1</option> 
                      <option>2</option>                               
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Metode Perhitungan</label>
                  <select class="form-control col-md-8">
                      <option value="0">Ithna Ashari</option>
                      <option value="1">University of Islamic Sciences, Karachi</option>     
                      <option value="2">Islamic Society of North America (ISNA)</option>  
                      <option value="3">Muslim World League</option> 
                      <option value="4">Umm al-Qura, Makkah</option>     
                      <option value="5">Egyptian General Authority of Survey</option>  
                      <option value="7">Institute of Geophysics, University of Tehran</option>                            
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

              <div class="tab-pane fade" id="v-pills-menu3s" role="tabpanel" aria-labelledby="v-pills-menu3s-tab">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
                  <select class="form-control col-md-2">
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>                    
                  </select>
                </div>

                <div class="form-group"><label for="exampleFormControlSelect1">Jarak Adzan ke Iqomah <small class="text-muted">(Hitungan menit)</small></label>                
                <div class="form-row">                  
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Shubuh</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>5</option>
                      <option>10</option>                                    
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Dzuhur</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>5</option>
                      <option>10</option>                                    
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Ashar</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>5</option>
                      <option>10</option>                                    
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Maghrib</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>5</option>
                      <option>10</option>                                    
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="exampleFormControlSelect1">Isya</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>5</option>
                      <option>10</option>                                    
                    </select>
                  </div>
                </div>
              </div>
              </div>

              <div class="tab-pane fade" id="v-pills-menu4" role="tabpanel" aria-labelledby="v-pills-menu4-tab">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Atur Kecepatan Teks</label>
                  <select class="form-control col-md-2" id="exampleFormControlSelect1">
                    <option>5</option>
                    <option>7</option>
                    <option>10</option>
                    <option>15</option>                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Teks Berjalan</label>
                  <textarea class="form-control" id="runningtext" name="runningtext" rows="4"></textarea>
                </div>
              </div>

            </div>
          </div>
        </div>


      </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="addRecord()">Simpan</button>
      </div>
    </div>
  </div>
</div>

