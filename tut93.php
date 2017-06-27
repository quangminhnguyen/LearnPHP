<?php 
// Unique hit counter. count based on user IP address.


function hit_count() {
	$ip_address = $_SERVER['REMOTE_ADDR']; // Gets user ip address.
	//echo $ip_address;

	$found = false;

	$ip_file = file('ip93.txt');
	foreach($ip_file as $ip) {
		if (trim($ip) == $ip_address) {
			$found = true;
			break;
		} 
	}

	/* The ip is not in the list ==> new user => increment count*/
	if ($found == false) {
		$filename = 'count93.txt';
		$file  = fopen($filename, 'r');
		$counter = fread($file, filesize($filename));
		$counter += 1;
		fclose($file);


		$file = fopen($filename, 'w');
		fwrite($file, $counter);
		fclose($file);

		// Add to the list of existing IP.
		$file = fopen('ip93.txt', 'a');
		fwrite($file, $ip_address."\n");
		fclose($file);
	} 
}

?>