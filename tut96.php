<?php 

//$string = 'password';

// applying the has function.
// This is one - way encrypt ==> the action cannot be reversed. 
// echo $hashed_string = md5($string);
//exit();

if (isset($_POST['user_password'])) {
	if (!empty($_POST['user_password'])) {
		$user_password = $_POST['user_password'];

		$filename = 'tut96.txt';	
		$openfile = fopen($filename, 'r');
		$correct_password = fread($openfile, filesize($filename));

		if (md5($user_password) == $correct_password) {
			echo 'Correct';
		} else {
			echo 'Incorrect password.';
		}

	} else {
		echo 'Please type in the password';
	}
}


?>

<form action="tut96.php" method="POST">
Password: <input type="text" name="user_password"> <br> <br>
<input type="submit" value="Submit">
</form>

