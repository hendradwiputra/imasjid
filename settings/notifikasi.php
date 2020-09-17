<?php
	include('header.php');
	include('sidebar.php');
    include('../scripts/retrieve.php');
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">                 
  <div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
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
  </div>
</main>

<?php include('footer.php'); ?>
