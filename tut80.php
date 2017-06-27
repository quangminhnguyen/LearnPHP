<?php 
$file_to_read = fopen('tut80.txt', 'r');

// Read the data.
$data = fread($file_to_read, filesize('tut80.txt'));

// Splitting the data by comma. ==> data now is in an array.
$array = explode(',', $data);

foreach($array as $name) {
	echo $name.'<br>';
}

// To convert data in an array into a sequence of string ==> use function implode.
echo '<br>';
$string_data =  implode(', ', $array);
echo $string_data;
?>