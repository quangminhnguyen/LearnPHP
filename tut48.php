<?php 

$string = 'Hello is, why I am so smart is';
$find = 'is';

echo strpos($string, $find);
echo '<br>';
echo strpos($string, $find, 7); // start to find at index 7 onward.
echo '<br>';
/* Prints the position where the string $find is found. */

$offset = 0;
while ($string_position = strpos($string, $find, $offset)) {
	echo $string_position.'<br>';
	$offset = $string_position + 2;
}
?>