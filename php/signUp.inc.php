<?php

if (isset($_POST['submit'])) {
	include_once 'dbconnection.php';

	$email = mysqli_real_escape_string($conn, $_POST['id']);
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);
	$ticketnr = mysqli_real_escape_string($conn, $_POST['tNr']);

	//erro handlers
	// Check for empty fields
	if (empty($email) || empty($password) || empty($ticketnr)) {
		header("Location: ../html/inloggen.php?signup=empty");
		exit();
	} else{
		//Check if input characters are valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../html/inloggen.php?signup=email");
			exit();
		}  else {
			$sql = "SELECT * FROM users WHERE ticketnr='$ticketnr' ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../html/inloggen.php?signup=tickettaken");
				exit();
			} else {
				//hashing password
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				//Insert user into database
				$sql = "INSERT INTO users (email, ticketnr, password) VALUES ('$email', '$ticketnr', '$hashedPwd');";
				mysqli_query($conn, $sql);
				header("Location: ../html/inloggen.php?signup=succes");
				exit();
			}
		}
	}

} else{
	header("Location: ../html/inloggen.php");
	exit();
}

?>