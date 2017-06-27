<?php 
// MORE RELIABLE WAY FOR GETTING USER IP ADDDRESS.

$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; // this is the INTERNET IP ADDRESS instead (router IP address) not an individual IP address.
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; // checking if the user uses proxy.
$remote_addr = $_SERVER['REMOTE_ADDR'];


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($http_x_forwarded_for)) {
	$ip_address = $http_x_forwarded_for;
} else {
	$ip_address = $remote_addr;
}

echo $ip_address;
?>