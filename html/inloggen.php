<?php
	session_start();
	include_once '../php/dbconnection.php';
?>
<!DOCTYPE html>
<html id="frntPage">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Inloggen</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body  id="frntBody">
		<main id="frntMain">
			<h1 id="title">99 verhalen</h1>
			<form id="signup-form" action="../php/signUp.inc.php" method="POST">
				<fieldset action= "../php/login.inc.php" method="POST">
					<input type="radio" name="tab" id="signIn" checked/>
					<input type="radio" name="tab" id="signUp" />
					<input type="radio" name="tab" id="reset"/>					
					<label for="signIn">Sign in</label>
					<label for="signUp">Sign up</label>
					<label for="reset">Reset</label>
					<input class="signIn signUp reset" type="email" name="id" placeholder="Email"/>
					<input class="signIn signUp" type="password" name="pwd" placeholder="Password"/>
					<input class="signUp" type="text" name="tNr" placeholder="Ticketnr"/>
					<button type="submit" name="submit" id="submit"> </button>
				</fieldset>
			</form>
		</main>
		<script type="text/javascript" src="../js/database.js"></script>
	</body>
</html>