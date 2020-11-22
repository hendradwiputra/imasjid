<!-- Modal -->
<form method="POST" id="slide2_form">
<div class="modal fade" id="slide2_modal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="slide2-modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">                       
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control form-control-sm col" name="slide2_judul" id="slide2_judul"  maxlength="100">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control form-control-sm" name="slide2_isi1" id="slide2_isi1" rows="3" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="slide2_isi2" id="slide2_isi2" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="slide2_isi3" id="slide2_isi3" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status Slide</label>
            <select name="slide2_status" id="slide2_status" class="form-control form-control-sm col-md-2">
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option> 
            </select>
        </div>             
      </div>
      
      <div class="modal-footer">        
        <input type="hidden" name="slide2_id" id="slide2_id">      
        <input type="button" class="btn btn-sm btn-outline-pastel" id="cancel_slide2" data-dismiss="modal" value="Keluar">
        <input type="button" class="btn btn-sm btn-outline-pastel" id="save_slide2" value="Simpan">        
      </div>

    </div>
  </div>
</div>
</form>
