<?php
	include "dbconnect.php";
	$id = @$_POST['p_id'];
	$nama = @$_POST['p_nama'];
	$nrp = @$_POST[ 'p_nrp'];
	$nopung = @$_POST['p_nopung'];
	$posisi = @$_POST['p_posisi'];
	$submit = @$_POST['submit'];
	$id = @$_POST['p_id'];

	if($submit)
	{
		if($posisi=='Kiper')
		{
			$masuk = "update pemain set p_nama='$nama', p_nrp = '$nrp', p_nopung = '$nopung', p_posisi ='0' where p_id = '$id'";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}
		else
		{
			$masuk = "update pemain set p_nama='$nama', p_nrp = '$nrp', p_nopung = '$nopung', p_posisi ='1' where p_id = '$id'";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}		
	}
?>
 