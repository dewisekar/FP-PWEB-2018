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
 $qry="SELECT * FROM groupifc where g_papi= '0'";
  $result = mysqli_query($con,$qry);
  $groupcow = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM groupifc where g_papi= '1'";
  $result = mysqli_query($con,$qry);
  $groupcew = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM users where u_group = 'W'";
  $result = mysqli_query($con,$qry);
  $row = mysqli_fetch_all($result,MYSQLI_ASSOC); 
  $qry1="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where u_papi = 1 order by j_group, j_tanggal";
  $result = mysqli_query($con,$qry1);
  $row1 = mysqli_fetch_all($result,MYSQLI_ASSOC); 
  $qry1="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where u_papi = 1 order by j_group, j_tanggal";
  $result = mysqli_query($con,$qry1);
  $row2 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry1="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where u_papi = 0 order by j_group, j_tanggal";
  $result = mysqli_query($con,$qry1);
  $row3 = mysqli_fetch_all($result,MYSQLI_ASSOC); 
  $qry1="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where u_papi = 0 order by j_group, j_tanggal";
  $result = mysqli_query($con,$qry1);
  $row4 = mysqli_fetch_all($result,MYSQLI_ASSOC);  
  $no = 0;
  $no1 = 0; 
  mysqli_close($con);
  include 'klasementabel.php';
  $act = isset($_GET['act']) ? $_GET['act'] : "";
  if ($act=="del"){
    $uid = $_GET['uid'];
    include("dbconnect.php");
    mysqli_query($con, "update users set u_group=NULL, u_pool=NULL where u_id=$uid");
    mysqli_close($con);
    header("location:updatejadwal.php");
    die();
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Data Tim</title>
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
  		<h2 style="margin-top: 0%;"> Tambah Jadwal</h2>
	</div>
</div>
<div class="row" id="syarat2">
  	<div class="col-md-1"></div>
  	<div class="col-md-10 animate fadeIn" style="margin-top: 0;">
  		<form action="action_tambahkegrup.php" name="myForm" onsubmit="return validateForm()" method="POST" style="	margin-top: 0; margin-bottom: 5%;">
    	  	<div class="form-group">
    	  	  <label for="email">Putra/Putri</label>
    	  	    <select  class="form-control" name="papi" id="papi" onChange="changePapi()">
    	  	        <option value="">Select Putra/Putri</option>
    	  	        <option value="0">Putra</option>
    	  	        <option value="1">Putri</option>
    	  	    </select>
    	  	</div>
    	   	<div class="form-group">
    	   	 <label for="email">Group:</label>
    	   	   <select  class="form-control" name="group" id="group" onChange="changeGroup()">
    	   	        <option value="">Select Putra/Putri First</option>
    	   	   </select>
    	   	</div>
    	   	<div class="form-group">
    	   	  <label for="email">Tim Home:</label>
    	   	  <select class="form-control"  name="timhome" id="timhome">
    	   	    <option value="">Select Group First</option>
    	   	  </select>
    	   	</div>
    	   	<div class="form-group">
    	   	   <label for="email">Tim Away:</label>
    	   	   <select  class="form-control"  name="timaway" id="timaway">
    	   	     <option value="">Select Group First</option>
    	   	   </select>
    	   	</div>
    	   	<input type="hidden" value="0" name="papi">
    	   	<div class="form-group" >
    	   	  <a style="margin-left: 30%; margin-right: auto;" >
    	   	    <input type="submit" value="Submit" name="submit" style=" border: 1px solid white;">
    	   	  </a>
    	   	</div>
    	</form>
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
    	  	  <th>Home</th>       
    	  	  <th>Away</th>
    	  	  <th>Tanggal</th>
    	  	  <th>Group</th>
    	  	   <th>Sc. Home</th>
    	  	  <th>Sc. Away</th>
    	  	  <th>Keterangan</th>
    	  	</tr>
    	  </thead>
    	  <tbody>
    	  	<?php for ($i=0;$i<sizeof($row3);$i++) { ?>
    	  	<tr>
    	  	  <td><?php echo ++$no1?>.</td>
    	  	  <td><?php echo $row3[$i]['u_nama']?></td>
    	  	  <td><?php echo $row4[$i]['u_nama']?></td>
    	  	  <td><?php echo $row3[$i]['j_tanggal']?></td>
    	  	  <td><?php echo $row3[$i]['j_group']?></td>
    	  	  <td><?php echo $row3[$i]['j_sh']?></td>
    	  	  <td><?php echo $row3[$i]['j_sa']?></td>
    	  	  <td><a href="?act=del&uid=<?php echo $row1[$i]['u_id']?>" class="btn" style="text-align: center; border: 	none;	"><span class="icon icon-trash"></span></a></td>
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
    	  	  <th>Home</th>
    	  	  <th>Away</th>
    	  	  <th>Tanggal</th>
    	  	  <th>Group</th>
    	  	  <th>Sc. Home</th>
    	  	  <th>Sc. Away</th>
    	  	  <th>Keterangan</th>
    	  	</tr>
    	  </thead>
    	  <tbody>
    	  	<?php for ($i=0;$i<sizeof($row1);$i++) { ?>
    	  	<tr>
    	  	  <td><?php echo ++$no1?>.</td>
    	  	  <td><?php echo $row1[$i]['u_nama']?></td>
    	  	  <td><?php echo $row2[$i]['u_nama']?></td>
    	  	  <td><?php echo $row1[$i]['j_tanggal']?></td>
    	  	  <td><?php echo $row1[$i]['j_group']?></td>
    	  	  <td><?php echo $row1[$i]['j_sh']?></td>
    	  	  <td><?php echo $row1[$i]['j_sa']?></td>
    	  	  <td><a href="?act=del&uid=<?php echo $row1[$i]['u_id']?>" class="btn" style="text-align: center; border: 	none;	"><span class="icon icon-trash"></span></a></td>
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
<script type="text/javascript">
	function validateForm() {
    var x = document.forms["myForm"]["tim_password"].value;
    var sx = x.length;
    if (sx< 6) {
        alert("Password minimal 6 karakter!");
        return false;
    }
}
</script>
<script type="text/javascript">
  function changeGroup()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "fetch_group.php?group="+document.getElementById("group").value, false);
    xmlhttp.send(null);
    document.getElementById("timhome").innerHTML=xmlhttp.responseText;
    document.getElementById("timaway").innerHTML=xmlhttp.responseText;
  }
</script>
<script type="text/javascript">
  function changePapi()
  {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "fetch_papi.php?papi="+document.getElementById("papi").value, false);
    xmlhttp.send(null);
    document.getElementById("group").innerHTML=xmlhttp.responseText;
  }
</script>

