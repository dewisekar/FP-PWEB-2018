<?php
	$dbh = new PDO("mysql:host=localhost;dbname=vkvxweok_fp05111640000004", "root", "");
	if(isset($_POST['submit'])){
		/*$id= $_POST['p_id'];
		$file_name = $_FILES['fileToUpload']['name'];
		$array = explode(".", $file_name);
		$name = $_FILES['fileToUpload']['type'];
		$data = file_get_contents($_FILES['fileToUpload']['tmp_name']);
		$stmt = $dbh->prepare("inser into filefoto values('',?,?,?,?");
		$stmt->bindParam(1,$file_name);
		$stmt->bindParam(2,$name);
		$stmt->bindParam(3,$id);
		$stmt->bindParam(4,$data);
		$stmt->execute();*/
		$masuk = "insert into filefoto (f_nama, f_mime, f_timid) values ('halo', 'hai', '1')";
			$masuk2 = mysqli_query($dbh, $masuk) or die (mysqli_error());;
		header("location: berkasonline.php");
			die();		
		/*if($masuk2){
			header("location: berkasonline.php");
		die();
	
		}
		else{
			echo "gak masuk sist";
		}*/
	}
		
?>