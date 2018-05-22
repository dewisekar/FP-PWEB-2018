<?php
include 'dbconnect.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$res = mysqli_query($con, "SELECT f_nama, f_type, f_size, f_content FROM filefoto WHERE f_id = '$id'") or die("Error: query failed");

	list($name, $type, $size, $content) = mysqli_fetch_array($res);

	header("Content-length: $size");
	header("Content-type: $type");
	header("Content-disposition: attachment; filename=$name");
	echo $content;
}

?>