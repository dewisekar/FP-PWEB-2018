<?php
	include "dbconnect.php";
	$username = @$_POST['username'];
	$password = @$_POST[ 'password'];
	$name = @$_POST[ 'name'];
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
			$sql = mysqli_query($con, "select * from users where username = '$username'") or die (mysqli_error());
			$cek = mysqli_num_rows($sql);
			if($cek == "1")
			{
				echo "sorry username has been taken";
			}
			else{
				$sql = "INSERT INTO users (username, name, password) values ('$username', '$name', '$password')";
				$masuk = mysqli_query($con, $sql);
				echo "successfully inserted to database";	
			}
			
		}
	}
?>
