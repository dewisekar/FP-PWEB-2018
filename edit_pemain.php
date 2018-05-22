<?php
 	 include 'dbconnect.php';
 	 
 	 session_start();
 	 if (!isset($_SESSION['u_username'])) {
 	 ?>
 	  <script type="text/javascript">
 	   alert("Sorry, you are not an admin.");
 	   window.location.href="admin_login.php";
 	  </script> <?php
 	}

 	$id =  $_SESSION['u_username'];	
 	$uid = $_GET['uid'];
 	$sql = mysqli_query($con, "select * from pemain where p_id = '$uid'") or die (mysqli_error());
  	$data = mysqli_fetch_assoc($sql);
  	$tim_id = $data['p_timid'];
  	if($id!=$tim_id)
  	{
  		?>
 	  	<script type="text/javascript">
 	  	 alert("Sorry, you are not allowed to open this page!");
 	  	 window.location.href="berkasonline.php";
 	  	</script> <?php
  	}
 	mysqli_close($con);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Pemain</title>
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
<div id="syarat" class="row" style="background: #282b33; margin-bottom: 0; padding-bottom: 0px;">
	<nav id="nav">
		<ul>
  	  	  <li><a href="adminhome.php">Dashboard</a></li>
  	  	  <li><a href="datatim.php">Data Tim</a></li>
  	  	  <li><a href="datafototim.php">Data Berkas Foto</a></li>
          <li> <span>Jadwal dan Klasemen</span>
                <ul>
                  <li><a href="#">Jadwal</a></li>
                  <li><a href="#">Update Klasemen</a></li>
                </ul>            
          </li>
  	  	  <li><a href="action_adminlogout.php">Logout</a></li>      
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center">
  		<a href="index.php"><img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" ></a>
  		<h2 style="margin-top: 0%;"> Edit Pemain</h2>
	</div>
</div>
<div class="row" id="syarat2">
  	<div class="col-md-4"></div>
  	<div class="col-md-4 animate fadeIn" style="margin-top: 0; border: 1px solid white;">
  		<form  method="POST" class="lol" action="action_editpemain.php" onsubmit="return validateForm()" name="myForm">
  		<style type="text/css">
  			input[type="text"]{
				width: 100%;
				padding: 0;
				margin-bottom: 3%;
				background-color: transparent;
				border: none;
				border-bottom: 1px solid white;
				color: white;
				text-align: center;
				margin-top: 2%;

			}

			input[type="submit"]{
				width: 100%;
				margin-bottom: 5%;
			}
			p{
				text-align: left;
				font-weight: bold;
			}
  		</style>
	         <input type="text" id="username" name="p_id" value="<?php echo "$uid"; ?>" hidden> 	
	      	<p>Nama</p>                          
	        <input type="text" id="nama" name="p_nama" value="<?php echo "$data[p_nama]"; ?>" required>      	
	      	<p>NRP</p>                        
	        <input type="text" id="username" name="p_nrp" value="<?php echo "$data[p_nrp]"; ?>" required>
	        <p>No. Punggung</p>              
	        <input type="text" id="username" name="p_nopung" value="<?php echo "$data[p_nopung]"; ?>" required>
	        <p>Posisi</p>
	        <select class="form-control" name="p_posisi" style="margin-bottom: 5%;">
                <option><?php if("$data[p_posisi]"==0){
            echo "Kiper";} else{echo "Pemain";} ?></option>
               	<option>Pemain</option>
               	<option>Kiper</option>
             </select>                                 	 
	        <a>
	        	<input type="submit" value="Edit" name="submit" >
	        </a>
	    </form>
  	</div>
  	<div class="col-md-4"></div>

</div>

<div id="footer" style="padding-top: 0">
  <div class="container">
  	<h2 style="margin-top: 1%; text-align: center;"><strong style="font-size: 30px;"> MORE INFORMATION:</strong></h2>
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
</html>
<script type="text/javascript">
	function validateForm() {
    var x = document.forms["myForm"]["p_nrp"].value;
    var sx = x.length;
    var y = document.forms["myForm"]["p_nopung"].value;
    if (sx!=14) {
        alert("NRP harus 14 digit!");
        return false;
    }
    if (y<0 || y>99) {
        alert("Rentang nomor adalah 1-99!");
        return false;
    }
}

</script>
