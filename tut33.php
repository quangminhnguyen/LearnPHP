<?php

// Return the user address.
// SERVER is a preset variable.
$user_ip = $_SERVER['REMOTE_ADDR'];

//echo 'Your IP address is '.$user_ip;


function echo_ip() {

	global $user_ip; // variable outside of the function cannot be accesssed without being declared global in this case.
	$string = 'Your IP is'.$user_ip;
	echo $string;
}


echo_ip();
?>