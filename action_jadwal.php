<?php
   include 'dbconnect.php';
   
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'A' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupA = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'A' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupA1 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
 $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'B' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupB = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'B' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupB1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


 $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'C' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupC = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'C' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupC1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'D' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupD = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'D' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupD1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'E' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupE = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'E' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupE1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'F' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupF = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'F' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupF1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'G' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupG = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'G' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupG1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'H' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupH = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'H' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupH1 = mysqli_fetch_all($result,MYSQLI_ASSOC);


  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'W' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupW = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'W' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupW1 = mysqli_fetch_all($result,MYSQLI_ASSOC);

  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'X' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupX = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'X' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupX1 = mysqli_fetch_all($result,MYSQLI_ASSOC);

  $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'Y' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupY = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'Y' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupY1 = mysqli_fetch_all($result,MYSQLI_ASSOC);

 $qry="SELECT * FROM jadwal inner join users on jadwal.j_th = users.u_id where  j_group = 'Z' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupZ = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM jadwal inner join users on jadwal.j_ta = users.u_id where  j_group = 'Z' order by j_tanggal asc";
  $result = mysqli_query($con,$qry);
  $groupZ1 = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_close($con);

 ?>