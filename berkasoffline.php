<?php
  include 'dbconnect.php';
  
  session_start();
  if (!isset($_SESSION['u_username'])) {
  ?>
   <script type="text/javascript">
    alert("Login First!");
    window.location.href="login.php";
   </script> <?php
 }
  $qry="SELECT * FROM berkas";
  $result = mysqli_query($con,$qry);
  $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_close($con); 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Berkas Offline</title>
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
  	  	  <li><a href="userhome.php">Dashboard</a></li>
  	  	  <li><a href="berkasoffline.php">Berkas Offline</a></li>
  	  	  <li><a href="berkasonline.php">Berkas Online</a></li>
  	  	  <li><a href="action_userlogout.php">Logout</a></li>      
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center">
  		<a href="index.php"><img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" ></a>
  		<p style="margin-bottom: 2%;"> Jangan lupa untuk mengumpulkan berkas offline selambat-lambatnya sebelum technical meeting I IFC 2018 berlangsung. </p>
  	</div>
  	<div class="col-md-3"></div>
  	<div class="col-md-6" >
  		<table style="border: 1px solid white;">
  			<style type="text/css">
  				table, td, th{
  					border: 1px solid white;
  					color: white;
  					font-family: 'Source Sans Pro', sans-serif;

  				}
  				th{
  					font-size: 22px;
  					font-weight: bold;
  					text-align: center;
  					padding: 4px;
  				}
  				td{
  					padding: 4px;
  					padding-left: 8px;
  					padding-right: 8px;
  				}
  				th{
  					background-color: rgba(23,51,89,0.6);
  				}
  			</style>
  			<tr>
 			   <th>Nama Berkas</th> 
 			   <th>Action</th>
 			 </tr>
       <?php for ($i=0;$i<sizeof($row);$i++) { ?>
          <tr>
            <td><?php echo $row[$i]['b_name']?></td>
            <td><a href="<?php echo $row[$i]['b_path']?>" class="btn" style="text-align: center; border: none;"><span class="icon     icon-download"></span></a></td>
           </tr>
          </tr>
        <?php } ?>
  		</table>
  	</div>
  	<div class="col-md-3"></div>

</div>

<div id="footer" style="padding-top: 0">
  <div class="container">
  	<h2 style="margin-top: 0; text-align: center;"><strong style="font-size: 30px;"> MORE INFORMATION:</strong></h2>
    <p style="margin-bottom: 2%; text-align: center;"> Mar'atun: Line: atunmaratun | HP: 08977566064 </p>
    <section class="contact">
          <ul class="icons" style="background: rgba(66,156,227,0.4);">
            <li><a href="https://www.twitter.com/ifc_2018" target="_blank" class="icon icon-twitter" ><span>Twitter</span></a></li>
            <li><a href="#" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="https://www.youtube.com/channel/UCMN5Kb0LH6W7H8R2VQkRk0w" target="_blank" class="icon icon-youtube"><span>Youtube</span></a></li>
            <li><a href="https://www.instagram.com/ifc_2018" target="_blank" class="icon icon-instagram"><span>Instagram</span></a></li>
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