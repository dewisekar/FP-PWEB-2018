<?php
	include 'dbconnect.php';
	if(isset($_POST['submit'])){

		$allowed = array("jpg" => "image/jpg", "JPG" => "image/JPG", "jpeg" => "image/jpeg", "png" => "image/png", "gif" => "image/gif", "zip" => "application/zip", "txt" => "text/plain");
		$name = $_FILES['fileToUpload']['name'];
		$tmp_name = $_FILES['fileToUpload']['tmp_name'];
		$f_timid = $_POST['p_id'];



		$filesize = $_FILES['fileToUpload']['size'];
		$filetype = $_FILES['fileToUpload']['type'];

		$fp = fopen($tmp_name, 'r');
		$content = fread($fp, filesize($tmp_name));
		$content = addslashes($content);
		fclose($fp);
		
		$ext = pathinfo($name, PATHINFO_EXTENSION);
		if (!array_key_exists($ext, $allowed)) {
			die("Format file tidak valid");
			header("Location:berkasonline.php?");
			die();
		}
		else if ($name) 
		{
		
			$maxsize =5000000;
			if ($filesize > $maxsize) {
				die("Error: Ukuran file terlalu besar");
				//header("Location:admin_kamera.php?error=4");
			} 
			else {	
				$location = "file/$name";
				move_uploaded_file($tmp_name, $location);
				//SQL STAGE
				$query = mysqli_query($con, "INSERT INTO filefoto(f_nama, f_type, f_size, f_content, f_timid) 
					VALUES ('$name', '$filetype', '$filesize', '$content','$f_timid')");
				header("Location:berkasonline.php?");
				die();
				//header("Location:admin_kamera.php?error=1");
			}

			
		}
		else {
			die("Please select a file");
			//header("Location:admin_kamera.php?error=2");
		}		
	}
?>