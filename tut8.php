<?php

$name = "Alex";
$age = 15; 

if (strtolower($name) == "alex") {

	if ($age >= 21) {
		echo 'You are over 21';
		if (1 == 1) {
			echo 'Yes, 1 is equal to 1';
		}

	} else {
		echo "You are not over 21";
	}

} else {
	echo "You are not Alex";
}

?>