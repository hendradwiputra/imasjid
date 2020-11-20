<?php	
	// Reload page setiap 5 menit
  	$url1=$_SERVER['REQUEST_URI'];
  	header("Refresh: 300; URL=$url1");
	
	//Load script waktu sholat
	include('./scripts/PrayTime.php');

	//Load data
	include('./scripts/view_settings.php'); 

?>

<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>iMasjid</title>
</head>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css"> 
<!-- FontAwesome -->
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/fontawesome.css"> 
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/regular.css">
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/solid.css">
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/brands.css">
<!-- Ionicons -->
<link href="./assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="./assets/css/style.css" rel="stylesheet">
<!-- Jquery -->
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Hijri Calendar JS -->
<script type="text/javascript" src="./assets/js/hijricalendar.js"></script>
<!-- Template Main JS File -->
<script src="./assets/js/main.js"></script>

<?php
	$day1 = date('Y');	
	
	if (!isset($method) || !isset($year) )
		list($method, $year, $latitude, $longitude, $timeZone) = array($metode_perhitungan, $day1, $garis_lintang, $garis_bujur, $zona_waktu);

		$prayTime = new PrayTime($method);	
		$day = date('d M Y');
		$date = strtotime($year);
		$times = $prayTime->getPrayerTimes($date, $latitude, $longitude, $timeZone);	
?>

<script type="text/javascript">
	
	function startTime() {
  		var today = new Date();

  		var h = today.getHours();
  		var m = today.getMinutes();
  		var s = today.getSeconds();

		// Tambah angka 0 jika untuk angka yang lebih kecil dari < 10
		h = checkTime(h);
  		m = checkTime(m);
  		s = checkTime(s);

  		// Variable untuk bulan masehi		
		var tanggal = today.getDate();
		var bulan1	= today.getMonth();
		var bulan2 	= today.getMonth();
		var tahun 	= today.getFullYear();	
		var hari	= today.getDay();   
		
		// Konversi nama hari ke Indonesia
       	switch(hari) {
        	case 0: hari = "Ahad"; break;
        	case 1: hari = "Senin"; break;
        	case 2: hari = "Selasa"; break;
        	case 3: hari = "Rabu"; break;
        	case 4: hari = "Kamis"; break;
        	case 5: hari = "Jum'at"; break;
        	case 6: hari = "Sabtu"; break;
      	}     

		// Konversi nama bulan ke Indonesia
		switch(bulan1) {
        	case 0: bulan1 = "Jan"; break;
        	case 1: bulan1 = "Feb"; break;
        	case 2: bulan1 = "Mar"; break;
        	case 3: bulan1 = "Apr"; break;
        	case 4: bulan1 = "May"; break;
        	case 5: bulan1 = "Jun"; break;
        	case 6: bulan1 = "Jul"; break;
        	case 7: bulan1 = "Aug"; break;
        	case 8: bulan1 = "Sep"; break;
        	case 9: bulan1 = "Oct"; break;
        	case 10: bulan1 = "Nov"; break;
        	case 11: bulan1 = "Dec"; break;
		}
		  
      	switch(bulan2) {
        	case 0: bulan2 = "Januari"; break;
        	case 1: bulan2 = "Februari"; break;
        	case 2: bulan2 = "Maret"; break;
        	case 3: bulan2 = "April"; break;
        	case 4: bulan2 = "Mei"; break;
        	case 5: bulan2 = "Juni"; break;
        	case 6: bulan2 = "Juli"; break;
        	case 7: bulan2 = "Agustus"; break;
        	case 8: bulan2 = "September"; break;
        	case 9: bulan2 = "Oktober"; break;
        	case 10: bulan2 = "November"; break;
        	case 11: bulan2 = "Desember"; break;
      	}

		// Ambil Nama Sholat
		var prayer1_name 	= "<?php echo ucfirst($prayer1) ?>"
		var prayer2_name 	= "<?php echo ucfirst($prayer2) ?>"
		var prayer3_name 	= "<?php echo ucfirst($prayer3) ?>"
		var prayer4_name 	= "<?php echo ucfirst($prayer4) ?>"
		var prayer5_name 	= "<?php echo ucfirst($prayer5) ?>"
		var prayer6_name 	= "<?php echo ucfirst($prayer6) ?>"
		
		// Load variable ke file body.php
		document.getElementById("prayer1").innerHTML = prayer1_name;
		document.getElementById("prayer2").innerHTML = prayer2_name;
		document.getElementById("prayer3").innerHTML = prayer3_name;
		document.getElementById("prayer4").innerHTML = prayer4_name;
		document.getElementById("prayer5").innerHTML = prayer5_name;
		document.getElementById("prayer6").innerHTML = prayer6_name; 

  		// Mengambil waktu sholat dari file scripts/PrayTime.php
  		var prayer1_time 	= "<?php echo $times[0] ?>"
  		var prayer2_time 	= "<?php echo $times[1] ?>"
  		var prayer3_time 	= "<?php echo $times[2] ?>"
  		var prayer4_time 	= "<?php echo $times[3] ?>"
  		var prayer5_time 	= "<?php echo $times[5] ?>"
  		var prayer6_time 	= "<?php echo $times[6] ?>" 
		
		// Load variable waktu sholat ke file body.php
		document.getElementById("time1").innerHTML	 	= prayer1_time;
		document.getElementById("time2").innerHTML 		= prayer2_time;
		document.getElementById("time3").innerHTML 		= prayer3_time;
		document.getElementById("time4").innerHTML 		= prayer4_time;
		document.getElementById("time5").innerHTML 		= prayer5_time;
		document.getElementById("time6").innerHTML 		= prayer6_time;  	
		      
		/* Variabel ini digunakan untuk menentukan perpindahan label sholat ke sholat berikut nya.
		 * Misalkan : Label shubuh akan berpindah ke Syuruq setelah 30 menit
		 */
  		var durasi_shubuh 	= "<?php echo $durasi_shubuh ?>"
  		var durasi_syuruq 	= "<?php echo $durasi_syuruq ?>"
  		var durasi_dzuhur 	= "<?php echo $durasi_dzuhur ?>"
  		var durasi_ashar 	= "<?php echo $durasi_ashar ?>"
  		var durasi_maghrib 	= "<?php echo $durasi_maghrib ?>"
		var durasi_isya 	= "<?php echo $durasi_isya ?>"
		  
		// Konversi waktu sholat ke dalam format menit
		var waktu_shubuh 	= "<?php echo substr($times[0],0,2)*60 + substr($times[0],3,4) ?>"
  		var waktu_syuruq 	= "<?php echo substr($times[1],0,2)*60 + substr($times[1],3,4) ?>"
  		var waktu_dzuhur 	= "<?php echo substr($times[2],0,2)*60 + substr($times[2],3,4) ?>"
  		var waktu_ashar 	= "<?php echo substr($times[3],0,2)*60 + substr($times[3],3,4) ?>"
  		var waktu_maghrib 	= "<?php echo substr($times[5],0,2)*60 + substr($times[5],3,4) ?>"
		var waktu_isya 		= "<?php echo substr($times[6],0,2)*60 + substr($times[6],3,4) ?>"
		
  		// Menentukan batas waktu sholat	
  		var batas_shubuh 	= Number(waktu_shubuh) + Number(durasi_shubuh);
  		var batas_syuruq 	= Number(waktu_syuruq) + Number(durasi_syuruq);
  		var batas_dzuhur 	= Number(waktu_dzuhur) + Number(durasi_dzuhur);
  		var batas_ashar 	= Number(waktu_ashar) + Number(durasi_ashar);
  		var batas_maghrib 	= Number(waktu_maghrib) + Number(durasi_maghrib);
  		var batas_isya 		= Number(waktu_isya) + Number(durasi_isya);
  		
  		// Konversi jam dan menit ke menit untuk menentukan currenttime
  		var current_minute = (h * 60) + Number(m); 

  		// Ambil durasi adzan dan konversi ke dalam menit	  
		var durasiadzan = <?php echo $durasi_adzan; ?>;	

		// Memberi warna background berbeda untuk label sholat yang sedang aktif
		var selected = "class='selected'";

  		if (current_minute <= waktu_shubuh) {
			var nextprayer 	= prayer1_name;
			var nextcounter = prayer1_time;  
			var starttime 	= waktu_shubuh;
			var endtime 	= batas_shubuh;  			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_shubuh ?>"			
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + prayer1_name + "</h3>";
			document.getElementById('time1').innerHTML = "<h2 " + selected + ">" + prayer1_time + "</h2>";
			
		} else if (batas_shubuh >= current_minute) {
  			var nextprayer 	= prayer1_name;
  			var nextcounter = prayer1_time;
  			var starttime 	= waktu_shubuh;
			var endtime 	= batas_shubuh; 			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_shubuh ?>"
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + prayer1_name + "</h3>";
			document.getElementById('time1').innerHTML = "<h2 " + selected + ">" + prayer1_time + "</h2>";
			
  		} else if (current_minute <= waktu_syuruq) {
  			var nextprayer 	= prayer2_name;
  			var nextcounter = prayer2_time;  
  			var starttime 	= waktu_syuruq;
			var endtime 	= batas_syuruq;  
			var nextdate 	= tanggal;
			var durasiadzan   = 0;
			var durasi_iqomah = 0;
			document.getElementById('prayer2').innerHTML = "<h3 " + selected + ">" + prayer2_name + "</h3>";
			document.getElementById('time2').innerHTML = "<h2 " + selected + ">" + prayer2_time + "</h2>";
			
		} else if (batas_syuruq >= current_minute) {
			var nextprayer 	= prayer2_name;
			var nextcounter = prayer2_time;    
			var starttime 	= waktu_syuruq;
			var endtime 	= batas_syuruq; 
			var nextdate 	= tanggal;
			var durasiadzan   = 0;
			var durasi_iqomah = 0;
			document.getElementById('prayer2').innerHTML = "<h3 " + selected + ">" + prayer2_name + "</h3>";
			document.getElementById('time2').innerHTML = "<h2 " + selected + ">" + prayer2_time + "</h2>";	
			
		} else if (current_minute <= waktu_dzuhur) {
			if (hari == "Jum'at") { 
				var nextprayer 		= hari; 
				var durasi_iqomah = 0;
				document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + nextprayer + "</h3>";
			} else { 
				var nextprayer 		= prayer3_name; 	
				var durasi_iqomah = "<?php echo $iqomah_dzuhur ?>";
				document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + prayer3_name + "</h3>";
			}  				
  			var nextcounter = prayer3_time;  	
  			var starttime 	= waktu_dzuhur;
			var endtime 	= batas_dzuhur;			 
			var nextdate 	= tanggal;				
			document.getElementById('time3').innerHTML = "<h2 " + selected + ">" + prayer3_time + "</h2>";
			
  		} else if (batas_dzuhur >= current_minute) {
			if (hari == "Jum'at") { 
				var nextprayer 		= hari; 
				var durasi_iqomah = 0;
				document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + nextprayer + "</h3>";
			} else {
				var nextprayer 		= prayer3_name; 	
				var durasi_iqomah = "<?php echo $iqomah_dzuhur ?>";
				document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + prayer3_name + "</h3>";  
			} 
			var nextcounter = prayer3_time;    
			var starttime 	= waktu_dzuhur;
			var endtime 	= batas_dzuhur; 
			var nextdate 	= tanggal;	
			var durasi_iqomah = "<?php echo $iqomah_dzuhur ?>";	
			document.getElementById('time3').innerHTML = "<h2 " + selected + ">" + prayer3_time + "</h2>";

		} else if (current_minute <= waktu_ashar) {
  			var nextprayer 	= prayer4_name;
  			var nextcounter = prayer4_time;  	
  			var starttime 	= waktu_ashar;
			var endtime 	= batas_ashar; 				
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_ashar ?>";	
			document.getElementById('prayer4').innerHTML = "<h3 " + selected + ">" + prayer4_name + "</h3>";
			document.getElementById('time4').innerHTML = "<h2 " + selected + ">" + prayer4_time + "</h2>";
		
  		} else if (batas_ashar >= current_minute) {
			var nextprayer 	= prayer4_name;
			var nextcounter = prayer4_time;    
			var starttime 	= waktu_ashar;
			var endtime 	= batas_ashar; 			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_ashar ?>";	
			document.getElementById('prayer4').innerHTML = "<h3 " + selected + ">" + prayer4_name + "</h3>";
			document.getElementById('time4').innerHTML = "<h2 " + selected + ">" + prayer4_time + "</h2>";
			
		} else if (current_minute <= waktu_maghrib) {
  			var nextprayer 	= prayer5_name;
  			var nextcounter = prayer5_time; 
  			var starttime 	= waktu_maghrib;
			var endtime 	= batas_maghrib;   			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_maghrib ?>";	
			document.getElementById('prayer5').innerHTML = "<h3 " + selected + ">" + prayer5_name + "</h3>";
			document.getElementById('time5').innerHTML = "<h2 " + selected + ">" + prayer5_time + "</h2>";
					
  		} else if (batas_maghrib >= current_minute) {
			var nextprayer 	= prayer5_name;
			var nextcounter = prayer5_time;    
			var starttime 	= waktu_maghrib;
			var endtime 	= batas_maghrib; 			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_maghrib ?>";	
			document.getElementById('prayer5').innerHTML = "<h3 " + selected + ">" + prayer5_name + "</h3>";
			document.getElementById('time5').innerHTML = "<h2 " + selected + ">" + prayer5_time + "</h2>";
			
		} else if (current_minute <= waktu_isya) {
  			var nextprayer 	= prayer6_name;
  			var nextcounter = prayer6_time; 
  			var starttime 	= waktu_isya;
			var endtime 	= batas_isya;   			
			var nextdate 	= tanggal;
			var durasi_iqomah = "<?php echo $iqomah_isya ?>";	
			document.getElementById('prayer6').innerHTML = "<h3 " + selected + ">" + prayer6_name + "</h3>";
			document.getElementById('time6').innerHTML = "<h2 " + selected + ">" + prayer6_time + "</h2>";
					
  		} else if (batas_isya >= current_minute) {
			var nextprayer 	= prayer6_name;
			var nextcounter = prayer6_time;    
			var starttime 	= waktu_isya;
			var endtime 	= batas_isya; 			
			var nextdate 	= tanggal;	
			var durasi_iqomah = "<?php echo $iqomah_isya ?>";			
			document.getElementById('prayer6').innerHTML = "<h3 " + selected + ">" + prayer6_name + "</h3>";
			document.getElementById('time6').innerHTML = "<h2 " + selected + ">" + prayer6_time + "</h2>";
			
		} else if (batas_isya <= current_minute) {
			var nextprayer 	= prayer1_name;
			var nextcounter = prayer1_time;
			var nextdate 	= tanggal + 1;
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + prayer1_name + "</h3>";
			document.getElementById('time1').innerHTML = "<h2 " + selected + ">" + prayer1_time + "</h2>";			
        
		} 	
		
		// Dynamic clock		 
		document.getElementById('jam').innerHTML = h + ":" + m + ".<small>" + s + "</small>";		
		var t = setTimeout(startTime, 500);	

		// Kombinasi kalender masehi dah hijriah  		
		document.getElementById('penanggalan').innerHTML = hari + ", " + tanggal + " " + bulan2 + " " + tahun + " <i class='far fa-calendar-alt'></i> " + writeIslamicDate(<?php echo $koreksi_hijriah; ?>) + " H ";
			
		// Tampilkan lock screen untuk sholat 5 waktu
		var lockScreen = "<?php echo $kunci_layar ?>";

		if ( current_minute >= Number(starttime) - Number(lockScreen) && current_minute < Number(starttime) + Number(durasiadzan) + Number(durasi_iqomah) ) {

			var val1 = new URLSearchParams();
			var val2 = new URLSearchParams();
			var val3 = new URLSearchParams();

			val1.append("prayer", nextprayer);
			val2.append("time", nextcounter);
			val3.append("day", hari);

			var url = "<?php echo $_SERVER['HTTP_HOST'] ?>";
			location.href = "http://" + url + "/imasjid/timer.php?" + val1.toString() + "&" + val2.toString() + "&" + val3.toString();

		} 
		
		/*
		// Testing formula	
		//var nextprayer = "Syuruq";
		var starttime = 630;		
		var lockScreen = 5;
		
		if ( current_minute >= Number(starttime) - Number(lockScreen) && current_minute < Number(starttime) + Number(durasiadzan) + Number(durasi_iqomah) ) {
			var val1 = new URLSearchParams();
			var val2 = new URLSearchParams();
			var val3 = new URLSearchParams();

			val1.append("prayer", nextprayer);
			val2.append("time", nextcounter);
			val3.append("day", hari);

			location.href = "http://localhost/imasjid/timer.php?" + val1.toString() + "&" + val2.toString() + "&" + val3.toString();

		} 	
		*/

		// Hitung mundur waktu sholat		 				
		var countDownDate = new Date(bulan1 + " " + nextdate + "," + tahun + " " + nextcounter + ":00").getTime();   
				  
		var x = setInterval(function() {

  			// Get datetime
  			var now = new Date().getTime();  			
  	
  			// Menghitung selisih waktu sholat berikut nya dengan waktu yang sedang berjalan
  			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds			 
			var days 	= Math.floor(distance / (1000 * 60 * 60 * 24)); 
  			var hours 	= Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Menambahkan digit 0 di depan angka yang < 10
  			hours 	= checkTime(hours);
  			minutes = checkTime(minutes);
  			seconds = checkTime(seconds);

  			// Hitung mundur waktu solat berikut nya dari waktu saat ini    			
  			document.getElementById("timer").innerHTML = nextprayer + " - " + hours + ":" + minutes + ".<small>" +  seconds + "</small>";  			
						
			// Jika selisih waktu sholat dengan waktu saat ini < 0, clear timer
        	if (distance < 0) {
          		clearInterval(x);    

				document.getElementById("timer").innerHTML = "Waktu " + nextprayer; 
						
			} 
        }, 1000);

			  
	}

	// Add zero in front of numbers < 10	
	function checkTime(i) {
  		  if (i < 10) {i = "0" + i}; 
  		  return i;
	}    

</script>
<body onload="startTime()">
