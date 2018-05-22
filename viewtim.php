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
 	$timid = $_GET["timid"];
 	$sql = mysqli_query($con, "select * from users where u_id = '$timid'") or die (mysqli_error());
 	$login = mysqli_fetch_assoc($sql);
 	$qry="SELECT * FROM pemain where p_timid = '$timid' order by p_nopung asc";
 	$result = mysqli_query($con,$qry);
 	$row = mysqli_fetch_all($result,MYSQLI_ASSOC); 
 	 $qry1="SELECT * FROM official where o_timid = '$timid' order by o_posisi asc";
 	$result = mysqli_query($con,$qry1);
 	$row1 = mysqli_fetch_all($result,MYSQLI_ASSOC); 
 	$no = 0;
 	$no1 = 0; 
 	mysqli_close($con);
	$act = isset($_GET['act']) ? $_GET['act'] : "";
	if ($act=="del"){
		$uid = $_GET['uid'];
		include("dbconnect.php");
		mysqli_query($con, "DELETE FROM users where u_id=$uid");
	    mysqli_close($con);
	    header("location:datatim.php");
	    die();
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Detail Tim</title>
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
                  	<li><a href="updatejadwal.php">Jadwal</a></li>
                </ul>            
          </li>
  	  	  <li><a href="action_adminlogout.php">Logout</a></li>      
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center">
  		<a href="index.php"><img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" ></a>
  		<h2 style="margin-top: 0%;"> Detail <?php echo $login['u_nama'] ?> - <?php if($login['u_papi']==0){echo 'Putra';} else{echo "Putri";} ?></h2>
	</div>
</div>
<div class="row" id="syarat2">
  	<div class="col-md-1"></div>
  	<div class="col-md-10 animate fadeIn" style="margin-top: 0;">
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
  				td .btn{
				width: 100%;
			}

			td .btn:hover{
				background-color: white;
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
			  text-align: left; 
			}		
			
			th { 
			  background: rgba(23,51,89,0.6);
			  font-weight: bold; 
			}
			
			h1 a {
			  text-decoration: none;
			  color: #fff;
			}
  		</style>
  		<table>
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pemain</th>
				<th>NRP</th>
				<th>No. Punggung</th>
				<th>Posisi</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i=0;$i<sizeof($row);$i++) { ?>
			<tr>
				<td><?php echo ++$no?>.</td>
				<td><?php echo $row[$i]['p_nama']?></td>
				<td><?php echo $row[$i]['p_nrp']?></td>
				<td><?php echo $row[$i]['p_nopung']?></td>
				<td><?php if($row[$i]['p_posisi']==0){
            echo "Kiper";} else{echo "Pemain";} ?></td>
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
			}
			
			h1 a {
			  text-decoration: none;
			  color: #fff;
			}
  		</style>
  		<table>
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Official</th>
				<th>No. Identitas</th>
				<th>Posisi</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i=0;$i<sizeof($row1);$i++) { ?>
			<tr>
				<td><?php echo ++$no1?>.</td>
				<td><?php echo $row1[$i]['o_nama']?></td>
				<td><?php echo $row1[$i]['o_noidentitas']?></td>
				<td><?php if($row1[$i]['o_posisi']==0){
            echo "Coach";} else if($row1[$i]['o_posisi']==1){echo "Ass. Coach";} else{echo "Manager";} ?></td>
			</tr>
				<?php } ?>
			</tbody>
		</table>
  		</div>
  		<form method="post" action="export.php">
  			<input type="hidden" name="timid" class="btn btn-success" value="<?php echo "$timid"?>" >
    	 	<input type="submit" name="export" class="btn btn-success" value="Export to Excel" />
    	</form>
  	</div>
  	<div class="col-md-1"></div>

</div>

<div id="footer" style="padding-top: 0">
  <div class="container">
  	<h2 style="margin-top: 1%; text-align: center;"><strong style="font-size: 30px;"> MORE INFORMATION:</strong></h2>
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


