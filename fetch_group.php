<?php
	@include 'dbconnect.php';
	$group = $_GET["group"];

	if($group!=""){
		$qry="SELECT * FROM users where u_group = '$group'" ;
  		$result = mysqli_query($con,$qry);
  		$timcow = mysqli_fetch_all($result,MYSQLI_ASSOC);
  		echo '<option value="">Select Tim</option>';  
  		for ($i=0;$i<sizeof($timcow);$i++) {
                  echo '<option value="'.$timcow[$i]['u_id'].'">'.$timcow[$i]['u_nama'].'</option>';
        }
  		mysqli_close($con);
  	}
?>