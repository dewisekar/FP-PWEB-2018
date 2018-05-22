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
  $qry2="SELECT * FROM filefoto inner join users on filefoto.f_timid = users.u_id where users.u_papi ='0'";
  $result = mysqli_query($con,$qry2);
  $row3 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry3="SELECT * FROM filefoto inner join users on filefoto.f_timid = users.u_id where users.u_papi ='1'";
  $result = mysqli_query($con,$qry3);
  $row4 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $no = 0;
  $no1 = 0;
  $act = isset($_GET['act']) ? $_GET['act'] : "";
  if ($act=="del"){
    $uid = $_GET['uid'];
    include("dbconnect.php");
    mysqli_query($con, "DELETE FROM filefoto where f_id=$uid");
    mysqli_close($con);
    header("location:datafototim.php");
    die();
  } 
  mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Data Foto Tim</title>
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
                  <li><a href="updategroup.php">Edit Group</a></li>
                  <li><a href="#">Jadwal</a></li>
                  <li><a href="#">Update Klasemen</a></li>
                </ul>            
          </li>
  	  	  <li><a href="action_adminlogout.php">Logout</a></li>      
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center">
  		<a href="index.php"><img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" ></a>
  		<h2 style="margin-top: 0%;"> Data Foto Tim</h2>
	</div>
</div>
<div class="row" id="syarat2">
  	<div class="col-md-1"></div>
  	<div class="col-md-10 animate fadeIn" style="margin-top: 0;">
  		<style type="text/css">
			.nav{
			    border-width:1px 0;
			    list-style:none;
			    margin:0;
			    padding:0;
			    text-align:center;
			}
			.nav li{
			    display:inline;
			}
			.nav button{
			    display:inline-block;
			    padding:10px;
			    background-color: transparent;
			    border: 1px solid white;
			    -webkit-transition: background 2s; /* Safari */
    			transition: background 2s;
			}

			.nav button:hover{
				color: white;
				background-color: silver;
			}  			
  		</style>
  		<style type="text/css">
  			#headers{
  				background: #282b33;
  				border: 1px solid white;
  				padding-left:  2%; padding-right: 2%;
  				padding-top: 10px; padding-bottom: 10px;
  				font-weight: bold;
  			
  			}

  			#headers p{
  				text-align: left;
  				font-size: 20px;
  			}

  			#headers a:hover{
  				cursor: pointer;
  				border: 1px solid white;
  			}
  			#headers a{
  				padding: 1px 2px 1px 2px;
  				margin: 1px 2px 1px 2px;
  			}

   		</style>
  		<div id="headers" style="margin-top: 2%;">
  			<a id="no1" class="icon icon-sort-down" style="text-align: center; color: white;"></a><p style="float: right;">Data Tim Putra</p>
  		</div>
  		<div id="tabel1"  style="overflow-x:auto;">
  		<style type="text/css">
  			body {
			  background: #0e0e0e;
			  color: #fff;
			  font-family: sans-serif;
			}
			
			/*Responsive table*/
			table { 
			  width: 100%; 
			  border-collapse: collapse; 
			}
			
			td, th { 
			  padding: 8px;  
			}		
			
			th { 
			  background: rgba(23,51,89,0.6);; 
			  font-weight: bold; 
        text-align: center;
			}
			
			h1 a {
			  text-decoration: none;
			  color: #fff;
			}
       .btn{
        width: 50%;
      }

      td .btn:hover{
        background-color: white;
      }

  		</style>
  		<table>
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Tim</th>
				<th>Nama File</th>
				<th>Keterangan</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i=0;$i<sizeof($row3);$i++) { ?>
      <tr>
        <td><?php echo ++$no1?>.</td>
        <td><?php echo $row3[$i]['u_nama']?></td>
        <td><?php echo $row3[$i]['f_nama']?></td>
        <td><a href="?act=&uid=<?php echo $row3[$i]['f_id'] ?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-download"></span></a><a href="?act=del&uid=<?php echo $row3[$i]['f_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
      </tr>
        <?php } ?>
			</tbody>
		</table>
  	</div>
  		<div id="headers" style="margin-top: 2%;">
  			<a id="no2" class="icon icon-sort-down" style="text-align: center; color: white;"></a><p style="float: right;">Data Tim Putri</p>
  		</div>
  		<div id="tabel2"  style="overflow-x:auto;">
  		<style type="text/css">
  			body {
			  background: #0e0e0e;
			  color: #fff;
			  font-family: sans-serif;
			}
			
			/*Responsive table*/
			table { 
			  width: 100%; 
			  border-collapse: collapse; 
			}
			
			td, th { 
			  padding: 8px; 
			  text-align: left; 
			}		
			
			th { 
			  background: rgba(23,51,89,0.6);; 
			  font-weight: bold;
        text-align: center; 
			}
			
			h1 a {
			  text-decoration: none;
			  color: #fff;
			}
       .btn{
        width: 50%;
      }

      td .btn:hover{
        background-color: white;
      }

  		</style>
  		<table>
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Tim</th>
				<th>Nama File</th>
				<th>Keterangan</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i=0;$i<sizeof($row4);$i++) { ?>
      <tr>
        <td><?php echo ++$no?>.</td>
        <td><?php echo $row4[$i]['u_nama']?></td>
        <td><?php echo $row4[$i]['f_nama']?></td>
        <td><a href="?act=&uid=<?php echo $row3[$i]['f_id'] ?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-download"></span></a><a href="?act=del&uid=<?php echo $row3[$i]['f_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
      </tr>
        <?php } ?>
			</tbody>
		</table>
  		</div>
  	</div>
  	<div class="col-md-1"></div>
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
<script>
$(document).ready(function(){
    $("#no1").click(function(){
        $("#tabel1").slideToggle();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#no2").click(function(){
        $("#tabel2").slideToggle();
    });
});
</script>

