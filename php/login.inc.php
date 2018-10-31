<?php  

session_start();

if (isset($_POST['submit'])) {
	include 'dbconnection.php';

	$email = mysqli_real_escape_string($conn, $_POST['id']);
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	//Check if inputs are empty
	if (empty($email) || empty($password)){
		header("Location: ../html/inloggen.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../html/inloggen.php?login=doesntExist");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../html/inloggen.php?login=wrong_password");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//log in user
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_ticketnr'] = $row['ticketnr'];
					header("Location: ../html/index.html?login=succes");
					exit();
				}
			}
		}
	} 

}

?>