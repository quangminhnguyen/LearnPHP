<?php

if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	if (strtolower($user_name) == 'minh') {
		echo 'You are smart, '.$user_name;
	}
} 	

?>

<form action="" method="GET">
	Name: <input type="text" name="user_name"><br><br>
	<input type="submit" value="submit">
</form>