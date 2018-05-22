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
  $group="W";
  $qry="SELECT * FROM users where u_group = '$group'";
  $result = mysqli_query($con,$qry);
  $timcow = mysqli_fetch_all($result,MYSQLI_ASSOC); 
  print_r($timcow);
  mysqli_close($con);

 ?>