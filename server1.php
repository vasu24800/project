<?php
   session_start();
	
 
   $username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	
   
if (isset($_POST['login_user'])) {

	    $db = mysqli_connect('localhost', 'root', '', 'registration');

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			
			$query = "SELECT * FROM users WHERE username='$username' AND pass1='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>