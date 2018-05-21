<?php
  include 'dbconnect.php';
  
  session_start();
  if (!isset($_SESSION['a_username'])) {
  ?>
   <script type="text/javascript">
    alert("Sorry, you are not an admin.");
    window.location.href="admin_login.php";
   </script> <?php
 }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard</title>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lte IE 8]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-panels.min.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript" src="js/jquery.visible.js" charset="utf-8"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" charset="utf-8"></script>

<noscript>


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/skel-noscript.css">
<link rel="stylesheet" href="css/style-noscript.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</noscript>
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie8.css">
<![endif]-->
</head>
<body class="homepage">
<div id="syarat" class="row" style="background: #282b33; margin-bottom: 0; padding-bottom: 20px;">
	<nav id="nav">
		<ul>
  	  	  <li><a href="adminhome.php">Dashboard</a></li>
  	  	  <li><a href="datatim.php">Data Tim</a></li>
  	  	  <li><a href="datafototim.php">Data Berkas Foto</a></li>
          <li> <span>Jadwal dan Klasemen</span>
                <ul>
                  <li><a href="updategroup.php">Edit Group</a></li>
                  <li><a href="#">Jadwal</a></li>
                  <li><a href="#">Update Klasemen</a></li>
                </ul>
            
          </li>
  	  	  <li><a href="action_adminlogout.php">Logout</a></li>    
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center animate fadeInUp">
  		<a href="index.php"><img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" ></a>
  		<h2 style="margin-top: 0%;"> Welcome Admin! </h2>
  		<p style="margin-bottom: 2%;"> Selama IFC 2018, berikut adalah hal-hal yang perlu diperhatikan: </p>
  	</div>
  	<div class="col-md-3"></div>
  	<div class="col-md-6 animate fadeInUp" style="border: 1px solid white;">
  		<style type="text/css">
  			#syarat ul li{
  				text-align: left;
  			}
  		</style>
  		<ul>
  			<li>
  				<p style="font-weight: bold; margin-top: 3%;"> Berkas Offline </p>
  				<ul>
  					<li>1. Peserta mengumpulkan form C1, C2, dan C4 sudah terisi, tertanda tangani, dan bermaterai.</li>
  					<li>2. Peserta mengumpulkan foto 4x6 sebanyak 1 lembar perorang di dalam team.</li>
  					<li>3. Pengumpulan dilakukan di Sekre UKM Sepakbola ITS pada hari Senin-Jumat pukul 16.00 - 21.00  atau selambat-lambatnya sebelum technical meeting I IFC berlangsung. </li>
  					<li style="font-weight: bold;">4. Urutan pengambilan drawing grup berdasarkan waktu pengumpulan berkas offline.</li>
  				</ul>
  			</li>
  			<li>
  				<p style="font-weight: bold; margin-top: 3%;"> Berkas Online </p>
  				<ul>
  					<li>1.Bisa lihat rekapan form C3 di data tim dan data tim yang telah mendaftar</li>
  					<li>2. Berkas foto online bisa dilihat di halaman berkas foto</li>
  				</ul>
  			</li>
        <li>
          <p style="font-weight: bold; margin-top: 3%;"> Kalau Ada Tim Yang Mendaftar </p>
          <ul>
            <li>1. Buka halaman data tim, klik tombol "Tambah Tim" dan buat akun untuk tim seseuai dengan ketentuan.</li>
          </ul>
        </li>
        <li>
          <p style="font-weight: bold; margin-top: 3%;"> Update Jadwal dan Klasemen</p>
          <ul>
            <li>1. Silahkan Update Jadwal dan Klasemen Sesuai Dengan Data di Halaman Jadwal dan Klasemen</li>
          </ul>
        </li>
  		</ul>
  	</div>
  	<div class="col-md-3"></div>

</div>

<div id="footer" style="padding-top: 0">
  <div class="container">
  	<h2 style="margin-top: 0; text-align: center;"><strong style="font-size: 30px;"> MORE INFORMATION:</strong></h2>
    <p style="margin-bottom: 2%; text-align: center;"> Mar'atun: Line: atunmaratun | HP: 08977566064 </p>
    <section class="contact">
          <ul class="icons" style="background: rgba(24,65,80,0.4); margin-top: 0%;">
            <li><a href="#" class="icon icon-twitter" ><span>Twitter</span></a></li>
            <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="icon icon-youtube"><span>Google+</span></a></li>
            <li><a href="#" class="icon icon-instagram"><span>Pinterest</span></a></li>
          </ul>
        </section>
    <div class="row">

      <section class="12u" style="border: 1px solid white; padding-top: 2%; padding-bottom: 4%; padding-left: 4%; padding-right: 4%;" >
       <h1 style="color: white; font-size: 30px;"> Supported by: </h1>
       <img style="align:center; width: 100%;" src="images/sop.png">
       <h1 style="color: white; font-size: 30px;"> Sponsored by: </h1>
       <img style="align:center; width: 100%;" src="images/sponsor.png">
      </section>  
        <div class="copyright">
          <ul class="menu">
            <li style="color: white; margin-top: 5%;">&copy; ITS Futsal Championship 2018</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">

</script>
</html>