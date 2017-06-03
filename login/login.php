<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Tutorials.com</title>

	<link rel="stylesheet" type="text/css" href="../resources/css/material.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">		
	

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<script src="../resources/js/jquery.min.js"></script>
	<script src="../js/script.js"></script>
	<script type="text/javascript"></script>	
</head>



<body>
	<form action="login.php" method="POST">
		<input type="text" name="username" placeholder="Username" class="form-control text"><br/>
		<input type="password" name="password" placeholder="Password" class="form-control text"><br/>
		<input type="submit" value="Login" class="form-control" id="submit"><br/>		
		<a class="form-control btn" href="register.php" role="button">Register</a>
		<a class="form-control btn" href="../index.php" role="button">Home</a><br/><br/>
		<p id="info"></p>
		<a id="pc" href="password_change.php">Forgot Password?</a>
	</form>
</body>

</html>




<?php
	
	require '../inc/connect.inc.php';
	error_reporting(0);
	session_start();
	members_redirect();

	if(isset($_POST['username']) && isset($_POST['password'])){

		if($_POST['username'] == "" || $_POST['password'] == ""){
			echo '
				<script type="text/javascript">
					$("#info").text("*All Fields Are Required").css("color","#ff1a1a");
				</script>
			';
		}

		else{
			$username = '"'.$_POST['username'].'"';
			$password = '"'.$_POST['password'].'"';

			$results = mysql_query('SELECT username, password FROM users WHERE username COLLATE LATIN1_GENERAL_CS LIKE '.$username.' AND password COLLATE LATIN1_GENERAL_CS LIKE '.$password);

			if(mysql_num_rows($results) == 1) {
				set_session($_POST['username']);
				header('Location: members.php');
			}
			else 
				echo '
					<script type="text/javascript">
						$("#info").text("*Bad Username,Password Combination").css("color","#ff1a1a");
					</script>
				';

			mysql_close();	
		}	
	}
?>




<?php

	function set_session($username){
		$_SESSION['member'] = $username;
	}

	function members_redirect(){
		if(isset($_SESSION['member'])){
			header('Location: members.php');
		}
	}

?>