<?php
	include "dbconnect.php";
	$papi = @$_POST['papi'];
	$group = @$_POST[ 'group'];
	$th = @$_POST['timhome'];
	$ta = @$_POST['timaway'];
	$tanggal = @$_POST['tanggal'];
	$submit = @$_POST['submit'];

	if($submit)
	{
		
			$masuk = "insert into jadwal (j_th, j_ta, j_tanggal, j_group, j_papi) values ('$th', '$ta', '$tanggal', '$group', '$papi')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: updatejadwal.php");
			die();
	}
?>
 