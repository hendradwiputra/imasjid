<div class="col-md-12 order-md-1">

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