<h1>Jam Sholat Masjid 'Prayer Time'</h1>
<img src="https://github.com/hendradwiputra/imasjid/blob/1.0/assets/images/image3.jpg" height="300px" width="600px">
<img src="https://github.com/hendradwiputra/imasjid/blob/1.0/assets/images/image1.jpg" height="300px" width="600px">
<img src="https://github.com/hendradwiputra/imasjid/blob/1.0/assets/images/image2.jpg" height="300px" width="600px">
<br>
<p>Aplikasi ini menggunakan algoritma perhitungan sholat dari Hamid Zarrabi-Zadeh. File bisa didownload di http://praytimes.org</p>
<br>
<h2>UX & UI Designer</h2>
<ul>
<li> Hendra Dwi Putra</li>
<li> hendra.doank@gmail.com</li> 
<li> 62-811-6077-81</li>                  
<li> https://github.com/hendradwiputra/imasjid</li>
</ul>

<h2>Tentang Hak Cipta</h2>
<p>Aplikasi ini <u>bebas</u> dipakai/dikembangkan oleh siapa saja semata-mata hanya untuk kepentingan masjid. <u>Dilarang</u> memperjualbelikan aplikasi ini dengan <u>alasan   apapun</u>.</p>
<p>Mohon <u>tetap mencantumkan nama saya</u> jika ada modifikasi di aplikasi ini.</p>
<p>Jika ke depannya aplikasi ini dipakai di suatu masjid, mohon informasikan ke saya nama masjid, alamat, beserta tampilan akhirnya. Ini hanya sebagai tracking agar saya tahu berapa banyak masjid yg menggunakan aplikasi ini.</p>


<h2>Instalasi</h2>
<ul>
  <li><h3>Linux</h3></li>
    <ul>
      <li>1. Install Apache https://pimylifeup.com/raspberry-pi-apache</li>
      <li>2. Ubah permission</li>
      <ul>
        <li>sudo usermod -a -G www-data pi ----> [pi adalah nama user yang dipakai untuk login]</li>
        <li>sudo chown -R -f www-data:www-data /var/www/html</li>
      </ul>
      <li>3. Install PHP</li>
      <ul>
        <li>sudo apt install php7.3 php7.3-mbstring php7.3-mysql php7.3-curl php7.3-gd php7.3-zip -y</li>
      </ul>
      <li>4. Install MySQL https://pimylifeup.com/raspberry-pi-mysql</li>
      <ul>
        <li>sudo apt install mariadb-server</li>
        <li>sudo apt-install php-mysql</li>
      </ul>
      <li>5. Buat database</li>
      <ul>
        <li>sudo mysql -u root</li>
        <li>create database masjid;</li>
        <li>quit</li>
      </ul>      
      <li>6. Download dan extract folder imasjid.</li>
        <ul>
          <li>sudo cp -R imasjid /var/www/html</li>
          <li>sudo chown pi /var/www/html/imasjid --> pi adalah nama user yang dipakai buat logon ke linux nya</li>
          <li>sudo chmod -R 767 /var/www/html/imasjid</li>
        </ul>
      </li>
      <li>7. Restore database from file</li>
        <ul>
          <li>sudo mysql -u root masjid < masjid.sql  --> saya jalankan perintah ini dari folder /var/www/html/imasjid</li>
        </ul>
      </li>
      <li>8. Grant user ke database masjid</li>
        <ul>
          <li>grant all on masjid.* to monitor@localhost identified by 'monitor';</li>
          <li>flush privileges;</li>
        </ul>
      </li>
    </ul>
</ul>
