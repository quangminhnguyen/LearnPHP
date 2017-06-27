<?php 
// use the unlink fcn to delete the file
if (unlink('filetodelete.txt')) {
	echo 'File has been deleted.';
} else {
	echo 'Error while deleting file.';
}


// renaming file using the rename fcn
echo '<br>';
$filename = 'filetorename.txt';
$rand = rand(10000,99999);
if (rename($filename, $rand.'.txt')) {
	echo 'File '.$filename.' has ben renamed to <strong>'.$rand.'.txt </strong>';
} else {
	echo 'Error renaming';
}

?>