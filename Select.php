<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandhu</title>
	<link rel="stylesheet" type="text/css" href="Accepted.css">
	 <meta charset="utf-8">
	 <script type="text/javascript" src="Home.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="maincontent()" ng-app="app">
	<nav class="navbar ">
	<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div id="Slide">
  <p>Navigation</p>
  <a href="Home.php" ><i class="fa fa-tachometer fa-2x"></i><b> Dashboard</b></a>
  <a href="Accepted.php" style="margin-left: 2px"> <i class="fa fa-user fa-2x "></i><b> Candidate</b></a>
  <hr>
  <p>Jobs</p>
  <a href="#"><i class="fa fa-video-camera fa-2x" ></i> Live Job</a>
  <a href="Select.php"><i class="fa fa-check-square-o fa-2x"> </i> Accepted Job</a>
  <a href="reject.php"><i class="fa fa-window-close fa-2x"></i> Rejected Job</a>
  <hr>
   <p>Support</p>
   <a href="#"><i class="fa fa-question-circle fa-2x"></i> Help</a>
   <a href="#"><i class="fa fa-book fa-2x"></i> Tutorial</a>
   <a href="#"><i class="fa fa-commenting fa-2x"></i> Feedback</a>
</div>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()" class="icon"><i class="fa fa-bars fa-2x "></i></button>  
  <i class="fa fa-viacoin fa-4x" style="position: absolute; top: 10px; left: 100px;"></i>
  <a href="#"><i class="fa fa-envelope fa-2x" id="mail"></i></a>
  <a href="#"><i class="fa fa-users fa-2x" id="group"></i></a>
  <div id="bar"></div>
  <div id="user"><?php ( $_SESSION['username']) ?></div>
 </div> 
 <?php
 $db=mysqli_connect('localhost','root','','candidate');
$i=1;
$sql = "SELECT Id,Jobtitle,Company,Location,Applied,Experiance,Candidate,Packege,Hours FROM recuiter";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
  echo " <div id=\"main-control\">
  <section id=\"block\" >";
  while($row = mysqli_fetch_assoc($result)) {
    if($i==$row['Id'])
    {
      echo 
"<div class=\"block1\" style=\"display:inline-block;\">
   
    <p id=\"text\">
    <a href=\"#\">
      <i class=\"fa fa-google fa-2x\" id=\"color\"></i>
    </a><br>
    <b>".$row["Jobtitle"]."</b><br>
      <i class=\"fa fa-building-o\" id=\"color\" style=\"margin-left: -10px;\"></i>"
      .$row["Company"]."<i class=\"fa fa-map-marker\" id=\"color\"></i>"
      .$row["Location"]."<hr id=\"horizontal\">
      <i class=\"fa fa-id-card\" id=\"color\"></i><b id=\"bold\">".$row["Applied"]."</b>
      <i class=\"fa fa-briefcase\" id=\"color\" style=\"margin-left: 80px;\"></i>
      <b id=\"bold\">".$row["Experiance"]."</b><br>
      <i class=\"fa fa-calendar-o\" id=\"color\"></i>
      <b id=\"bold\">".$row["Hours"]."</b><hr class=\"horizontal\">
      <i class=\"fa fa-user\" id=\"color\"></i>
      <b id=\"bold\">".$row["Candidate"]." Candidate</b>
      <i class=\"fa fa-money\" id=\"color\" style=\"margin-left: 53px;\"></i>
      <b id=\"bold\" >".$row["Packege"]."<br><br><center style=\"color:green;\">Selected</center></b><br>
       
    </p>
  
  </div>
 
";
}
++$i;
echo ".&nbsp;";
}
}
?>
 
<script type="text/javascript" src="Home.js"></script>
</nav> 
</body>
</html>