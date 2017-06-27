<?php 

$filename = 'file84b.txt';

if (file_exists($filename)) {
	echo 'File already exists.';
} else {
	$open_file = fopen($filename, 'w');
	fwrite($open_file, 'Nothing');
	fclose($open_file);
}

?>