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
            <img id="images" width="180px" height="120px" class="img border border-dark">           
          </div>
          <div><small><label id="filename" name="filename"></label></small></div>                  
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-auto my-1">
              <input type="file" name="foto" id="foto" class="btn btn-sm btn-outline-info" onchange="previewImage2();" />
            </div>                    
            <div class="col-auto my-1">
              <div class="custom-control custom-checkbox mr-sm-2" id="checkBox-form">
                <input type="checkbox" class="form-check-input" id="checkBox" name="checkBox" value="1" onclick="myFunction()">                
                <label class="form-check-label" for="checkBox">Ubah Gambar</label>
              </div>  
            </div>
          </div>         
        </div>
        <div class="form-group">            
            <div><small>* Ukuran file harus di bawah 1 MB.</small></div>
            <div><small>* Format file harus jpg, jpeg atau png.</small></div>                        
        </div>         
        <div class="form-group">
          <label>Judul</label>
          <input type="text" name="judul" id="judul" class="form-control form-control-sm col">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control form-control-sm" name="isi1" id="isi1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi2" id="isi2" rows="2"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi3" id="isi3" rows="2"></textarea>
        </div>
        <div class="form-group">
          <textarea class="form-control form-control-sm" name="isi4" id="isi4" rows="2"></textarea>
        </div>               
      </div>
      
      <div class="modal-footer">
        <input type="hidden" name="slide_id" id="slide_id">      
        <button type="button" class="btn btn-secondary btn-sm" id="batalBtn" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success btn-sm" id="saveSlide">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">

    function myFunction() {
      var checkBox_btn = document.getElementById("checkBox");
      var browseFoto = document.getElementById("foto");
      if (checkBox_btn.checked == true){
        browseFoto.style.display = "block";
        //alert('checked');
      } else {
        browseFoto.style.display = "none";
        //alert('unchecked');
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
