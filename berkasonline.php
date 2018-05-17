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
 $id= $_SESSION['u_username'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Berkas Online</title>
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
  	  	  <li><a href="userhome.php">Dashboard</a></li>
  	  	  <li><a href="berkasoffline.php">Berkas Offline</a></li>
  	  	  <li><a href="index.php">IFC 2018 Home</a></li>
  	  	  <li><a href="berkasonline.php">Berkas Online</a></li>
  	  	  <li><a href="action_userlogout.php">Logout</a></li>      
  	  	</ul>   
  	</nav>
  	<div class="col-md-12 text-center">
  		<img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 1%; padding-bottom: 0;" >
  		<p style="margin-bottom: 2%;"> Jangan lupa untuk mengumpulkan berkas offline selambat-lambatnya sebelum technical meeting I IFC 2018 berlangsung. </p>
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
  		<ul class="nav">
  			<li><button href="#" class="btn" id="myBtn" onclick="getModal('myModal')">Tambah Pemain</button></li>
  			<li><button href="#" class="btn" id="myBtn1" onclick="getModal('myModal1')">Tambah Official</button></li>
  		</ul>
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
  			<a id="no1" class="icon icon-sort-down" style="text-align: center; color: white;"></a><p style="float: right;">Data Pemain</p>
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
				<th>Nama Pemain</th>
				<th>NRP</th>
				<th>No. Punggung</th>
				<th>Posisi</th>
				<th>Keterangan</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>John</td>
				<td>Cena</td>
				<td>121</td>
				<td>John</td>
				<td>Cena</td>
				<td>121</td>
			</tr>
			</tbody>
		</table>
  		</div>
  		<div id="headers" style="margin-top: 2%;">
  				<a id="no2" class="icon icon-sort-down" style="text-align: center; color: white;"></a><p style="float: right;">Data Official</p>
  		</div>
  		<div id="tabel2" style="overflow-x:auto;">
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
				<th>Keterangan</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>John</td>
				<td>Cena</td>
				<td>121</td>
				<td>Cena</td>
				<td>121</td>
			</tr>
			</tbody>
		</table>
  		</div>
  		<div id="headers" style="margin-top: 2%;">
  				<a id="no3" class="icon icon-sort-down" style="text-align: center; color: white;"></a><p style="float: right;">Upload Berkas</p>  				
  		</div>
  		<div id="tabel3" style="border: 1px solid white;">
  			<p> SOON TO BE BAGUS</p>
  			<form action="/action_page.php">
			  	Select image to upload:
    			<input type="file" name="fileToUpload" id="fileToUpload">
    			<input type="submit" value="Upload Image" name="submit">
			</form>
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
  <style type="text/css">
  	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    padding-top: 100px; /* Location of the box */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	    font-family: 'Source Sans Pro', sans-serif;
	}
	
	/* Modal Content */
	.modal-content {
	    position: relative;
	    background-color: #282b33;
	    margin: auto;
	    padding: 0;
	    border: 1px solid #888;
	    width: 50%;
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	    -webkit-animation-name: animatetop;
	    -webkit-animation-duration: 0.4s;
	    animation-name: animatetop;
	    animation-duration: 0.4s
	}

	.modal-content h2{
		color: white;
		font-size: 30px;
		text-align: center;
		font-weight: bold;
	}
	
	/* Add Animation */
	@-webkit-keyframes animatetop {
	    from {top:-300px; opacity:0} 
	    to {top:0; opacity:1}
	}
	
	@keyframes animatetop {
	    from {top:-300px; opacity:0}
	    to {top:0; opacity:1}
	}
	
	/* The Close Button */
	.close {
	    color: white;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	}
	
	.close:hover,
	.close:focus {
	    color: #000;
	    text-decoration: none;
	    cursor: pointer;
	}
	
	.modal-header {
	    padding: 2px 16px;
	    background-color: rgba(23,51,89,0.6);;
	    color: white;
	    height: auto;
	}
	
	.modal-body {padding: 2px 16px;}
	
	.modal-footer {
	    padding: 2px 16px;
	    background-color: rgba(23,51,89,0.6);;
	    color: white;
	}
  </style>
 <div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close">&times;</span>
      <h2>Tambah Pemain</h2>
    </div>
    <div class="modal-body">
      	<form action="action_tambahpemain.php" method="POST" onsubmit="return validateForm()" name="myForm">
		  <div class="form-group">
		    <label for="email">Nama:</label>
		    <input type="text" class="form-control" name="p_nama" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd">NRP:</label>
		    <input type="text" class="form-control" name="p_nrp" placeholder="NRP 14 digit" required>
		  </div>
		  <div class="form-group">
		    <label for="pwd">No. Punggung</label>
		    <input type="text" class="form-control" name="p_nopunggung" required>
		  </div>
		  <div class="form-group">
		    <input type="hidden" class="form-control" name="p_id" value="<?php echo "$id"; ?>" >
		  </div>
		  <div class="form-group">
		  	<label for="pwd">Posisi: </label>
		    <select class="form-control" name="p_posisi">
               <option>Pemain</option>
               <option>Kiper</option>
             </select>
		  </div>
		  <div class="form-group">
		  	<a>
	        	<input type="submit" value="Submit" name="submit">
	        </a>
		  </div>
		</form>
    </div>
    <div class="modal-footer">
     	<p style="text-align: right; padding-bottom: 0; margin-bottom: 0;"> ITS Futsal Championship 2018. </p>
    </div>
  </div>
</div>

 <div id="myModal1" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close1">&times;</span>
      <h2>Tambah Official</h2>
    </div>
    <div class="modal-body">
      	<form action="/action_page.php" >
		  <div class="form-group">
		    <label for="email">Nama:</label>
		    <input type="text" class="form-control" id="o_nama">
		  </div>
		  <div class="form-group">
		    <label for="pwd">No. Identitas</label>
		    <input type="text" class="form-control" id="o_noidentitas">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Posisi: </label>
		    <select class="form-control" id="o_posisi">
               <option>Coach</option>
               <option>Ass. Coach</option>
               <option>Manager</option>
             </select>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-default">Submit</button>
		  </div>
		</form>
    </div>
    <div class="modal-footer">
     	<p style="text-align: right; padding-bottom: 0; margin-bottom: 0;"> ITS Futsal Championship 2018. </p>
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
<script>
$(document).ready(function(){
    $("#no3").click(function(){
        $("#tabel3").slideToggle();
    });
});
</script>
<script type="text/javascript">
function getModal(newcolor){
var modal = document.getElementById(newcolor);
modal.style.display = "block";

var span = document.getElementById('close');
var span2 = document.getElementById('close1');
span.onclick = function() {
    modal.style.display = "none";
}
span2.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}}
</script>
<script type="text/javascript">
	function validateForm() {
    var x = document.forms["myForm"]["p_nrp"].value;
    var sx = x.length;
    var y = document.forms["myForm"]["p_nopunggung"].value;
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