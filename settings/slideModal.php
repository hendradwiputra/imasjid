
<!-- Modal -->
<form method="post" enctype="multipart/form-data" >
<div class="modal fade" id="slideModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--<div class="form-group">
          <label>Pilih Slide</label>
          <select name="slide" id="slide" class="form-control">
            <option>-- Pilih Slide --</option>
            <option value="slide1">Slide 1</option>
            <option value="slide2">Slide 2</option>
            <option value="slide3">Slide 3</option>
            <option value="slide4">Slide 4</option>
            <option value="slide5">Slide 5</option>
            <option value="slide6">Slide 6</option>              
          </select>
        </div>-->
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" id="judul" class="form-control col">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control" name="isi" id="isi" rows="6"></textarea>
        </div>
        <!--<div class="form-check">
          <input class="form-check-input" type="checkbox" value="" name="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Aktif</label>
        </div>-->
      </div>
      <input type="text" name="no" id="no">
      <div class="modal-footer">         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success" id="saveSlide">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>