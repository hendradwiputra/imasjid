<?php
	include('header.php');
	include('sidebar.php');
  include('../scripts/retrieve.php');
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">                 
  <div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
        <div class="card">
          <h5 class="card-header">Upload Gambar</h5>
            <div class="card-body">
                <div class="form-group">
                  <label>Pilih Gambar</label>                  
                  <div>
                    <img id="image-preview" alt="image preview" class="image-preview border border-dark">
                  </div>                             
                  <input type="file" name="file" id="file" class="btn btn-sm btn-outline-primary"  onchange="previewImage();"/>                  
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="description" id="description" class="form-control col-md-8">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-outline-primary" id="uploadBtn">Upload</button>  
                </div>                
                <br>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Gallery</label>
                  <div class="media">
                    <?php include('../settings/view_images.php'); ?>                    
                  </div> 
                </div>       
            </div>
        </div>
    </div>
  </div>
</main>

<script type="text/javascript">
  // https://agung-setiawan.com/preview-image-before-upload/
    function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
 
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };   
</script>

<?php include('footer.php'); ?>
