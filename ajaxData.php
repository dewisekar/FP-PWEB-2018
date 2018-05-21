<?php
//Include the database configuration file
include 'dbconnect.php';

if(!empty($_POST["country_id"])){

	$qry="SELECT * FROM groupifc where g_papi = ".$_POST['country_id']."";
  	$result = mysqli_query($con,$qry);
  	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    //Count total number of rows
    
    //State option list
       echo '<option value="">Select state</option>';
       for ($i=0;$i<sizeof($row);$i++) {
        echo '<option value="'.$row[$i][g_id].'">'.$row[$i][g_id].'</option>';
      }
    
}

?>