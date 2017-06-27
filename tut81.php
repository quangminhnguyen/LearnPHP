<?php 

$name_array = array('Alex', 'Billy', 'Dale');
$string = implode(', ', $name_array);

$file = fopen('tut81.txt', 'a');
fwrite($file, $string);
fclose($file);

?>