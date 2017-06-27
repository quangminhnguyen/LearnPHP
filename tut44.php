<?php 
$string = 'This is a string.';

// Check if the word is in the the string.
if (preg_match('/is/', $string)) {
	echo 'the string is found';
} else {
	echo 'the stringg is not found';
}


echo '<br>';
if (preg_match('/this/', strtolower($string))) {
	echo 'the string is found';
} else {
	echo  'the string is not found';
}

?>