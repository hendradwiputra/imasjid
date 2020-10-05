<h1>Jam Sholat Masjid [Moslem Prayer Time] - Development</h1>

<h2>Developer</h2>
Aplikasi ini menggunakan calculation method dari praytimes.org dan sudah di custom sedemikian rupa sesuai kebutuhan. Note : Saya ada lakukan tambahan perhitungan sholat mengikuti ketentuan Kemenag dengan Sudut Fajr 20 dan Isya 18.
<ul>
<li> Hendra Dwi Putra</li>
<li> hendra.doank@gmail.com</li> 
<li> 62-811-6077-81</li>                  
<li> https://github.com/hendradwiputra/imasjid</li>
</ul>

<h2>Catatan Penting</h2>
<p>Aplikasi ini <strong><u>BEBAS</u></strong> dipakai/dikembangkan oleh siapa saja dengan harapan saya bisa mendapatkan pahala jariyah dari aplikasi ini. <strong><u>DILARANG</u></strong> memperjualbelikan aplikasi ini.

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
