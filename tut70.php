<?php 

$match = 'emichan';

if isset($_POST['password']){
	$password = $_POST['password']; // could use htmlentities to display the password back to our user.
	if ($password == $match) {
		echo 'That is correct';
	} else {
		echo 'That is incorrect';
	}
}

?>
<!-- POST doesn't display anything on -->
<form action="tut70.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br> <br>
	<input type="submit" value="Submit">
</form>