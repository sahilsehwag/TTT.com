<?php
	session_start();

	if(isset($_SESSION['member'])){
		echo 'Welcome <strong>'.$_SESSION['member'].'</strong> To Members Area.';
	}else{
		header('Location: login.php');
	}

?>

<form action="logout.php" method="POST">
	<input type="submit" value="Log Out">
</form>