<div class="col-md-12 order-md-1">

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
        <label for="exampleFormControlSelect1">Pilih Slide Yang Akan Ditampilkan</label>
        <select name="slide_aktif" id="slide_aktif" class="form-control form-control-sm col-md-2">
            <option <?php if ($slide_aktif==1) echo 'selected = "selected"'; ?> value="1">Slide 1</option>
            <option <?php if ($slide_aktif==2) echo 'selected = "selected"'; ?> value="2">Slide 2</option>
            <option <?php if ($slide_aktif==3) echo 'selected = "selected"'; ?> value="3">Slide 1 & Slide 2</option>             
        </select> 
    </div>      

</div>