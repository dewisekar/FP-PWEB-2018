<?php
  include 'dbconnect.php';
  
  session_start();
  if (isset($_SESSION['a_username'])) {
  ?>
   <script type="text/javascript">
    window.location.href="userhome.php";
   </script> <?php
 }
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Admin Login Page</title>
        <link rel="stylesheet"  href="css/login.css">
		<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
        <!-- Meta -->
    </head>
    <body style="background: #282b33;">
	<div class="container" >
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card card-default">	
	                <div class="loginBox">
	                    <h2> Are you admin? </h2>
	                    <form  method="POST" action="action_adminlogin.php">
	                        <div class="form-group row">
	                        	<a href="/"> <img style="width:30%" src="images/logoifc2.png" class="user"></img></a>
	
	                        	<p>Username</p>                          
	                            <div class="col-md-6">
	                                <input type="text" id="username" placeholder="Enter Username" name="u_username" >
	                            </div>
	                        </div>	
	                        <div class="form-group row">
	                            <p>Password</p>	
	                            <div class="col-md-6">
	                                <input id="password"  placeholder="Enter Password" type="password" name="u_password">
	                            </div>
	                        </div>	
	                        <div class="form-group row mb-0">	                        	 
	                            <div class="col-md-8 offset-md-4">
	                            	<a>
	                            		<input type="submit" value="Sign In" name="submit" style="background-color: #903b50;">
	                                </a>
	                            </div>
	                        </div>
	                      </form>
	                </div>
	            </div>
	        </div>
	     </div>
	</div>
	</body>
</html>
<!-- === END FOOTER === -->