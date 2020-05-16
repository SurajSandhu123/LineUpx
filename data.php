<?php
$db = mysqli_connect('localhost','root','','candidate');

if(isset($_POST['Select1']))
{
	$Jobtitle= "Full Stack Web Developer, Waze";
	$Location = "Israel";
	$Company = "Google,Tel Aviv-Yafo,";
	$Packege ="20-25lakh";
	$Experiance= "7-10Years";
	$Hours="Full-time";
	$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company','$Applied','$Candidate')";
   mysqli_query($db, $query);
   
}
if(isset($_POST['Select2']))
{
	$Jobtitle= "Web Developer, Legal Online Operations";
	$Location = "Mountain View, CA, USA";
	$Company = "Google";
	$Packege ="20lakh";
	$Experiance= "2-3Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
}
if(isset($_POST['Select3']))
{
	$Jobtitle= "Web Developer, Legal Online Operations";
	$Location = "Mountain View, CA, USA";
	$Company = "Google,Tel Aviv-Yafo,";
	$Packege ="20-20lakh";
	$Experiance= "0-2Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
}
if(isset($_POST['Select4']))
{
	$Jobtitle= "UX Designer, Dialer";
	$Location = "Tokyo, Japan";
	$Company = "Google";
	$Packege ="5-10lakh";
	$Experiance= "0-1Years";
	$Hours="Full-time";
	$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
  }
if(isset($_POST['Select5']))
{
	$Jobtitle= "UX Design Lead, Payments";
	$Location = "Bengaluru,Karnataka, India";
	$Company = "Google";
	$Packege ="10-15lakh";
	$Experiance= "1-3Years";
	$Hours="Full-time";
	$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
   
}
if(isset($_POST['Select6']))
{
	$Jobtitle= "Interaction Designer";
	$Location = "Mountain View, CA, USA";
	$Company = "Google";
	$Packege ="10-15lakh";
	$Experiance= "1-3Years";
	$Hours="Full-time";
$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO recuiter (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
   
}
if(isset($_POST['Reject1']))
{
	$Jobtitle= "Full Stack Web Developer, Waze";
	$Location = "Israel";
	$Company = "Google,Tel Aviv-Yafo,";
	$Packege ="20-25lakh";
	$Experiance= "7-10Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
   
}
if(isset($_POST['Reject2']))
{
	$Jobtitle= "Web Developer, Legal Online Operations";
	$Location = "Mountain View, CA, USA";
	$Company = "Google";
	$Packege ="20lakh";
	$Experiance= "2-3Years";
	$Hours="Full-time";
$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
  
}
if(isset($_POST['Reject3']))
{
	$Jobtitle= "Web Developer, Legal Online Operations";
	$Location = "Mountain View, CA, USA";
	$Company = "Google,Tel Aviv-Yafo,";
	$Packege ="20-20lakh";
	$Experiance= "0-2Years";
	$Hours="Full-time";
$Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
  
}
if(isset($_POST['Reject4']))
{
	$Jobtitle= "UX Designer, Dialer";
	$Location = "Tokyo, Japan";
	$Company = "Google";
	$Packege ="5-10lakh";
	$Experiance= "0-1Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
  }
if(isset($_POST['Reject5']))
{
	$Jobtitle= "UX Design Lead, Payments";
	$Location = "Bengaluru,Karnataka, India";
	$Company = "Google";
	$Packege ="10-15lakh";
	$Experiance= "1-3Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
   
}
if(isset($_POST['Reject6']))
{
	$Jobtitle= "Interaction Designer";
	$Location = "Mountain View, CA, USA";
	$Company = "Google";
	$Packege ="10-15lakh";
	$Experiance= "1-3Years";
	$Hours="Full-time";
    $Applied ="245789";
	$Candidate =3;
	$query = "INSERT INTO reject (Jobtitle,Location, Packege, Experiance, Hours, Company ,Applied,Candidate) 
					  VALUES('$Jobtitle' , '$Location' , '$Packege', '$Experiance' , '$Hours' , '$Company' ,'$Applied','$Candidate')";
   mysqli_query($db, $query);
  
}
header('location:Home.php');
?>
