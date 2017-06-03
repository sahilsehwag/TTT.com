<?php

	require 'connect.inc.php';
	error_reporting(1);

	if(isset($_POST['username']) && isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['conf_new_password']) && isset($_POST['email'])){

		#checking that all fields are filled
		if($_POST['username'] == "" || $_POST['old_password'] == "" || $_POST['new_password'] == "" || $_POST['conf_new_password'] == "" || $_POST['email'] == ""){
			echo 'Error: ALL FIELDS ARE REQUIRED';
		}

		else{
			#adding double quotes to strings
			$email = '"'.$_POST['email'].'"';
			$username = '"'.$_POST['username'].'"';
			$old_password = '"'.$_POST['old_password'].'"';
			$new_password = '"'.$_POST['new_password'].'"';
			$conf_new_password = '"'.$_POST['conf_new_password'].'"';


			if($new_password == $conf_new_password){
				if(check_credentials($email, $username, $old_password)){ #checking credentials
					if(update_password($username, $old_password, $new_password)){ #updating password
						clear_form_fields();
						echo 'Password Updated Succesfully<br>';
						//echo '<strong>redirecting you to login page in 3 seconds</strong>';
						//header('refresh:3,url=login.php');
					}else echo 'Password Update Failed Please Try Again Later.';
				}else echo 'Please Check Your Credentials They Don\'t Match';
			}else echo 'New Password And Confirm New Password Fields Does Not Match';

			mysql_close();
		}	
	}

?>

<form action="password_change.php" method="POST">
	
	Email:<br> <input type="text" name="email" value="<?php echo $_POST['email']?>"><br>
	Username:<br> <input type="text" name="username" value="<?php echo $_POST['username']?>"><br>
	Old Password:<br> <input type="text" name="old_password" value="<?php echo $_POST['old_password']?>"><br>
	New Password:<br> <input type="text" name="new_password" value="<?php echo $_POST['new_password']?>"><br>
	Confirm New Password:<br> <input type="text" name="conf_new_password" value="<?php echo $_POST['conf_new_password']?>"><br><br>

	<input type="submit" value="Change Password"><br>
	<a href="login.php">Login Here</a>
</form>


<?php

	function check_credentials($email, $username, $old_password, $new_password, $conf_new_password){
		$query = 'SELECT email, username, password FROM users WHERE email COLLATE LATIN1_GENERAL_CS LIKE '.$email.' AND username COLLATE LATIN1_GENERAL_CS LIKE '.$username.' AND password COLLATE LATIN1_GENERAL_CS LIKE '.$old_password.'';
		$results = mysql_query($query);

		if(mysql_num_rows($results) == 1) return true;
		else return false;
	}

	function update_password($username, $old_password, $new_password){
		$query = 'UPDATE users SET password = '.$new_password.' WHERE username COLLATE LATIN1_GENERAL_CS LIKE '.$username.' AND password COLLATE LATIN1_GENERAL_CS LIKE '.$old_password;
		if(mysql_query($query)) return true;
		else return false;
	}

	function clear_form_fields(){
		$_POST['email'] = "";
		$_POST['username'] = "";
		$_POST['old_password'] = "";
		$_POST['new_password'] = "";
		$_POST['conf_new_password'] = "";
	}

?>