<?php
   include 'dbconnect.php';
   
  session_start();
  if (!isset($_SESSION['a_username'])) {
    ?>
     <script type="text/javascript">
      alert("Sorry, you are not an admin.");
      window.location.href="admin_login.php";
     </script> <?php
  }
  $qry="SELECT * FROM groupifc where g_papi= '0'";
  $result = mysqli_query($con,$qry);
  $groupcow = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM groupifc where g_papi= '1'";
  $result = mysqli_query($con,$qry);
  $groupcew = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_close($con);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="form-group">
        <label for="email">Group:</label>
          <select  class="form-control" name="group" id="group" onChange="changeGroup()">
              <option value="">Select Group</option>
              <?php for ($i=0;$i<sizeof($groupcew);$i++) {
                  echo '<option value="'.$groupcew[$i][g_id].'">'.$groupcew[$i][g_id].'</option>';
                }
              ?>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Tim Home:</label>
          <select class="form-control"  name="tim" id="tim">
            <option value="">Select Home Team</option>
          </select>
        </div>
 </body>
 </html>
<script type="text/javascript">
	function changeGroup()
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "fetch_group.php?group="+document.getElementById("group").value, false);
		xmlhttp.send(null);
		alert(xmlhttp.responseText);
		document.getElementById("tim").innerHTML=xmlhttp.responseText;
	}
</script>