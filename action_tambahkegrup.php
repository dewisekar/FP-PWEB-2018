<?php
	include "dbconnect.php";
	$id = @$_POST['tim'];
	$group = @$_POST['group'];
	$nrp = @$_POST[ 'tim_pool'];
	$submit = @$_POST['submit'];

	if($submit)
	{
		
		$masuk = "update users set u_group='$group', u_pool = '$nrp' where u_id = '$id'";
		$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
		mysqli_close($con);
		header("location: updategroup.php");
		die();
		
	}
?>
 