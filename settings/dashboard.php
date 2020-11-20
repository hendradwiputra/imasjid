<?php 
    
    include('../scripts/view_settings.php'); 
    include('slideModal.php'); 
    include('hadistModal.php'); 
    $url = "http://" .$_SERVER["HTTP_HOST"] . "/imasjid" ;

?>
<form method="POST" id="setting_form" enctype="multipart/form-data">
    <body>
        <nav class="navbar navbar-dark sticky-top bg-pastel flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo $url ?>">iMasjid</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <!--<a class="nav-link" href="#">Sign out</a>-->
                    <button type="button" class="btn btn-md btn-pastel" id="saveSetting"><i class="far fa-save"></i> Update Data</button>            
                </li>
            </ul>
            
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3" id="list-tab" role="tablist">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link active" id="list-pengaturan-list" data-toggle="list" href="#list-pengaturan" role="tab" aria-controls="pengaturan">                                    
                                    <i class="fas fa-tools"></i> Pengaturan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-notifikasi-list" data-toggle="list" href="#list-notifikasi" role="tab" aria-controls="notifikasi">
                                    <i class="far fa-bell"></i> Notifikasi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-teks-list" data-toggle="list" href="#list-teks" role="tab" aria-controls="teks">
                                    <i class="far fa-file-alt"></i> Teks Berjalan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-slide-list" data-toggle="list" href="#list-slide" role="tab" aria-controls="slide">
                                    <i class="far fa-file-powerpoint"></i> Slide
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-hadist-list" data-toggle="list" href="#list-hadist" role="tab" aria-controls="hadist">
                                    <i class="fas fa-database"></i> Kumpulan Hadist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about">
                                    <i class="fab fa-slack"></i> Tentang Aplikasi
                                </a>
                            </li>
          
                        </ul>
                    </div>
                </nav> <!-- End Sidebar -->


                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="tab-content" id="nav-tabContent">
          
                    <div class="tab-pane fade show active" id="list-pengaturan" role="tabpanel" aria-labelledby="list-pengaturan-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Dasar</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <input type="hidden" name="setting_id" id="setting_id" value="<?php echo $setting_id; ?>">                                    
                                </div>          
                            </div>                            
                        </div>
                        <?php include("pengaturan.php") ?>      
                    </div>

                    <div class="tab-pane fade" id="list-notifikasi" role="tabpanel" aria-labelledby="list-notifikasi-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Adzan, Iqomah & Informasi</h1>                            
                        </div> 
                        <?php include("notifikasi.php") ?>       
                    </div> 

                    <div class="tab-pane fade" id="list-teks" role="tabpanel" aria-labelledby="list-teks-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Teks Berjalan</h1>                            
                        </div>
                        <?php include("teks_berjalan.php") ?>      
                    </div>

                    <div class="tab-pane fade" id="list-slide" role="tabpanel" aria-labelledby="list-slide-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Pengaturan Slide</h1> 
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-md btn-outline-pastel" id="add_slide">Tambah Slide</button> 
                                </div>          
                            </div>                    
                        </div>  
                        <?php include("slide.php") ?>     
                    </div> 

                    <div class="tab-pane fade" id="list-hadist" role="tabpanel" aria-labelledby="list-hadist-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Kumpulan Hadist</h1> 
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button type="button" class="btn btn-md btn-outline-pastel" id="add_hadist">Tambah Hadist</button> 
                                </div>          
                            </div>                           
                        </div> 
                        
                        <div class="col-md-12 order-md-1">                            
                            <div class="form-group">  
                                <?php include('view_hadist.php'); ?>
                            </div>
                        </div>
                    </div> 

                    <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                            <!--<h1 class="h2">Informasi</h1>-->                            
                        </div>
                        <?php include('about.php'); ?>     
                    </div> 

                </main>


            </div>
        </div>
    </body>
</form>