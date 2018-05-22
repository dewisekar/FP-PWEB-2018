<?php
  @include 'action_jadwal.php';
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
      <li><span>Group, Jadwal, dan Klasemen</span>
        <ul>
        <li><a href="datagroup.php">Data Group</a></li>
        <li><a href="jadwal.php">Jadwal</a></li>
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

	<div class="col-md-12 text-center animate fadeInDown">
      <img src="images/logoifc2.png" style="width: 15%; margin-bottom: 0; margin-top: 0; padding-bottom: 0;" >
      <h2 style="margin-top: 0; margin-bottom: 0; padding-bottom: 0;">Klasemen ITS Futsal Championship 2018</h2>
  </div>
  
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
               
            </tr>
          </thead>
          <tbody>
             <?php for ($i=0;$i<sizeof($groupA);$i++) { ?>
           <tr>
              <td><p style="font-size: 15px;"><?php echo $groupA[$i]['u_nama']?> VS <?php echo $groupA1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupA[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupB);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupB[$i]['u_nama']?> VS <?php echo $groupB1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupB[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupC);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupC[$i]['u_nama']?> VS <?php echo $groupC1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupC[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupD);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupD[$i]['u_nama']?> VS <?php echo $groupD1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupD[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupE);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupE[$i]['u_nama']?> VS <?php echo $groupE1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupE[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupF);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupF[$i]['u_nama']?> VS <?php echo $groupF1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupF[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupG);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupG[$i]['u_nama']?> VS <?php echo $groupG1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupG[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupH);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupH[$i]['u_nama']?> VS <?php echo $groupH1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupH[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupW);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupW[$i]['u_nama']?> VS <?php echo $groupW1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupW[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
           <?php for ($i=0;$i<sizeof($groupX);$i++) { ?>
           <tr>
              <td><p style="font-size: 15px;"><?php echo $groupX[$i]['u_nama']?> VS <?php echo $groupX1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupX[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupY);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupY[$i]['u_nama']?> VS <?php echo $groupY1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupY[$i]['j_tanggal']?></p></td>
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
               
            </tr>
          </thead>
          <tbody>
            <?php for ($i=0;$i<sizeof($groupZ);$i++) { ?>
            <tr>
              <td><p style="font-size: 15px;"><?php echo $groupZ[$i]['u_nama']?> VS <?php echo $groupZ1[$i]['u_nama']?></p><p style="font-size: 15px;"><?php echo $groupZ[$i]['j_tanggal']?></p></td>
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
          <ul class="icons" style="background: rgba(66,156,227,0.4);">
            <li><a href="https://www.twitter.com/ifc_2018" target="_blank" class="icon icon-twitter" ><span>Twitter</span></a></li>
            <li><a href="#" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="https://www.youtube.com/channel/UCMN5Kb0LH6W7H8R2VQkRk0w" target="_blank" class="icon icon-youtube"><span>Youtube</span></a></li>
            <li><a href="https://www.instagram.com/ifc_2018" target="_blank" class="icon icon-instagram"><span>Instagram</span></a></li>
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