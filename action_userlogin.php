<?php
	include "dbconnect.php";
	$username = @$_POST['u_username'];
	$password = @$_POST[ 'u_password'];
	$submit = @$_POST[ 'submit'];

	if($submit)
	{
		$sql = mysqli_query($con, "select * from users where u_username = '$username' and u_password = md5('$password')") or die (mysqli_error());
		$cek = mysqli_num_rows($sql);
		if ($cek > 0)
		{
			session_start();
            $_SESSION["u_username"] = $username; header('location: userhome.php'); die();
		}
		else
		{
			
		}
	}
?>
 