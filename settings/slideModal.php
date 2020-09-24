<!-- Modal -->
<form method="POST" enctype="multipart/form-data" id="insert_form">
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
        <div class="form-group">           
            <label>Gambar</label>
            <div>
              <img id="img" src="" width="160px" height="120px" class="img border border-dark">
            </div>
        </div>
        <div class="form-group">
            <input type="file" name="foto" id="foto" class="btn btn-sm btn-outline-info" onchange="previewImage2();"/>                              
        </div>
        
      </div>
      
      <div class="modal-footer">
        <input type="text" name="slide_id" id="slide_id">      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success" id="saveSlide">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
    // https://agung-setiawan.com/preview-image-before-upload/
    function previewImage2() {
      document.getElementById("img").style.display = "block";
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("img").src = oFREvent.target.result;
      };
    };   
</script>
