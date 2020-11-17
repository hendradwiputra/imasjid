<div class="col-md-12 order-md-1">

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-list"></i> Tampilkan Layar Hitung Mundur Sebelum Masuk Waktu Adzan <small class="text-muted">(Hitungan menit)</small></label>
        <select name="kunci_layar" id="kunci_layar" class="form-control form-control-sm col-md-2">
            <option <?php if ($kunci_layar==1) echo 'selected = "selected"'; ?> value="1">1</option>
            <option <?php if ($kunci_layar==2) echo 'selected = "selected"'; ?> value="2">2</option>
            <option <?php if ($kunci_layar==3) echo 'selected = "selected"'; ?> value="3">3</option>
            <option <?php if ($kunci_layar==4) echo 'selected = "selected"'; ?> value="4">4</option>
            <option <?php if ($kunci_layar==5) echo 'selected = "selected"'; ?> value="5">5</option>
            <option <?php if ($kunci_layar==10) echo 'selected = "selected"'; ?> value="10">10</option>
            <option <?php if ($kunci_layar==15) echo 'selected = "selected"'; ?> value="15">15</option>
           <option <?php if ($kunci_layar==20) echo 'selected = "selected"'; ?> value="20">20</option>
        </select>
    </div><br>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Durasi Adzan <small class="text-muted">(Hitungan menit)</small></label>
        <select name="durasi_adzan" id="durasi_adzan" class="form-control form-control-sm col-md-2">
            <option <?php if ($durasi_adzan==3) echo 'selected = "selected"'; ?> value="3">3</option>
            <option <?php if ($durasi_adzan==4) echo 'selected = "selected"'; ?> value="4">4</option>
            <option <?php if ($durasi_adzan==5) echo 'selected = "selected"'; ?> value="5">5</option>
            <option <?php if ($durasi_adzan==7) echo 'selected = "selected"'; ?> value="7">7</option>
            <option <?php if ($durasi_adzan==10) echo 'selected = "selected"'; ?> value="10">10</option>                    
        </select>
    </div><br>

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-list"></i> Jarak Adzan ke Iqomah <small class="text-muted">(Hitungan menit)</small></label>               
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
        <label for="exampleFormControlSelect1"><i class="fas fa-list"></i> Perpindahan Label Sholat ke Sholat Berikutnya <small class="text-muted">(Hitungan menit)</small></label>               
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

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-list"></i> Perubahan Nama Sholat</label>               
        <div class="form-row">                  
                  
            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer1</label>
                <input type="text" name="prayer1" id="prayer1" class="form-control form-control-sm" value="<?php echo $prayer1; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer2</label>
                <input type="text" name="prayer2" id="prayer2" class="form-control form-control-sm" value="<?php echo $prayer2; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer3</label>
                <input type="text" name="prayer3" id="prayer3" class="form-control form-control-sm" value="<?php echo $prayer3; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer4</label>
                <input type="text" name="prayer4" id="prayer4" class="form-control form-control-sm" value="<?php echo $prayer4; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer5</label>
                <input type="text" name="prayer5" id="prayer5" class="form-control form-control-sm" value="<?php echo $prayer5; ?>">
            </div>
            
            <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Prayer6</label>
                <input type="text" name="prayer6" id="prayer6" class="form-control form-control-sm" value="<?php echo $prayer6; ?>">
            </div>
        
        </div>
    </div> 

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-list"></i> Informasi Tambahan</label>               
        <div class="form-row">       
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Sebelum Adzan</label>
                <textarea class="form-control form-control-sm" name="teks_sebelum_adzan" id="teks_sebelum_adzan" rows="4" maxlength="255"><?php echo $teks_sebelum_adzan; ?></textarea>
            </div>
            
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Waktu Adzan</label>
                <textarea class="form-control form-control-sm" name="teks_adzan" id="teks_adzan" rows="4" maxlength="255"><?php echo $teks_adzan; ?></textarea>
            </div>                      
        </div>

        <div class="form-row">   
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Waktu Iqomah</label>
                <textarea class="form-control form-control-sm" name="teks_iqomah" id="teks_iqomah" rows="4" maxlength="255"><?php echo $teks_iqomah; ?></textarea>
            </div>
        
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Sebelum Sholat</label>
                <textarea class="form-control form-control-sm" name="teks_sebelum_sholat" id="teks_sebelum_sholat" rows="4" maxlength="255"><?php echo $teks_sebelum_sholat; ?></textarea>
            </div>                  
        </div>

    </div> 


</div>