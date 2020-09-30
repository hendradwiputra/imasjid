<!-- Modal -->
<form method="POST" enctype="multipart/form-data" id="insert_form">
<div class="modal fade" id="slideModal">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label id="slide-id"></label><br>      
          <label>Gambar</label>
          <div>
            <img id="images" width="180px" height="120px" class="img border border-secondary">           
          </div>
          <div><small><label id="filename" name="filename"></label></small></div>                  
        </div>
        <div class="form-group">                                        
          <div class="custom-control custom-checkbox mr-sm-2" id="checkBox-form">
            <input type="checkbox" class="form-check-input" id="checkBox" name="checkBox" onclick="myFunction()" />                       
            <label class="form-check-label" for="checkBox">Ubah Gambar</label>
            <input type="hidden" name="checkBoxValue" id="checkBoxValue" class="form-control form-control-sm col" value=""> 
          </div>              
        </div>
        <div class="form-group">                      
          <input type="file" name="foto" id="foto" class="btn btn-sm btn-outline-info" onchange="previewImage2();" />            
        </div> 
        <div class="form-group">            
            <div><small>* Ukuran file harus di bawah 2 MB.</small></div>
            <div><small>* Format file harus jpg, jpeg atau png.</small></div>                        
        </div>         
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" id="judul" class="form-control form-control-sm col" maxlength="100">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control form-control-sm" name="isi1" id="isi1" rows="3" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi2" id="isi2" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi3" id="isi3" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi4" id="isi4" rows="2" maxlength="255"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Status Slide</label>
          <select name="slide_status" id="slide_status" class="form-control form-control-sm col-md-2">
            <option value="1">Aktif</option>
            <option value="0">Tidak Aktif</option> 
          </select>
        </div>              
      </div>
      
      <div class="modal-footer">        
        <input type="hidden" name="slide_id" id="slide_id">      
        <input type="button" class="btn btn-secondary btn-sm" id="batalBtn" data-dismiss="modal" value="Keluar">
        <input type="button" id="saveSlide" class="btn btn-primary btn-sm" value="Simpan">
        
      </div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
    function myFunction() {
      var checkBox_btn = document.getElementById("checkBox");
      var browseFoto = document.getElementById("foto");
      var textBoxValue = document.getElementById("checkBoxValue");
      if (checkBox_btn.checked == true){
        browseFoto.style.display = "block";
        textBoxValue.value = "checked";      
      } else {
        browseFoto.style.display = "none";    
        textBoxValue.value = "";
      }
    }
    // https://agung-setiawan.com/preview-image-before-upload/
    function previewImage2() {
      document.getElementById("images").style.display = "block";
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("images").src = oFREvent.target.result;
      };
    };   
</script>