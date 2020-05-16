

<!DOCTYPE html>
<html>
<head>
	<title>Sandhu</title>
	<link rel="stylesheet" type="text/css" href="Home.css">
	 <meta charset="utf-8">
	 <script type="text/javascript" src="Home.js"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="maincontent()">
	<nav class="navbar ">
	<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div id="Slide">
  <p>Navigation</p>
  <a href="#" ><i class="fa fa-tachometer fa-2x"></i><b> Dashboard</b></a>
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
  <div id="user"> <?php  if (isset($_SESSION['username'])) : ?>
      <b >Welcome <strong><?php echo $_SESSION['username']; ?></strong></b><?php endif ?></div>
 </div> 
<form action="data.php" method="post">
 <div id="main-control">
 	<section id="block">
 	<div class="block1">
   
 		<p id="text">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<b>Full Stack Web Developer, Waze</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google,Tel Aviv-Yafo,<i class="fa fa-map-marker" id="color"></i>
 			Israel<hr id="horizontal">
 			<i class="fa fa-id-card" id="color"></i><b id="bold">123459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">7-10 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr class="horizontal">
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >20-20 lakh</b><br>
 			<button class="Select" name="Select1">Select</button>
 			<button class="Reject" name="Reject1">Reject</button>
 		</p>
  
 	</div>

 	<div class="block1" id="block1">
 		<p id="text">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<b>Web Developer, Legal Online Operations</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google<i class="fa fa-map-marker" id="color"></i>
 			Mountain View, CA, USA<hr id="horizontal">
 			<i class="fa fa-id-card" id="color"></i><b id="bold">12459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">2-3 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr class="horizontal">
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >20-20 lakh</b><br>
 			<button class="Select" name="Select2">Select</button>
 			<button class="Reject" name="Reject2">Reject</button>
 		</p>
 	</div>
 	<center><div class="block1" id="block2">
 		<p id="text">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<b>Web Developer, Legal Online Operations</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google<i class="fa fa-map-marker" id="color"></i>
 			Mountain View, CA, USA<hr >
 			<i class="fa fa-id-card" id="color"></i><b id="bold">12459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">0-2 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr>
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >20-20 lakh</b><br>
 			<button class="Select" name="Select3">Select</button>
 			<button class="Reject" name="Reject3">Reject</button>
 		</p>
 	</div></center>
 </section>
 <section id="block">
 	<div class="block1">
 		<p id="text">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<b>UX Designer, Dialer</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google<i class="fa fa-map-marker" id="color"></i>
 			Tokyo, Japan<hr id="horizontal">
 			<i class="fa fa-id-card" id="color"></i><b id="bold">3459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">0-1 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr class="horizontal">
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >5-10 lakh</b><br>
 			<button class="Select" name="Select4">Select</button>
 			<button class="Reject" name="Reject4">Reject</button>
 		</p>
 	</div>

 	<div class="block1" id="block1">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<p id="text"><b>UX Design Lead, Payments</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google<i class="fa fa-map-marker" id="color"></i>
 			Bengaluru,Karnataka, India<hr id="horizontal">
 			<i class="fa fa-id-card" id="color"></i><b id="bold">1459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">1-3 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr class="horizontal">
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >10-15 lakh</b><br>
 			<button class="Select" name="Select5">Select</button>
 			<button class="Reject" name="Reject5">Reject</button>
 		</p>
 	</div>
 	<center><div class="block1" id="block2">
 		<p id="text">
 		<a href="#">
 			<i class="fa fa-google fa-2x" id="color"></i>
 		</a><br>
 		<b>Interaction Designer</b><br>
 			<i class="fa fa-building-o" id="color" style="margin-left: -10px;"></i>
 			Google<i class="fa fa-map-marker" id="color"></i>
 			Mountain View, CA, USA<hr>
 			<i class="fa fa-id-card" id="color"></i><b id="bold">12459</b>
 			<i class="fa fa-briefcase" id="color" style="margin-left: 80px;"></i>
 			<b id="bold">7-10 years</b><br>
 			<i class="fa fa-calendar-o" id="color"></i>
 			<b id="bold">Full Time</b><hr>
 			<i class="fa fa-user" id="color"></i>
 			<b id="bold">3 Candidate</b>
 			<i class="fa fa-money" id="color" style="margin-left: 60px;"></i>
 			<b id="bold" >20-20 lakh</b><br>
 			<button class="Select" name="Select6">Select</button>
 			<button class="Reject" name="Reject6">Reject</button>
 		</p>
 	</div></center>
 </section>
 </div>
</form>
<script type="text/javascript" src="Home.js"></script>
</nav> 
</body>
</html>