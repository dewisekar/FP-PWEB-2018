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
 $qry="SELECT * FROM users where u_papi = 0";
 $result = mysqli_query($con,$qry);
 $row = mysqli_fetch_all($result,MYSQLI_ASSOC); 
 $qry1="SELECT * FROM users where u_papi = 1";
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
<form action="dropdown2.php" method="POST">
 	<div class="col-xs-6">
  <select class="form-control" name="select1" id="select1">
    <option value="1" id="1">Fruit</option>
    <option value="2" id="2">Animal</option>
    <option value="3" id="3">Bird</option>
    <option value="4" id="4">Car</option>
  </select>
</div>
<div class="col-xs-6">
  <select class="form-control" name="select2" id="select2">
    <option value="1" id="1">Banana</option>
    <option value="1" id="1">Apple</option>
    <option value="1" id="2">Orange</option>
    <option value="2">Wolf</option>
    <option value="2">Fox</option>
    <option value="2">Bear</option>
    <option value="3">Eagle</option>
    <option value="3">Hawk</option>
    <option value="4">BWM<option>
</select>
</div>
<a>
	        	<input type="submit" value="Sign In" name="submit">
	        </a>
 </form>
</body>
</html>
<script>
//Reference: https://jsfiddle.net/fwv18zo1/
var $select1 = $( '#select1' ),
		$select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script>


