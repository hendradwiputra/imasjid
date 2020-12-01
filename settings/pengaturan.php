<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengaturan Dasar</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <input type="hidden" name="setting_id" id="setting_id" value="<?php echo $setting_id; ?>">                                    
        </div>          
    </div> 
</div>

<div class="col-md-12 order-md-1">
    
    <div class="form-group">
        <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control form-control-sm col-md-10" value="<?php echo $nama_masjid; ?>" maxlength="100">
    </div>

    <div class="form-group">
        <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control form-control-sm col-md-10" value="<?php echo $alamat_masjid; ?>" maxlength="100">
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
        <select name="metode_perhitungan" id="metode_perhitungan" class="form-control form-control-sm col-md-10">
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
        <label>Garis Lintang</label><input type="text" name="garis_lintang" id="garis_lintang" class="form-control form-control-sm col-md-6" value="<?php echo $garis_lintang; ?>">
    </div>

    <div class="form-group">
        <label>Garis Bujur</label><input type="text" name="garis_bujur" id="garis_bujur" class="form-control form-control-sm col-md-6" value="<?php echo $garis_bujur; ?>">
    </div>
    
    <div class="form-group">
        <label>Zona Waktu</label>
        <select name="zona_waktu" id="zona_waktu" class="form-control form-control-sm col-md-2">
            <option <?php if ($zona_waktu==+7) echo 'selected = "selected"'; ?> value="+7">+7</option>
            <option <?php if ($zona_waktu==+8) echo 'selected = "selected"'; ?> value="+8">+8</option>                   
        </select>                  
    </div>

</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengaturan Slide</h1>                            
</div>

<div class="col-md-12 order-md-1">

    <div class="form-group">
        <label for="exampleFormControlSelect1">Durasi Pergantian Slide</label>
        <select name="durasi_slide" id="durasi_slide" class="form-control form-control-sm col-md-3">
            <option <?php if ($durasi_slide==6000) echo 'selected = "selected"'; ?> value="6000">6 Detik</option>
            <option <?php if ($durasi_slide==9000) echo 'selected = "selected"'; ?> value="9000">9 Detik</option>
            <option <?php if ($durasi_slide==12000) echo 'selected = "selected"'; ?> value="12000">12 Detik</option>
            <option <?php if ($durasi_slide==15000) echo 'selected = "selected"'; ?> value="15000">15 Detik</option>
            <option <?php if ($durasi_slide==18000) echo 'selected = "selected"'; ?> value="18000">18 Detik</option>
            <option <?php if ($durasi_slide==21000) echo 'selected = "selected"'; ?> value="21000">21 Detik</option>              
        </select> 
    </div>       
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Slide Yang Akan Ditampilkan</label>
        <select name="slide_aktif" id="slide_aktif" class="form-control form-control-sm col-md-3">
            <option <?php if ($slide_aktif==1) echo 'selected = "selected"'; ?> value="1">Slide 1</option>
            <option <?php if ($slide_aktif==2) echo 'selected = "selected"'; ?> value="2">Slide 2</option>
            <option <?php if ($slide_aktif==3) echo 'selected = "selected"'; ?> value="3">Slide 1 & Slide 2</option>             
        </select> 
    </div>    

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Layout</h1>                            
    </div>  

    <div class="form-group">
        <label for="exampleFormControlSelect1">Posisi Header</label>
        <select name="header_position" id="header_position" class="form-control form-control-sm col-md-3">
            <option <?php if ($header_position=="start") echo 'selected = "selected"'; ?> value="start">Kiri</option>
            <option <?php if ($header_position=="center") echo 'selected = "selected"'; ?> value="center">Tengah</option>
            <option <?php if ($header_position=="end") echo 'selected = "selected"'; ?> value="end">Kanan</option>             
        </select> 
    </div>   

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kunci Layar</h1>                            
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-lock"></i> Kunci Layar Sebelum Masuk Waktu Adzan <small class="text-muted">(Hitungan menit)</small></label>
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
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-lock"></i> Kunci Layar Ketika Sholat Berjama'ah <small class="text-muted">(Hitungan menit)</small></label>
        <select name="kunci_layar_sholat" id="kunci_layar_sholat" class="form-control form-control-sm col-md-2">
            <option <?php if ($kunci_layar_sholat==5) echo 'selected = "selected"'; ?> value="5">5</option>
            <option <?php if ($kunci_layar_sholat==10) echo 'selected = "selected"'; ?> value="10">10</option>
            <option <?php if ($kunci_layar_sholat==15) echo 'selected = "selected"'; ?> value="15">15</option>
            <option <?php if ($kunci_layar_sholat==20) echo 'selected = "selected"'; ?> value="20">20</option>
            <option <?php if ($kunci_layar_sholat==25) echo 'selected = "selected"'; ?> value="25">25</option>
            <option <?php if ($kunci_layar_sholat==30) echo 'selected = "selected"'; ?> value="30">30</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1"><i class="fas fa-lock"></i> Kunci Layar Ketika Khutbah Jum'at <small class="text-muted">(Hitungan menit)</small></label>
        <select name="kunci_layar_jumat" id="kunci_layar_jumat" class="form-control form-control-sm col-md-2"> 
            <option <?php if ($kunci_layar_jumat==5) echo 'selected = "selected"'; ?> value="5">5</option>           
            <option <?php if ($kunci_layar_jumat==10) echo 'selected = "selected"'; ?> value="10">10</option>
            <option <?php if ($kunci_layar_jumat==15) echo 'selected = "selected"'; ?> value="15">15</option>
            <option <?php if ($kunci_layar_jumat==20) echo 'selected = "selected"'; ?> value="20">20</option>
            <option <?php if ($kunci_layar_jumat==25) echo 'selected = "selected"'; ?> value="25">25</option>
            <option <?php if ($kunci_layar_jumat==30) echo 'selected = "selected"'; ?> value="30">30</option>
            <option <?php if ($kunci_layar_jumat==35) echo 'selected = "selected"'; ?> value="35">35</option>
            <option <?php if ($kunci_layar_jumat==40) echo 'selected = "selected"'; ?> value="40">40</option>
        </select>
    </div>

</div>