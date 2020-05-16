<?php 
	session_start();

	// variable declaration
//	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost:3306', 'root', '','candidate');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
	// REGISTER USER
		$q= " select * from personalinfo where email =' $email ' && Password = '$password'";
		$result = mysqli_query($db,$q);
		$num = mysqli_num_rows($result);

		// register user if there are no errors in the form
		if ($num == 1) {
			$_SESSION['username'] = $username;
			header('location:Home.php');
           }
           else
           {
		
			$query = "INSERT INTO personalinfo (Username, Email, Password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);
             echo "$username";
			
			//$_SESSION['success'] = "You are now logged in";
			header('location:Login.php');
			//header('location: New folder\Home.php');
		}
?>