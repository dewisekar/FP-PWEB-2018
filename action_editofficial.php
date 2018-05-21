<?php
	include "dbconnect.php";
	$id = @$_POST['p_id'];
	$nama = @$_POST['p_nama'];
	$nrp = @$_POST[ 'p_nrp'];
	$posisi = @$_POST['p_posisi'];
	$submit = @$_POST['submit'];
	$id = @$_POST['p_id'];

	if($submit)
	{
		if($posisi=='Coach')
		{
			$masuk = "update official set o_nama='$nama', o_noidentitas = '$nrp', o_posisi ='0' where o_id = '$id'";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}
		else if($posisi=='Ass. Coach')
		{
			
			$masuk = "update official set o_nama='$nama', o_noidentitas = '$nrp', o_posisi ='1' where o_id = '$id'";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}
		else
		{
			
			$masuk = "update official set o_nama='$nama', o_noidentitas = '$nrp', o_posisi ='2' where o_id = '$id'";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}		
	}
?>
 