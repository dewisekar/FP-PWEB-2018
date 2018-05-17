<?php
	include "dbconnect.php";
	$nama = @$_POST['p_nama'];
	$nrp = @$_POST[ 'p_nrp'];
	$nopung = @$_POST['p_nopunggung'];
	$posisi = @$_POST['p_posisi'];
	$submit = @$_POST['submit'];
	$id = @$_POST['p_id'];

	if($submit)
	{
		if($posisi=='Kiper')
		{
			$masuk = "insert into pemain (p_nama, p_nrp, p_nopung, p_posisi, p_timid) values ('$nama', '$nrp', '$nopung', '0', '$id')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}
		else
		{
			$masuk = "insert into pemain (p_nama, p_nrp, p_nopung, p_posisi, p_timid) values ('$nama', '$nrp', '$nopung', '1', '$id')";
			$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());
			mysqli_close($con);
			header("location: berkasonline.php");
			die();
		}		
	}
?>
 