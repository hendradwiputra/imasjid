<?php 
    
    include('./scripts/view_settings.php');     

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iMasjid Timer</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome / ionicons-->
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/fontawesome.css"> 
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/regular.css">
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/solid.css">  
  
  <!-- Template Main CSS File -->
  <link href="./assets/css/timer.css" rel="stylesheet">

</head>

<audio id="timer-beep">
    <source src="./sounds/Sounds-1.mp3" type="audio/mpeg"> 
</audio>

<audio id="timer-beep2">
    <source src="./sounds/Sounds-1.mp3" type="audio/mpeg">
</audio>

<body onload="startTime()">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url(./assets/images/background/timer-bg.jpg)">
    
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-xl-12 col-lg-12 text-center">
            <h1 id="label"></h1>         
            <h2 id="message"></h2>
          </div>

        </div>
      
        <div class="row icon-boxes">

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">            
              <h4><span>Menit</span></h4>
              <h1 id="menit" class="description"></h1>
            </div>
          </div>       

          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">            
              <h4 class="title"><span>Detik</span></h4>
              <h1 id="detik" class="description"></h1>
            </div>
          </div>

        </div>
      </div>

  </section>
  <!-- ======= Hero Section ======= -->

</body>

<script>

  function startTime() {
    var today = new Date();

    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    
    // Variable untuk bulan masehi		
		var tanggal = today.getDate();
		var bulan	  = today.getMonth();		
		var tahun 	= today.getFullYear();	
    
    switch(bulan) {
        	case 0: bulan = "Jan"; break;
        	case 1: bulan = "Feb"; break;
        	case 2: bulan = "Mar"; break;
        	case 3: bulan = "Apr"; break;
        	case 4: bulan = "May"; break;
        	case 5: bulan = "Jun"; break;
        	case 6: bulan = "Jul"; break;
        	case 7: bulan = "Aug"; break;
        	case 8: bulan = "Sep"; break;
        	case 9: bulan = "Oct"; break;
        	case 10: bulan = "Nov"; break;
        	case 11: bulan = "Dec"; break;
		}
     
    var val1 = new URLSearchParams(window.location.search);
    var val2 = new URLSearchParams(window.location.search);
    var val3 = new URLSearchParams(window.location.search);

    var icon    = "<div class='spinner-border text-primary' role='status'><span class='sr-only'>Loading...</span></div>";
    var spinner = " <div class='spinner-grow text-primary' role='status'><span class='sr-only'>Loading...</span></div>";

    var url = "<?php echo $_SERVER['HTTP_HOST'] ?>";

    var prayername = val1.get("prayer").toLowerCase();    
    var prayertime = val2.get("time");      
    var day        = val3.get("day").toLowerCase();

    var teks_sebelum_adzan  = "<?php echo $teks_sebelum_adzan ?>"
    var teks_adzan          = "<?php echo $teks_adzan ?>"
    var teks_iqomah         = "<?php echo $teks_iqomah ?>"
    var teks_sebelum_sholat = "<?php echo $teks_sebelum_sholat ?>" 
        
    var countDownDate = new Date(bulan + " " + tanggal + "," + tahun + " " + prayertime + ":00").getTime();    
   
    var w = setInterval(function() 
    { 
        var now = new Date().getTime(); 
        var t = countDownDate - now; 
                
        var minutes1 = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        var seconds1 = Math.floor((t % (1000 * 60)) / 1000); 

        minutes1 = checkTime(minutes1);
				seconds1 = checkTime(seconds1); 
        
        var syuruq = "<?php echo $prayer2 ?>"

        if (prayername == syuruq.toLowerCase() ) {
          document.getElementById("label").innerHTML = "Memasuki waktu " + prayername;
          document.getElementById("message").innerHTML = ""; 
        } else {
          document.getElementById("label").innerHTML = "Menanti adzan " + prayername;
          document.getElementById("message").innerHTML = teks_sebelum_adzan;

        }
                
        document.getElementById("menit").innerHTML = minutes1; 
        document.getElementById("detik").innerHTML = seconds1; 
                
        if (t < 0) { 
        
            clearInterval(w); 

			      playBeep();
		        
            if (prayername == syuruq.toLowerCase()) {

                var timer = setTimeout(function() {
                    window.location="http://" + url + "/imasjid"
                }, 500);
            }

            document.getElementById("label").innerHTML = icon;
            document.getElementById("message").innerHTML = ""; 
            document.getElementById("menit").innerHTML = ""; 
            document.getElementById("detik").innerHTML = "";
            
            // Counter Adzan
            var durasi = "<?php echo $durasi_adzan ?>"
            
            var first2digitTime = prayertime.toString().substr(0,2);
            var last2digitTime  = prayertime.toString().substr(-2);    

            var getMinutes = ( Number(last2digitTime) + Number(durasi) );

            if(getMinutes > 60) {
              var hour     = Number(first2digitTime) + Number(1);
              var minutes  = Number(getMinutes) - Number(60);  
      
            } else if(getMinutes == 60) {
              var hour     = Number(first2digitTime) + Number(1);
              var minutes  = 0;    
      
            } else {
              var hour     = Number(first2digitTime);
              var minutes   = Number(last2digitTime) + Number(durasi);      
      
            }

            hour      = checkTime(hour); 
            minutes   = checkTime(minutes);

            var counter1 = hour + ":" + minutes;   
            
            var countDownDate2 = new Date(bulan + " " + tanggal + "," + tahun + " " + counter1 + ":00").getTime();   
            
            var x = setInterval(function() 
            { 

              var now = new Date().getTime(); 
              var t = countDownDate2 - now; 
                
              var minutes2 = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
              var seconds2 = Math.floor((t % (1000 * 60)) / 1000); 

              minutes2 = checkTime(minutes2);
				      seconds2 = checkTime(seconds2);       
              
              document.getElementById("label").innerHTML = "Adzan " + prayername;
              document.getElementById("message").innerHTML = teks_adzan;
              document.getElementById("menit").innerHTML = minutes2; 
              document.getElementById("detik").innerHTML = seconds2;          

              if (t < 0) { 
        
                clearInterval(x); 

                if (prayername == day) {

                    var timer = setTimeout(function() {
                        window.location="http://" + url + "/imasjid/message.php"
                    }, 500);
                }
                            
                document.getElementById("label").innerHTML = icon; 
                document.getElementById("message").innerHTML = "";
                document.getElementById("menit").innerHTML = ""; 
                document.getElementById("detik").innerHTML = "";          
                
                // Counter Iqomah berdasarkan nama sholat                    
                var prayer1 = "<?php echo $prayer1 ?>"                
                var prayer3 = "<?php echo $prayer3 ?>"
                var prayer4 = "<?php echo $prayer4 ?>"
                var prayer5 = "<?php echo $prayer5 ?>"
                var prayer6 = "<?php echo $prayer6 ?>"

                if(prayername == prayer1.toLowerCase() ) {
                  var durasi = "<?php echo $iqomah_shubuh ?>"
                  
                } else if(prayername == prayer3.toLowerCase() ) {
                  var durasi = "<?php echo $iqomah_dzuhur ?>"
                  
                } else if(prayername == prayer4.toLowerCase() ) {
                  var durasi = "<?php echo $iqomah_ashar ?>"
                  
                } else if(prayername == prayer5.toLowerCase() ) {
                  var durasi = "<?php echo $iqomah_maghrib ?>" 
                  
                } else if(prayername == prayer6.toLowerCase() ) {
                  var durasi = "<?php echo $iqomah_isya ?>" 
                  
                }               

                var first2digitTime = counter1.toString().substr(0,2);
                var last2digitTime  = counter1.toString().substr(-2);    

                var getMinutes = ( Number(last2digitTime) + Number(durasi) );

                if(getMinutes > 60) {
                  var hour     = Number(first2digitTime) + Number(1);
                  var minutes  = Number(getMinutes) - Number(60);  
      
                } else if(getMinutes == 60) {
                  var hour     = Number(first2digitTime) + Number(1);
                  var minutes  = 0;    
      
                } else {
                  var hour     = Number(first2digitTime);
                  var minutes   = Number(last2digitTime) + Number(durasi);      
      
                }

                hour      = checkTime(hour); 
                minutes   = checkTime(minutes);

                var counter2 = hour + ":" + minutes;   
            
                var countDownDate3 = new Date(bulan + " " + tanggal + "," + tahun + " " + counter2 + ":00").getTime();   

                var y = setInterval(function() 
                {

                  var now = new Date().getTime(); 
                  var t = countDownDate3 - now; 
                
                  var minutes3 = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
                  var seconds3 = Math.floor((t % (1000 * 60)) / 1000); 

                  minutes3 = checkTime(minutes3);
				          seconds3 = checkTime(seconds3);       
                  
                  document.getElementById("label").innerHTML = "IQOMAH";
                  document.getElementById("message").innerHTML = teks_iqomah; 
                  document.getElementById("menit").innerHTML = minutes3; 
                  document.getElementById("detik").innerHTML = seconds3; 

                  if (t < 0) { 
        
                    clearInterval(y); 
                    
                    playBeep2();

                    var icon2 = "<i class='fas fa-volume-mute'></i>";

                    document.getElementById("label").innerHTML = "Memasuki waktu sholat " + prayername; 
                    document.getElementById("message").innerHTML = icon2 + " " + teks_sebelum_sholat;
                    document.getElementById("menit").innerHTML = "--"; 
                    document.getElementById("detik").innerHTML = "--"; 

                    var timer = setTimeout(function() {
                        window.location="http://" + url + "/imasjid"
                    }, 120000);


                  } // End 3rd t statement

                },1000);

              } // End 2nd t statement
            },1000);

        } // End 1st t statement
    },1000);
    
  } // End function startTime

  function checkTime(i) {
  		        
    if (i < 10) { i = "0" + i }; 
  	   return i;

  }     
  
	function playBeep(){		
    document.getElementById("timer-beep").play();	    				
  }
  
  function playBeep2(){		
    document.getElementById("timer-beep2").play();	    				
	}
	
</script>

</html>
