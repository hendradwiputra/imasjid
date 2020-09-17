
<!-- Modal -->
<div class="modal fade" id="slideModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Pilih Slide</label>
          <select name="durasi_slide" id="durasi_slide" class="form-control">
            <option>-- Pilih Slide --</option>
            <option value="slide1">Slide 1</option>
            <option value="slide2">Slide 2</option>
            <option value="slide3">Slide 3</option>
            <option value="slide4">Slide 4</option>
            <option value="slide5">Slide 5</option>
            <option value="slide6">Slide 6</option>              
          </select>
        </div>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="nama_masjid" id="nama_masjid" class="form-control col" value="<?php //echo $nama_masjid; ?>">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control" name="running_teks" rows="6"><?php //echo $running_teks; ?></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>