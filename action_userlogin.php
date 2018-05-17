<?php
	include "dbconnect.php";
	$username = @$_POST['u_username'];
	$password = @$_POST[ 'u_password'];
	$submit = @$_POST[ 'submit'];

	if($submit)
	{
		$sql = mysqli_query($con, "select * from users where u_username = '$username' and u_password = md5('$password')") or die (mysqli_error());
 		$login = mysqli_fetch_assoc($sql);
		$cek = mysqli_num_rows($sql);		
		if ($cek > 0)
		{
			
			session_start();
            $_SESSION['u_username'] = $login['u_id'];; header('location: userhome.php'); die();
		}
		else
		{

		}
	}
	mysqli_close($con);
?>
 