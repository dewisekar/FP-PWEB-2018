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
     
  $qry2="SELECT * FROM filefoto inner join users on filefoto.f_timid = users.u_id where users.u_papi ='0'";
  $result = mysqli_query($con,$qry2);
  $row3 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  print_r($row3);
  mysqli_close($con);

 ?>