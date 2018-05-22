<?php
	@include 'dbconnect.php';
	$papi = $_GET["papi"];

	if($papi!=""){
		$qry="SELECT * FROM groupifc where g_papi = '$papi'" ;
  		$result = mysqli_query($con,$qry);
  		$timcow = mysqli_fetch_all($result,MYSQLI_ASSOC);
       echo  '<option value="">Select Group</option>'; 
  		for ($i=0;$i<sizeof($timcow);$i++) {
                  echo '<option value="'.$timcow[$i]['g_id'].'">'.$timcow[$i]['g_id'].'</option>';
        }
  		mysqli_close($con);
  	}
?>