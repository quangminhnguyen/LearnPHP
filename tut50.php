<?php 

$string = 'This part don\'t search. This part search.';
$string = substr_replace($string, 'alex', 29, 4);

echo $string;
echo '<br>';

$string2 = 'huhu';
$string2 = substr_replace($string2, 'ii', 2, 2);
echo $string2;


// str_replace => replaced all strings at once.
echo '<br>';
$string = 'This is a string, and is an example';
$new_string = str_replace('is', 'are', $string); // replace ALL substring is with are 

echo $new_string;


// REPLACE MULTIPLE STRINGS ==> use array.
echo '<br>';
$find = array('is', 'string', 'example');
$new_string2 = str_replace($find, '', $string);
echo $new_string2;



?>