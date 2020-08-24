<?php	
	// Prayer Times Calculator, Sample Usage
	// By: Hamid Zarrabi-Zadeh
	// Inputs : $method, $year, $latitude, $longitude, $timeZone
			
	include('PrayTime.php');
	
	if (!isset($method) || !isset($year) )
		list($method, $year, $latitude, $longitude, $timeZone) = array(5, 2020, 0.406393, 101.845164, 7);	

		$prayTime = new PrayTime($method);
		$day = date('d M Y');
		$date = strtotime($year);
		$times = $prayTime->getPrayerTimes($date, $latitude, $longitude, $timeZone);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>iMasjid</title>
</head>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css"> 

<!-- FontAwesome -->
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/fontawesome.css"> 
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/regular.css">
<link rel="stylesheet" href="./assets/vendor/fontawesome/css/solid.css">

<link href="./assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="./assets/css/style.css" rel="stylesheet">
<!-- Hijri Calendar JS -->
<script type="text/javascript" src="./assets/js/hijricalendar.js"></script>
<!-- Bootstrap JS -->
<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
	//----------------------- Copyright Block ----------------------
	// http://w3schools.com/js/tryit.asp?filename=tryjs_timing_clock
	function startTime() {
  		var today = new Date();
  		// Variable untuk dynamic time
  		var h = today.getHours();
  		var m = today.getMinutes();
  		var s = today.getSeconds();
  		// Variable untuk bulan masehi
		var tahun = today.getFullYear();
		var bulan = today.getMonth();
		var month = today.getMonth();
		var tanggal = today.getDate();
		var hari = today.getDay();      	
		// Variable to add zero in front of numbers < 10
  		h = checkTime(h);
  		m = checkTime(m);
  		s = checkTime(s);

  		// Footer
        var create_date = "2020";
		if (create_date == tahun) {
			var copyright_years = create_date;
		} else {
			var copyright_years = create_date + " - " + tahun;
		}
		
		document.getElementById("copyright").innerHTML = " " + "<i class='fas fa-info'></i><strong>Masjid<small><strong>v1.0</strong></small> " + "<i class='far fa-copyright'></i>" + " Masjid Raya Nurul Mubarok " + copyright_years + "</strong>";
  //--------------------------------------------------------------

  //----------------------- Copyright Block ----------------------
  // By: Hendra Dwi Putra

      // Convert nama hari ke Indonesia
       	switch(hari) {
        	case 0: hari = "Minggu"; break;
        	case 1: hari = "Senin"; break;
        	case 2: hari = "Selasa"; break;
        	case 3: hari = "Rabu"; break;
        	case 4: hari = "Kamis"; break;
        	case 5: hari = "Jum'at"; break;
        	case 6: hari = "Sabtu"; break;
      	}     

      	// Convert nama bulan ke Indonesia
      	switch(bulan) {
        	case 0: bulan = "Jan"; break;
        	case 1: bulan = "Feb"; break;
        	case 2: bulan = "Mar"; break;
        	case 3: bulan = "Apr"; break;
        	case 4: bulan = "Mei"; break;
        	case 5: bulan = "Jun"; break;
        	case 6: bulan = "Jul"; break;
        	case 7: bulan = "Agu"; break;
        	case 8: bulan = "Sepr"; break;
        	case 9: bulan = "Okt"; break;
        	case 10: bulan = "Nov"; break;
        	case 11: bulan = "Des"; break;
      	}

      	// Convert nama bulan ke English
      	switch(month) {
        	case 0: month = "Jan"; break;
        	case 1: month = "Feb"; break;
        	case 2: month = "Mar"; break;
        	case 3: month = "Apr"; break;
        	case 4: month = "May"; break;
        	case 5: month = "Jun"; break;
        	case 6: month = "Jul"; break;
        	case 7: month = "Aug"; break;
        	case 8: month = "Sep"; break;
        	case 9: month = "Oct"; break;
        	case 10: month = "Nov"; break;
        	case 11: month = "Dec"; break;
      	}

      //----------------------- Copyright Block ----------------------
  		// By: Hendra Dwi Putra
    	  
		// Variable nama solat
		var solatShubuh = "Shubuh";
		var solatSyuruq = "Syuruq";
		var solatDzuhur = "Dzuhur";
		var solatAshar = "Ashar";
		var solatMaghrib = "Maghrib";
		var solatIsya = "Isya";
		document.getElementById('prayer1').innerHTML = solatShubuh;
		document.getElementById('prayer2').innerHTML = solatSyuruq;
		document.getElementById('prayer3').innerHTML = solatDzuhur;
		document.getElementById('prayer4').innerHTML = solatAshar;
		document.getElementById('prayer5').innerHTML = solatMaghrib;
		document.getElementById('prayer6').innerHTML = solatIsya;  
		
		// Ambil 2 digit pertama jam solat dan dikonversi ke dalam menit 
  		var hr0 = '<?php echo substr($times[0],0,2)*60; ?>';
  		var hr1 = '<?php echo substr($times[1],0,2)*60; ?>';
  		var hr2 = '<?php echo substr($times[2],0,2)*60; ?>';
  		var hr3 = '<?php echo substr($times[3],0,2)*60; ?>';
  		var hr5 = '<?php echo substr($times[5],0,2)*60; ?>';
  		var hr6 = '<?php echo substr($times[6],0,2)*60; ?>';
		
  		// Ambil 2 digit terakhir menit solat
		var min0 = '<?php echo substr($times[0],3,4); ?>'; // Waktu shubuh dalam menit
		var min1 = '<?php echo substr($times[1],3,4); ?>'; // Waktu syuruq dalam menit 
		var min2 = '<?php echo substr($times[2],3,4); ?>'; // Waktu dzuhur dalam menit  
		var min3 = '<?php echo substr($times[3],3,4); ?>'; // Waktu ashar dalam menit  
		var min5 = '<?php echo substr($times[5],3,4); ?>'; // Waktu maghrib dalam menit 
		var min6 = '<?php echo substr($times[6],3,4); ?>'; // Waktu isya dalam menit
		
		// Menjumlah 2 digit Jam yang sudah dikonversi ke menit dan menambahkan nya dengan 2 digit Menit untuk menentukan waktu solat
  		var waktushubuh = Number(hr0) + Number(min0);
  		var waktusyuruq = Number(hr1) + Number(min1);
  		var waktudzuhur = Number(hr2) + Number(min2);
  		var waktuashar = Number(hr3)  + Number(min3);
  		var waktumaghrib = Number(hr5) + Number(min5);
  		var waktuisya = Number(hr6)  + Number(min6);	
		
  		// Mengambil waktu solat dari file PrayTime.php
  		var shubuh = '<?php echo $times[0]; ?>';
  		var syuruq = '<?php echo $times[1]; ?>';
  		var dzuhur = '<?php echo $times[2]; ?>';
  		var ashar = '<?php echo $times[3]; ?>';
  		var maghrib = '<?php echo $times[5]; ?>';
  		var isya = '<?php echo $times[6]; ?>'; 
		
		// Menampilkan waktu solat ke html
		document.getElementById("shubuh").innerHTML = shubuh;
		document.getElementById("syuruq").innerHTML = syuruq;
		document.getElementById("dzuhur").innerHTML = dzuhur;
		document.getElementById("ashar").innerHTML = ashar;
		document.getElementById("maghrib").innerHTML = maghrib;
		document.getElementById("isya").innerHTML = isya;      
      
  		// Penambahan waktu solat dalam bilangan menit,digunakan untuk timer sholat yang sudah masuk
  		var timershubuh = 30;
  		var timersyuruq = 30;
  		var timerdzuhur = 30;
  		var timerashar = 30;
  		var timermaghrib = 30;
  		var timerisya = 30;
		
  		// Menentukan batas waktu solat ke solat yang lain nya  		
  		var batasshubuh = Number(waktushubuh) + Number(timershubuh);
  		var batassyuruq = Number(waktusyuruq) + Number(timersyuruq);
  		var batasdzuhur = Number(waktudzuhur) + Number(timerdzuhur);
  		var batasashar = Number(waktuashar) + Number(timerashar);
  		var batasmaghrib = Number(waktumaghrib) + Number(timermaghrib);
  		var batasisya = Number(waktuisya) + Number(timerisya);
  		
  		// Konversi Jam dan menit ke menit
  		var currentminute = (h * 60) + Number(m);  
  		// Durasi adzan dalam hitungan menit	  
		var durasiadzan = 5;	
		// Deklarasi variabel CSS
		var selected = "class='selected'";

  		if (currentminute <= waktushubuh) {
			var nextprayer = "Shubuh";
			var nextcounter = shubuh;  
			var starttime = waktushubuh;
			var endtime = batasshubuh;  
			var durasiiqomah = 10;
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[0],0,2); ?>';
			var min = '<?php echo substr($times[0],3,4); ?>';        
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + solatShubuh + "</h3>";
			document.getElementById('shubuh').innerHTML = "<h3 " + selected + ">" + shubuh + "</h3>";
			
        
		} else if (batasshubuh >= currentminute) {
  			var nextprayer = "Shubuh";
  			var nextcounter = shubuh;
  			var starttime = waktushubuh;
			var endtime = batasshubuh; 
			var durasiiqomah = 10;    
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[0],0,2); ?>';
			var min = '<?php echo substr($times[0],3,4); ?>';
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + solatShubuh + "</h3>";
			document.getElementById('shubuh').innerHTML = "<h3 " + selected + ">" + shubuh + "</h3>";
			
        
  		} else if (currentminute <= waktusyuruq) {
  			var nextprayer = "Syuruq";
  			var nextcounter = syuruq;  
  			var starttime = waktusyuruq;
			var endtime = batassyuruq;  
			var durasiadzan = 0;
			var durasiiqomah = 0;  
			var nextdate = tanggal;
			var label = "WAKTU " + nextprayer;
			document.getElementById('prayer2').innerHTML = "<h3 " + selected + ">" + solatSyuruq + "</h3>";
			document.getElementById('syuruq').innerHTML = "<h3 " + selected + ">" + syuruq + "</h3>";
			
       
		} else if (batassyuruq >= currentminute) {
			var nextprayer = "Syuruq";
			var nextcounter = syuruq;    
			var starttime = waktusyuruq;
			var endtime = batassyuruq;  
			var durasiadzan = 0;	
			var durasiiqomah = 0;  
			var nextdate = tanggal;
			var label = "WAKTU " + nextprayer;
			document.getElementById('prayer2').innerHTML = "<h3 " + selected + ">" + solatSyuruq + "</h3>";
			document.getElementById('syuruq').innerHTML = "<h3 " + selected + ">" + syuruq + "</h3>";	
			
        
		} else if (currentminute <= waktudzuhur) {
			if (hari == "Jum'at") { var nextprayer = "Jum'at"; var durasiiqomah = 0; } else { var nextprayer = "Dzuhur"; var durasiiqomah = 5; }  
			//var nextprayer = "Dzuhur";			
  			var nextcounter = dzuhur;  	
  			var starttime = waktudzuhur;
			var endtime = batasdzuhur;
			var durasiiqomah = 5;   			 
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[2],0,2); ?>';
			var min = '<?php echo substr($times[2],3,4); ?>';        
			document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + solatDzuhur + "</h3>";
			document.getElementById('dzuhur').innerHTML = "<h3 " + selected + ">" + dzuhur + "</h3>";
			
        
  		} else if (batasdzuhur >= currentminute) {
			if (hari == "Jum'at") { var nextprayer = "Jum'at"; var durasiiqomah = 0; } else { var nextprayer = "Dzuhur"; var durasiiqomah = 5; } 
			var nextprayer = "Dzuhur";
			var nextcounter = dzuhur;    
			var starttime = waktudzuhur;
			var endtime = batasdzuhur; 
			var durasiiqomah = 5;  
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[2],0,2); ?>';
			var min = '<?php echo substr($times[2],3,4); ?>';        
			document.getElementById('prayer3').innerHTML = "<h3 " + selected + ">" + solatDzuhur + "</h3>";
			document.getElementById('dzuhur').innerHTML = "<h3 " + selected + ">" + dzuhur + "</h3>";

        
		} else if (currentminute <= waktuashar) {
  			var nextprayer = "Ashar";
  			var nextcounter = ashar;  	
  			var starttime = waktuashar;
			var endtime = batasashar; 	
			var durasiiqomah = 5;
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[3],0,2); ?>';
			var min = '<?php echo substr($times[3],3,4); ?>';
			document.getElementById('prayer4').innerHTML = "<h3 " + selected + ">" + solatAshar + "</h3>";
			document.getElementById('ashar').innerHTML = "<h3 " + selected + ">" + ashar + "</h3>";
		
        	
  		} else if (batasashar >= currentminute) {
			var nextprayer = "Ashar";
			var nextcounter = ashar;    
			var starttime = waktuashar;
			var endtime = batasashar; 
			var durasiiqomah = 5;
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[3],0,2); ?>';
			var min = '<?php echo substr($times[3],3,4); ?>';
			document.getElementById('prayer4').innerHTML = "<h3 " + selected + ">" + solatAshar + "</h3>";
			document.getElementById('ashar').innerHTML = "<h3 " + selected + ">" + ashar + "</h3>";
			
       
		} else if (currentminute <= waktumaghrib) {
  			var nextprayer = "Maghrib";
  			var nextcounter = maghrib; 
  			var starttime = waktumaghrib;
			var endtime = batasmaghrib;   
			var durasiiqomah = 5; 
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[5],0,2); ?>';
			var min = '<?php echo substr($times[5],3,4); ?>';
			document.getElementById('prayer5').innerHTML = "<h3 " + selected + ">" + solatMaghrib + "</h3>";
			document.getElementById('maghrib').innerHTML = "<h3 " + selected + ">" + maghrib + "</h3>";
			
        		
  		} else if (batasmaghrib >= currentminute) {
			var nextprayer = "Maghrib";
			var nextcounter = maghrib;    
			var starttime = waktumaghrib;
			var endtime = batasmaghrib; 
			var durasiiqomah = 5;
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[5],0,2); ?>';
			var min = '<?php echo substr($times[5],3,4); ?>';
			document.getElementById('prayer5').innerHTML = "<h3 " + selected + ">" + solatMaghrib + "</h3>";
			document.getElementById('maghrib').innerHTML = "<h3 " + selected + ">" + maghrib + "</h3>";
			
        
		} else if (currentminute <= waktuisya) {
  			var nextprayer = "Isya";
  			var nextcounter = isya; 
  			var starttime = waktuisya;
			var endtime = batasisya;   
			var durasiiqomah = 10;  	
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[6],0,2); ?>';
			var min = '<?php echo substr($times[6],3,4); ?>';
			document.getElementById('prayer6').innerHTML = "<h3 " + selected + ">" + solatIsya + "</h3>";
			document.getElementById('isya').innerHTML = "<h3 " + selected + ">" + isya + "</h3>";
			
        		
  		} else if (batasisya >= currentminute) {
			var nextprayer = "Isya";
			var nextcounter = isya;    
			var starttime = waktuisya;
			var endtime = batasisya; 
			var durasiiqomah = 10; 
			var nextdate = tanggal;
			var label = "ADZAN " + nextprayer;
			var hr = '<?php echo substr($times[6],0,2); ?>';
			var min = '<?php echo substr($times[6],3,4); ?>';
			document.getElementById('prayer6').innerHTML = "<h3 " + selected + ">" + solatIsya + "</h3>";
			document.getElementById('isya').innerHTML = "<h3 " + selected + ">" + isya + "</h3>";
			
       
		} else if (batasisya <= currentminute) {
			var nextprayer = "Shubuh";
			var nextcounter = shubuh;
			var nextdate = tanggal + 1;
			var label = "ADZAN " + nextprayer;
			document.getElementById('prayer1').innerHTML = "<h3 " + selected + ">" + solatShubuh + "</h3>";
			document.getElementById('shubuh').innerHTML = "<h3 " + selected + ">" + shubuh + "</h3>";			
        
		} 

		// Pengaturan waktu iqomah dan awal solat berjamaah.
		var adzan_to_iqomah = Number(starttime) + Number(durasiadzan);
		var iqomah_to_solat = Number(adzan_to_iqomah) + Number(durasiiqomah);

  		// Kombinasi kalender masehi dah hijriah
		document.getElementById('penanggalan').innerHTML = hari + ", " + tanggal + " " + bulan + " " + tahun + " <i class='far fa-calendar-alt'></i> " + writeIslamicDate(-1) + "H";

		// Output Dynamic time
		document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
		var t = setTimeout(startTime, 500);

		//----------------------- Copyright Block ----------------------
		// https://www.geeksforgeeks.org/create-countdown-timer-using-javascript/		
		// Countdown Timer	  
		var countDownDate = new Date(month + " " + nextdate + "," + tahun + " " + nextcounter + ":00").getTime();   
				  
		// Update the count down every 1 second
		var x = setInterval(function() {

  			// Get today's date and time
  			var now = new Date().getTime();  			
  	
  			// Find the distance between now and the count down date
  			var distance = countDownDate - now;

  			// Time calculations for hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24)); 
  			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  			hours = checkTime(hours);
  			minutes = checkTime(minutes);
  			seconds = checkTime(seconds);

  			// Hitung mundur waktu solat berikut nya  		
  			document.getElementById("timer").innerHTML = nextprayer + " " + hours + ":" + minutes + ":" + seconds; 
        	
        	//----------------------- Copyright Block ----------------------	
			// By: Hendra Dwi Putra			
			// Mengganti Nama Solat Berikut nya dengan Label Adzan
        	if (distance < 0) {
          		clearInterval(x); 
          		//if (nextprayer == solatSyuruq) { //-->new line
          		if (durasiadzan == 0 ) { // command ini untuk mengabaikan perintah adzan untuk solat syuruq
          			document.getElementById("timer").innerHTML = "WAKTU " + nextprayer; 
          		} else {
          			document.getElementById("timer").innerHTML = label; 
          		}
          		
        	}  
        }, 1000);
		
		// Mengganti Label Adzan dengan Iqomah		
		//if (solatSyuruq == nextprayer) {
		//	document.getElementById("timer").innerHTML = label;
		//} else {
			if (currentminute >= adzan_to_iqomah) {
			var time = hr + ":" + (Number(min) + Number(durasiadzan) + Number(durasiiqomah));
            //var deadline = new Date("Aug 21, 2020 11:25:00").getTime();           
            var deadline = new Date(month + " " + nextdate + "," + tahun + " " + time + ":00").getTime();  

            var y = setInterval(function() { 
				var now = new Date().getTime(); 
				var t = deadline - now; 
				var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
				var seconds = Math.floor((t % (1000 * 60)) / 1000); 
          
				minutes = checkTime(minutes);
				seconds = checkTime(seconds);
            	
            	//if (nextprayer == solatSyuruq) { //-->new line
            	if (durasiiqomah == 0) { // command ini untuk mengabaikan waktu iqomah untuk solat syuruq dan jum'at
            		document.getElementById("timer").innerHTML = "WAKTU " + nextprayer; 
            	
            	} else {
            		var label = "IQOMAH " + minutes + ":" + seconds;
					document.getElementById("timer").innerHTML = label; 
            	}            	
				
				if (t < 0) { 
					clearInterval(y); 
					//if (nextprayer == solatSyuruq) { //-->new line
					if (durasiiqomah == 0) { // ganti label ke solat berikut nya jika timer sudah terpenuhi
            			document.getElementById("timer").innerHTML = "WAKTU " + nextprayer; 
					} else {
						var label = "WAKTU " + nextprayer; 
						document.getElementById("timer").innerHTML = label;
					}
				}				
            }, 1000); 			 
			}
		//}

				
	   }

	   //----------------------- Copyright Block ----------------------
	   // http://w3schools.com/js/tryit.asp?filename=tryjs_timing_clock
	   // Add zero in front of numbers < 10
	   function checkTime(i) {
  		  if (i < 10) {i = "0" + i}; 
  		  return i;
	   }    
	
</script>
<body onload="startTime()">
