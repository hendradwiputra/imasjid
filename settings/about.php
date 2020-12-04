<div class="col-md-12 order-md-1">
                
    <div class="form-group">
      <h4><span><u>UI & UX</u></span> Designer</h4>
      <p><i class="fas fa-envelope-open-text"></i> hendra.doank@gmail.com</p> 
      <p><i class="fas fa-phone-square-alt"></i> +62-811-6077-81</p>                  
      <p><i class="fab fa-github"></i> <a href="https://github.com/hendradwiputra/imasjid">https://github.com/hendradwiputra/imasjid</a></p>                  
    </div>
    
    <br>                

    <h4>Tentang <span><u>Hak Cipta</u></span></h4>
    <p>
      Aplikasi ini <strong><u>bebas</u></strong> dipakai/dikembangkan oleh siapa saja semata-mata hanya untuk kepentingan masjid. 
      <strong><u>Dilarang</u></strong> memperjualbelikan aplikasi ini dengan <strong><u>alasan apapun</u></strong>.      
    </p>
    <p>
      Mohon <strong><u>tetap mencantumkan nama saya</u></strong> jika ada modifikasi di aplikasi ini.
    </p>
    <p>
      Jika ke depannya aplikasi ini dipakai di suatu masjid, mohon informasikan ke saya nama masjid, alamat, beserta tampilan akhirnya.
      Ini hanya sebagai tracking agar saya tahu berapa banyak masjid yg menggunakan aplikasi ini. 
    </p>

    <br>                

    <h4>Tentang Aplikasi</h4>    
    <p>
      Aplikasi ini dikembangkan dengan mengunakan PHP, Javascript dan MySQL Database. Didukung dengan Bootstrap framework & Fontawesome.
      Aplikasi ini berjalan dengan baik di Raspberry Pi 4 Model 8GB dengan menggunakan Argon ONE Pi 4 Raspberry Pi Case. Lengkapi Raspberry anda dengan
      RTC (Real Time Clock) karena Raspberry tidak menyertakan battery CMOS dalam paket nya.
    </p>

    <br>                
    
    <h4>Contributor</h4>
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col" width="10%">#</th>
          <th scope="col" width="30%">Nama</th>
          <th scope="col" width="70%">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>Hamid Zarrabi-Zadeh</td>
          <td>Pembuat algoritma waktu sholat. Download link : <a href="http://praytimes.org">http://praytimes.org</a></td>      
        </tr>
      </tbody>
    </table>

    <br>
    
    <h4>Version</h4>
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col" width="10%">#</th>
          <th scope="col" width="30%">Versi</th>
          <th scope="col" width="70%">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td scope="row">1</td>
            <td>versi 1.0</td>
            <td>Pembuatan Aplikasi</td>      
        </tr>
        <tr>
            <td scope="row">2</td>
            <td>versi 1.1</td>
            <td>Tambah fitur lock screen & ubah tampilan dashboard</td>      
        </tr>
        <tr>
            <td scope="row">3</td>
            <td>versi 1.2</td>
            <td>Tambah fitur lock screen sholat 5 waktu, sholat isyroq, sholat jum'at & ganti themes</td>      
        </tr>
      </tbody>
    </table>
    <br>

    <?php
        $tahun = date('Y');
        $create_date = "2020";
                
        if ($create_date == $tahun) {
		        $copyright_years = $create_date;
		    } else {
		        $copyright_years = $create_date . " - " . $tahun;
		    }
                  
        echo "<strong><i class='far fa-copyright'></i>" .$copyright_years. " . Create with <i class='fas fa-heart'></i> and <i class='fas fa-coffee'></i></strong>";
                  
    ?>
  </div>
</div>