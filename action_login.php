<?php
	include "dbconnect.php";
	$username = @$_POST['username'];
	$password = @$_POST[ 'password'];
	$submit = @$_POST[ 'submit'];

	if($submit)
	{
		if($username == "" || $password == "")
		{
			?> <script type="text/javascript"> alert("hai"); </script>
			<?php
		}
		else
		{
			$sql = mysqli_query($con, "select * from users where username = '$username' and password = '$password'") or die (mysqli_error());
			$cek = mysqli_num_rows($sql);
			echo "$cek";
		}
	}
?>
