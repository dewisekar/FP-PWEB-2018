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
  $qry="SELECT * FROM users where u_papi= '0' and u_group is null";
  $result = mysqli_query($con,$qry);
  $groupcow = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $qry="SELECT * FROM users where u_papi= '1' and u_group is null";
  $result = mysqli_query($con,$qry);
  $groupcew = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_close($con);
  include 'klasementabel.php';
  $act = isset($_GET['act']) ? $_GET['act'] : "";
  if ($act=="del"){
    $uid = $_GET['uid'];
    include("dbconnect.php");
    mysqli_query($con, "update users set u_group=NULL, u_pool=NULL where u_id=$uid");
    mysqli_close($con);
    header("location:updatejadwal.php");
    die();
  }

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Group dan Jadwal</title>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lte IE 8]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-panels.min.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript" src="js/jquery.visible.js" charset="utf-8"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" charset="utf-8"></script>

<noscript>


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/skel-noscript.css">
<link rel="stylesheet" href="css/style-noscript.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</noscript>
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie8.css">
<![endif]-->
</head>
<body class="homepage">
<div id="syarat" class="row">
<nav id="nav">
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="left-sidebar.html">Galeri</a></li>
      <li><span>Group, Jadwal, dan Klasemen</span>
        <ul>
        <li><a href="jadwal.php">Group dan Jadwal</a></li>
        <li><a href="klasemen.php">Klasemen</a></li>
        </ul>
      <li><a href="syarat.php">Pendaftaran</a></li>
      <li><span>Login</span>
        <ul>
          <li><a href="login.php">User Login</a></li>
          <li><a href="admin_login.php">Admin Login</a></li>
        </ul> 
      </li>        
    </ul>   
  </nav>
  <div class="col-md-12 text-center animate fadeInDown">
      <img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top:3%; padding-bottom: 0;" >
      <h2 style="margin-top: 0; margin-bottom: 0; padding-bottom: 0;">Klasemen ITS Futsal Championship 2018</h2>
  </div>
  <h2 style="text-align: center;">Tambah Tim ke Group </h2>
  <div class="col-md-2"></div>
  <div class="col-md-8" style="height: auto; border: none;">
    <style>  
    label{
      color: white;
    }  
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        padding: 0; margin: 0;
    }
    
    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }
    
    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    </style>  
    
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')">Putra</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">Putri</button>
    </div>
    
    <div id="London" class="tabcontent" style="display: block;">
      <form action="action_tambahkegrup.php" name="myForm" onsubmit="return validateForm()" method="POST" style="margin-top: 5% ;">
        <div class="form-group">
          <label for="email">Nama Tim:</label>
          <select id="country" class="form-control"  name="tim">
          <?php for ($i=0;$i<sizeof($groupcow);$i++) {
            echo '<option value="'.$groupcow[$i][u_id].'">'.$groupcow[$i][u_nama].'</option>';
          }
          ?>
          </select>
        </div>
        <div class="form-group">
        <label for="email">Group:</label>
          <select id="country" class="form-control" name="group">
              <option>A</option>
              <option>B</option>
              <option>C</option>
              <option>D</option>
              <option>E</option>
              <option>F</option>
              <option>G</option>
              <option>H</option>
          </select>
        </div>
        <div class="form-group" >
          <label for="email">Pool: </label>
          <select class="form-control" name="tim_pool">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
        </div>
        <div class="form-group">
          <a>
            <input type="submit" value="Submit" name="submit">
          </a>
        </div>
    </form>
    </div>
    
    <div id="Paris" class="tabcontent">
      <form action="action_tambahkegrup.php" name="myForm" onsubmit="return validateForm()" method="POST" style="margin-top: 5% ;">
        <div class="form-group">
          <label for="email">Nama Tim:</label>
          <select id="country" class="form-control"  name="tim">
          <?php for ($i=0;$i<sizeof($groupcew);$i++) {
            echo '<option value="'.$groupcew[$i][u_id].'">'.$groupcew[$i][u_nama].'</option>';
          }
          ?>
          </select>
        </div>
        <div class="form-group">
        <label for="email">Group:</label>
          <select id="country" class="form-control" name="group">
              <option>W</option>
              <option>X</option>
              <option>Y</option>
              <option>Z</option>
          </select>
        </div>
        <div class="form-group" >
          <label for="email">Pool: </label>
          <select class="form-control" name="tim_pool">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
        </div>
        <div class="form-group">
          <a>
            <input type="submit" value="Submit" name="submit">
          </a>
        </div>
    </form>
    </div>
    


	</div>
  <div class="col-md-2"></div>
  <div class="row" style="width: 100%; padding: 0; margin: 0; margin-bottom: 0;"> 
    <style>
  		.col-md-12{
  			padding: 3%;
        height: auto; 
  		}
      .col-md-8{
        border: 1px solid white;
        padding: 3%;
        margin-top: 3%;
        height: 450px;
      }
  	</style>

	
  
   <div class="col-md-12 text-center" style="margin-top: 0; padding-right: 5;">
    <h1 style="font-size: 40px; font-weight: bold;"> Tim Putra </h1>
    <style type="text/css">
      h1{
        color: white;
        margin-top: 1%;
      }
      h2 a {
        font-weight: 700;
        text-transform: uppercase;
        color: #FB667A;
        text-decoration: none;
      }      
      .container3 th h1 {
          font-weight: bold;
          font-size: 0.8em;
          text-align: left;
          color: white;
          text-align: center;
      }
      
      .container3 td {
          font-weight: normal;
          font-size: 1em;
          -webkit-box-shadow: 0 2px 2px -2px #0E1119;
          -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
      }
      
      .container3 {
          text-align: left;
          overflow: auto;
          width: 100%;
          margin-bottom:  3%;
          display: table;
          padding-bottom: 2%;
          margin-top: 10%;

      }
      
      .container3 td, .container3 th {
          padding-bottom: 2%;
          padding-top: 2%;
          padding-left:2%; 
          text-align: center;
      }
      
      /* Background-color of the odd rows */
      .container3 tr:nth-child(odd) {
          background-color: #3b5b90;
      }
      
      /* Background-color of the even rows */
      .container3 tr:nth-child(even) {
          background-color: #6790c7;
      }
      
      .container3 th {
          background-color: #172745;
      }
      
      .container3 td:first-child { color: white; }
      .container3 td{ color: white; }
      
      .container3 tr:hover {
         background-color: #80a1d9;
        -webkit-box-shadow: 0 6px 6px -6px #0E1119;
           -moz-box-shadow: 0 6px 6px -6px #0E1119;
                box-shadow: 0 6px 6px -6px #0E1119;
      }
      
      .container3 td:hover {
        background-color: #6f7db6;
        color: black;
        font-weight: bold;
        
        box-shadow: #fddcb1 -1px 1px, #fddcb1 -2px 2px, #fddcb1 -3px 3px, #fddcb1 -4px 4px, #fddcb1 -5px 5      px, #fddcb1 -6px 6px;
        transform: translate3d(6px, -6px, 0);
        
        transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
        transition-timing-function: line;
      }
      
      @media (max-width: 800px) {
      .container3 td:nth-child(4),
      .container3 th:nth-child(4) { display: none; }
      }
    </style>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0; ">
      <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1>Group A</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
             <?php for ($i=0;$i<sizeof($groupA);$i++) { ?>
            <tr>
              <td><?php echo $groupA[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupA[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?> 
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1>Group B</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupB);$i++) { ?>
            <tr>
              <td><?php echo $groupB[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupB[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0;">
      <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1>Group C</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupC);$i++) { ?>
            <tr>
              <td><?php echo $groupC[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupC[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>   
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group D </h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupD);$i++) { ?>
            <tr>
              <td><?php echo $groupD[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupD[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group E</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupE);$i++) { ?>
            <tr>
              <td><?php echo $groupE[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupE[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group F</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupF);$i++) { ?>
            <tr>
              <td><?php echo $groupF[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupF[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group G</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupG);$i++) { ?>
            <tr>
              <td><?php echo $groupG[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupG[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container3 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group H</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupH);$i++) { ?>
            <tr>
              <td><?php echo $groupH[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupH[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  </div>
  <div class="col-md-12 text-center" style="margin-top: 0; padding-right: 5;">
    <h1 style="font-size: 40px; font-weight: bold;"> Tim Putri </h1>
    <style type="text/css">
      h1{
        color: white;
        margin-top: 1%;
      }
      h2 a {
        font-weight: 700;
        text-transform: uppercase;
        color: #FB667A;
        text-decoration: none;
      }
      .container2 th h1 {
          font-weight: bold;
          font-size: 0.8em;
          text-align: center;
          color: white;
          margin-top: 5%;

      }
      
      .container2 td {
          font-weight: normal;
          font-size: 1em;
          -webkit-box-shadow: 0 2px 2px -2px #0E1119;
          -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
      }
      
      .container2 {
          text-align: left;
          overflow: auto;
          width: 100%;
          margin-bottom:  3%;
          display: table;
          padding-bottom: 10%;

      }
      
      .container2 td, .container2 th {
          padding-bottom: 2%;
          padding-top: 2%;
          padding-left:2%; 
          text-align: center;
      }
      
      /* Background-color of the odd rows */
      .container2 tr:nth-child(odd) {
          background-color: #903b50;
      }
      
      /* Background-color of the even rows */
      .container2 tr:nth-child(even) {
          background-color: #c8676e;
      }
      
      .container2 th {
          background-color: #451733;
      }
      
      .container2 td:first-child { color: white; }
      .container2 td{ color: white; }
      
      .container2 tr:hover {
         background-color: #eca69c;
        -webkit-box-shadow: 0 6px 6px -6px #0E1119;
           -moz-box-shadow: 0 6px 6px -6px #0E1119;
                box-shadow: 0 6px 6px -6px #0E1119;
      }
      
      .container2 td:hover {
        background-color: #fddcb1;
        color: #403E10;
        font-weight: bold;
        
        box-shadow: #fddcb1 -1px 1px, #fddcb1 -2px 2px, #fddcb1 -3px 3px, #fddcb1 -4px 4px, #fddcb1 -5px 5      px, #fddcb1 -6px 6px;
        transform: translate3d(6px, -6px, 0);
        
        transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
        transition-timing-function: line;
      }
      
      @media (max-width: 800px) {
      .container2 td:nth-child(4),
      .container2 th:nth-child(4) { display: none; }
      }
    </style>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0; ">
       <table class="container2 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group W</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupW);$i++) { ?>
            <tr>
              <td><?php echo $groupW[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupW[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?> 
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container2 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group X</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupX);$i++) { ?>
            <tr>
              <td><?php echo $groupX[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupX[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInLeft" style="margin-top: 0; padding-top: 0;">
       <table class="container2 text-center" >
          <thead>
            <tr>
             
              <th><h1> Group Y</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupY);$i++) { ?>
            <tr>
              <td><?php echo $groupY[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupY[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  <div class="col-md-3 text-center animate fadeInRight" style="margin-top: 0; padding-top: 0;">
       <table class="container2 text-center" >
          <thead>
            <tr>
             
              <th><h1>Group Z</h1></th>
              <th><h1> Action </h1></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupZ);$i++) { ?>
            <tr>
              <td><?php echo $groupZ[$i]['u_nama']?></td>
              <td><a href="?act=del&uid=<?php echo $groupZ[$i]['u_id']?>" class="btn" style="text-align: center; border: none;"><span class="icon icon-trash"></span></a></td>
            </tr>
            <?php } ?>  
          </tbody>
          </table>
  </div>
  </div>
</div>

<div id="footer" style="padding-top: 0">
  <h2> Catch on our social platforms: </h2>
  <div class="container">
    <section class="contact">
          <ul class="icons" style="background: rgba(24,65,80,0.4); margin-top: 0%;">
            <li><a href="#" class="icon icon-twitter" ><span>Twitter</span></a></li>
            <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="icon icon-youtube"><span>Google+</span></a></li>
            <li><a href="#" class="icon icon-instagram"><span>Pinterest</span></a></li>
          </ul>
        </section>
    <div class="row">

      <section class="12u" style="border: 1px solid white; padding-top: 2%; padding-bottom: 4%; padding-left: 4%; padding-right: 4%;" >
       <h1 style="color: white; font-size: 30px;"> Supported by: </h1>
       <img style="align:center; width: 100%;" src="images/sop.png">
       <h1 style="color: white; font-size: 30px;"> Sponsored by: </h1>
       <img style="align:center; width: 100%;" src="images/sponsor.png">
      </section>  
        <div class="copyright">
          <ul class="menu">
            <li style="color: white; margin-top: 5%;">&copy; ITS Futsal Championship 2018</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">

</script>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>