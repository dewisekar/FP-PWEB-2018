<?php
	include "dbconnect.php";
	$nama = @$_POST['o_nama'];
	$noind = @$_POST[ 'o_noidentitas'];
	$posisi = @$_POST['o_posisi'];
	$submit = @$_POST['submit'];
	$id = @$_POST['o_id'];

	if($submit)
	{
		if($posisi=='Coach')
		{
			$masuk = "insert into official (o_nama, o_noidentitas, o_posisi, o_timid) values ('$nama', '$noind', '0', '$id')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}
		else if($posisi=='Ass. Coach')
		{
			$masuk = "insert into official (o_nama, o_noidentitas, o_posisi, o_timid) values ('$nama', '$noind', '1', '$id')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}	
		else
		{
			$masuk = "insert into official (o_nama, o_noidentitas, o_posisi, o_timid) values ('$nama', '$noind', '3', '$id')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}	
	}
?>
 