<?php

$string = 'This is a string.';
$search = '/is/';
/* use preg_match for expression matching */
if (preg_match($search, $string)) {
	echo 'Match found';
} else {
	echo 'No match found';
}
?>