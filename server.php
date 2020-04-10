<?php 
	session_start();

	// variable declaration
	
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database

	

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form


		$db = mysqli_connect('localhost', 'root', '', 'registration');
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, pass1) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	
?>