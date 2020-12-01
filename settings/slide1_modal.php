<!-- Modal -->
<form method="POST" enctype="multipart/form-data" id="slide_form">
  <div class="modal fade" id="slide1_modal">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="slide-modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">    
              <label>Gambar</label>
            <div>
              <img id="images" width="180px" height="120px" class="img border border-secondary">           
            </div>        
            <div>
              <small><label id="filename" name="filename"></label></small>
            </div>       
        </div>
        <div class="form-group">                                        
            <div class="custom-control custom-checkbox mr-sm-2" id="checkBox-form">
              <input type="checkbox" class="form-check-input" id="checkBox" name="checkBox" onclick="myFunction()" />                       
              <label class="form-check-label" for="checkBox">Ubah Gambar</label>
              <input type="hidden" name="checkBoxValue" id="checkBoxValue" class="form-control form-control-sm col" value="" placeholder="checkBoxValue">
              <input type="hidden" name="tmp_filename" id="tmp_filename" class="form-control form-control-sm col" placeholder="tmp_filename">  
            </div>              
        </div>
        <div class="form-group">                      
              <input type="file" name="foto" id="foto" class="btn btn-sm btn-outline-info" onchange="previewImage2();" />            
        </div>
        <div class="form-group">            
            <div>
                <small>* Ukuran file harus di bawah 2 MB.</small>
            </div>
            <div>
                <small>* Format file harus jpg, jpeg atau png.</small>
            </div>                        
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
            <label for="exampleFormControlSelect1">Status Slide</label>
            <select name="slide_status" id="slide_status" class="form-control form-control-sm col-md-2">
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option> 
            </select>
        </div>
        <div class="form-group">
          <small><strong>HTML Style:</strong></small>
          <ul>
            <li>Tulisan lebih besar, gunakan sintaks &#60h1&#62Contoh teks&#60&#47h1&#62</li>
            <li>Tambah garis bawah, gunakan sintaks &#60u&#62<u>Contoh teks</u>&#60&#47u&#62</li>
            <li>Tulisan miring, gunakan sintaks &#60i&#62<i>Contoh teks</i>&#60&#47i&#62</li>
          </ul>
        </div>
      </div>
      
      <div class="modal-footer">        
          <input type="hidden" name="slide_id" id="slide_id">      
          <input type="button" class="btn btn-sm btn-outline-pastel" id="cancel_slide" data-dismiss="modal" value="Keluar">
          <input type="button" class="btn btn-sm btn-outline-pastel" id="save_slide" onclick="myFunction()" value="Simpan">        
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
      const button = document.querySelector('save_slide');

      if (checkBox_btn.checked == true){
        browseFoto.style.display = "block";
        textBoxValue.value = "checked";  
        document.getElementById("save_slide").disabled = true;   
      } else {
        browseFoto.style.display = "none";    
        textBoxValue.value = "";
        document.getElementById("save_slide").disabled = false;  
      }

    }
    
    function previewImage2() {

      document.getElementById("images").style.display = "block";
      document.getElementById("save_slide").disabled = false;
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("foto").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("images").src = oFREvent.target.result;
      };
      
    };   
</script>