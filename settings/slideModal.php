<!-- Modal -->
<form method="POST" enctype="multipart/form-data" >
<div class="modal fade" id="slideModal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" id="judul" class="form-control col">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control" name="isi1" id="isi1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="isi2" id="isi2" rows="3"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="isi3" id="isi3" rows="3"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="isi4" id="isi4" rows="3"></textarea>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" name="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Aktif</label>
          <input type="hidden" name="no" id="no">          
        </div>
      </div>
      
      <div class="modal-footer">         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success" id="saveSlide">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>
