<?php
	include "dbconnect.php";
	$namatim = @$_POST['tim_nama'];
	$username = @$_POST[ 'tim_username'];
	$password = @$_POST['tim_password'];
	$pass= md5($password);
	$papi = @$_POST['tim_papi'];
	$submit = @$_POST['submit'];
	if($submit)
	{
		$sql = mysqli_query($con, "select * from users where u_username = '$username'") or die (mysqli_error());
		$cek = mysqli_num_rows($sql);
		if ($cek > 0)
		{
			?>
   			<script type="text/javascript">
   			 alert("Sorry the username has already been taken!");
   			 window.location.href="datatim.php";
   			</script> <?php
		}
		else
		{
			if($papi=='Putra')
			{
				$masuk = "insert into users (u_username, u_nama, u_papi, u_password) values('$username', '$namatim', '0', '$pass')";
				$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
				mysqli_close($conn);
				header("location: datatim.php");
				die();
			}
			else
			{
				$masuk = "insert into users (u_username, u_nama, u_papi, u_password) values('$username', '$namatim', '1', '$pass')";
				$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
				mysqli_close($conn);
				header("location: datatim.php");
				die();
			}

		}
	}
	mysqli_close($con);
?>
 