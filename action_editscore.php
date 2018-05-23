<?php
	include "dbconnect.php";
	$id = @$_POST['uid'];
	$score1 = @$_POST['j_th'];
	$score2 = @$_POST[ 'j_ta'];
	$submit = @$_POST['submit'];

	if($submit)
	{
		if($score1=="" || $score1==""){
			$masuk = "update jadwal set j_sh= null, j_sa = null where j_id = '$id'";
		$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;
		}
		else{
		$masuk = "update jadwal set j_sh= '$score1', j_sa = '$score2' where j_id = '$id'";
		$masuk2 = mysqli_query($con, $masuk) or die (mysqli_error());;}
		mysqli_close($con);
		header("location: updatejadwal.php");
		die();
	}
?>
 