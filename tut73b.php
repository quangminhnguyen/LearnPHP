<?php 

session_start();

// Have to set the session variable first.
if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
	echo 'Welcome'.$_SESSION['username'].' You are '.$_SESSION['age'];
} else {
	echo 'Please log in.';
}
?>


