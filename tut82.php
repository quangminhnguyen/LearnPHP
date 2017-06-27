<?php 
//Reads a specific directory.

$dir_name = 'directory';
$dir = opendir($dir_name.'/'); 

// Checks if the directory is valid.
if ($dir) {

	// use readdir to read file by file.
	while ($file = readdir($dir)) {
		//echo $file.'<br>';
		echo '<a href="'.$dir_name.'/">'.$file.'</a><br>';
	}
}
?>