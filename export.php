<?php  
//export.php  
	@include 'dbconnect.php';
	$output = '';
	$timid = $_POST['timid'];
	$no = 0;
	$no1 = 0;
	if(isset($_POST["export"]))
	{
	 	$query = "SELECT * FROM pemain inner join users on users.u_id = pemain.p_timid where p_timid = '$timid'";
	 	$result = mysqli_query($con, $query);
	 	$query = "SELECT * FROM official inner join users on users.u_id = official.o_timid where o_timid = '$timid'";
	 	$result1 = mysqli_query($con, $query);
	 	if(mysqli_num_rows($result) > 0)
	 	{
	 	 $output .= '
	   		<table class="table" bordered="1">  
	                    <tr>  
	                        <th>No</th>  
	                        <th>Nama Pemain</th>  
	                        <th>NRP</th>  
	       					<th>No. Punggung</th>
	       					<th>Posisi</th>
	       					<th>Tim</th>
	                    </tr>
	  	';
	  	while($row = mysqli_fetch_array($result))
	  	{
	  	 $output .= '
	  	  <tr>  
	  	    <td>'.++$no.'</td>  
	  	    <td>'.$row["p_nama"].'</td>  
	  	    <td>'.$row["p_nrp"].'</td>  
	  	    <td>'.$row["p_nopung"].'</td>  
	  	    <td>'.$row["p_posisi"].'</td>
	  	    <td>'.$row["u_nama"].'</td>
	  	  </tr>
	  	 ';
	  	}
	  	$output .= '</table>';
	  	 $output .= '
	   		<table class="table" bordered="1">  
	                    <tr>  
	                        <th>No</th>  
	                        <th>Nama Official</th>  
	                        <th>No. Identitas</th>  
	       					<th>Posisi</th>
	       					<th>Tim</th>
	                    </tr>
	  	';
	  	while($row1 = mysqli_fetch_array($result1))
	  	{
	  	 $output .= '
	  	  <tr>  
	  	    <td>'.++$no1.'</td>  
	  	    <td>'.$row1["o_nama"].'</td>  
	  	    <td>'.$row1["o_noidentitas"].'</td>   
	  	    <td>'.$row1["o_posisi"].'</td>
	  	    <td>'.$row1["u_nama"].'</td>
	  	  </tr>
	  	 ';
	  	}
	  	$output .= '</table>';
	  	header('Content-Type: application/xls');
	  	header('Content-Disposition: attachment; filename=download.xls');
	  	echo $output;
	 	}
	}
?>
