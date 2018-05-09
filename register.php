<?php
	include "dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Register Page</title>
        <link rel="stylesheet"  href="css/login.css">
		<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
        <!-- Meta -->
    </head>
    <body>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card card-default">
	
	                <div class="loginBox" style="height: 500px;">
	                    <h2> Register </h2>

	                    <form method="POST" action="action_register.php">
	                        <div class="form-group row">	
	                        	<p>Username</p>                          
	                            <div class="col-md-6">
	                                <input type="text" id="username" placeholder="Enter Username" name="username" >
	                            </div>
	                        </div>
	                        <div class="form-group row">	
	                        	<p>Name</p>                          
	                            <div class="col-md-6">
	                                <input type="text" id="name" placeholder="Enter Your Name" name="name" >
	                            </div>
	                        </div>		
	                        <div class="form-group row">
	                            <p>Password</p>	
	                            <div class="col-md-6">
	                                <input id="password"  placeholder="Enter Password" type="password" name="password">
	                            </div>
	                        </div>	
	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                            	<a>
	                            		<input type="submit" value="Sign in" name="submit">
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