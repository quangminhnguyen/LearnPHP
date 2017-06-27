<?php 

function has_space($string) {
	# If there is a space in the string.
	if (preg_match('/ /', $string)) {
		return True;
	} else {
		return False;
	}
}


echo has_space('I have a space');

/* srting length */
echo '<br>';
echo strlen('I have a space');


/* print each char.*/
echo '<br>';
$text = 'text';
$text_arr = str_split($text);
foreach($text_arr as $elem) {
	print($elem).'<br>';
}
?>