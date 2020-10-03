<!-- Modal -->
<form method="POST" id="hadist_form">
<div class="modal fade" id="hadistModal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hadist-modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">                       
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="hadist_judul" id="hadist_judul" class="form-control form-control-sm col" maxlength="100">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control form-control-sm" name="hadist_isi1" id="hadist_isi1" rows="3" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="hadist_isi2" id="hadist_isi2" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="hadist_isi3" id="hadist_isi3" rows="2" maxlength="255"></textarea>
        </div>             
      </div>
      
      <div class="modal-footer">        
        <input type="hidden" name="hadist_id" id="hadist_id">      
        <input type="button" class="btn btn-secondary btn-sm" id="cancel_hadist" data-dismiss="modal" value="Keluar">
        <input type="button" id="save_hadist" class="btn btn-primary btn-sm" value="Simpan">
        
      </div>
    </div>
  </div>
</div>
</form>
