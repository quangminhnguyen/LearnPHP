<?php 
// Every time the page is refresh ==> call the count function to update the text file with the counting value.

function hit_count() {
	$file = fopen('count92.txt', 'r'); 
	
	// Read current value in the fle count.
	$current = fread($file, filesize('count92.txt'));
	fclose($file);

	// Increment the current value in the file.
	echo $current += 1;

	// rewrite the value into the file
	$file = fopen('count92.txt', 'w');
	fwrite($file, $current);
	fclose($file);
}


?>