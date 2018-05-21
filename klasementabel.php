<?php
   include 'dbconnect.php';
   
  $qry="SELECT * FROM users where  u_group = 'A' order by u_pool";
  $result = mysqli_query($con,$qry);
  $groupA = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
  $qry="SELECT * FROM users where  u_group = 'B' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupB = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where  u_group = 'C' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupC = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where  u_group = 'D' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupD = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where u_group = 'E' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupE = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where u_group = 'F' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupF = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where  u_group = 'G' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupG = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where  u_group = 'H' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupH = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM users where  u_group = 'W' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupW = mysqli_fetch_all($result,MYSQLI_ASSOC);

  $qry="SELECT * FROM users where  u_group = 'X' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupX = mysqli_fetch_all($result,MYSQLI_ASSOC);

  $qry="SELECT * FROM users where u_group = 'Y' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupY = mysqli_fetch_all($result,MYSQLI_ASSOC);

  $qry="SELECT * FROM users where  u_group = 'Z' order by u_pool asc";
  $result = mysqli_query($con,$qry);
  $groupZ = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_close($con);

 ?>