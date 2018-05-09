<?php
  include("dbconnect.php");

  $query = "Select * from users";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
/*
  while ($row = $result -> fetch_assoc())
  {
    echo $row["Nama"];
    echo $row["NRP"];
    echo "<br>";
  }

  print_r($row);
*/  mysqli_close($con);
?>
  <table border="1">
    <tr>
      <th>NRP</th>
      <th>Nama</th>
    </tr>
<?php for ($i=0;$i<sizeof($row);$i++) { ?>
<tr>
    <td> <?php echo $row[$i]['username']?></td>
    <td> <?php echo $row[$i]['name']?></td>
    <td> <a href="?act=del&nrp"> delete</a> / <a href="#"> edit </a></td>
</tr>
  <?php } ?>
  </table>