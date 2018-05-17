<?php
	include "dbconnect.php";
	$username = @$_POST['u_username'];
	$password = @$_POST[ 'u_password'];
	$submit = @$_POST[ 'submit'];

	if($submit)
	{
		$sql = mysqli_query($con, "select * from admin where a_username = '$username' and a_password = md5('$password')") or die (mysqli_error());
 		$login = mysqli_fetch_assoc($sql);
		$cek = mysqli_num_rows($sql);		
		if ($cek > 0)
		{
			
			session_start();
            $_SESSION['a_username'] = $login['a_id'];; header('location: adminhome.php'); die();
		}
		else
		{

		}
	}
	mysqli_close($con);
?>
 