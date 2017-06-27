<?php

require 'conf65.inc.php';
//echo $ip_address; 


foreach($ip_blocked as $ip) {
	if ($ip == $ip_address) {
		die();
	}
}
?>

<h1> <strong> Welcome </strong> </h1>