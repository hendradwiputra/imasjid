<!-- Modal -->
<form method="POST" enctype="multipart/form-data" id="upload_form">
  <div class="modal fade" id="upload_modal">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Upload Gambar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">    
              <label>Pilih Gambar</label>
            <div>
              <img id="image_slide2" width="180px" height="120px" class="img border border-secondary">           
            </div>       
                
        </div>        
        <div class="form-group">                      
              <input type="file" name="foto_slide2" id="foto_slide2" class="btn btn-sm btn-outline-info" onchange="previewImage3();" />            
        </div>
        <div class="form-group">            
            <div>
                <small>* Ukuran file harus di bawah 2 MB.</small>
            </div>
            <div>
                <small>* Format file harus jpg, jpeg atau png.</small>
            </div>                        
        </div>      
                   
      </div>
      
      <div class="modal-footer">        
          <input type="hidden" name="image_id" id="image_id">      
          <input type="button" class="btn btn-sm btn-outline-pastel" id="cancel_upload" data-dismiss="modal" value="Keluar">
          <input type="button" class="btn btn-sm btn-outline-pastel" id="upload_image" value="Upload">        
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">   
    
    function previewImage3() {

      document.getElementById("image_slide2").style.display = "block";
      document.getElementById("upload_image").disabled = false;
      
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto_slide2").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("image_slide2").src = oFREvent.target.result;
      };
      
    };   
</script>