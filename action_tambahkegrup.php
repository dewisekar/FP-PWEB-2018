<?php
	include "dbconnect.php";
	$id = @$_POST['tim'];
	$group = @$_POST['group'];
	$nrp = @$_POST[ 'tim_pool'];
	$submit = @$_POST['submit'];

	if($submit)
	{
		
		$sql = mysqli_query($con, "select * from users where u_group = '$group' and u_pool = '$nrp'") or die (mysqli_error());
		$cek = mysqli_num_rows($sql);
		if ($cek > 0)
		{
			?>
   			<script type="text/javascript">
   			 alert("Maaf posisi sudah diambil!");
   			 window.location.href="updategroup.php";
   			</script> <?php
		}
		else{
		$masuk = "update users set u_group='$group', u_pool = '$nrp' where u_id = '$id'";
		$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
		mysqli_close($con);
		header("location: updategroup.php");
		die();
		}
		
	}
?>
 