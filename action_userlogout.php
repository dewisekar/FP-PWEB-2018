<?php
	session_start();
	unset($_SESSION['u_username']);	
	header("Location: index.php");
	die();
	exit;
?>