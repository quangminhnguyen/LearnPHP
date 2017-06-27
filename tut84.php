<?php 
// Checks if a file exist before we actually created it in the server.
$filename = 'image.jpg';

// md5 hashs create a 32 character hash from the file name.
// random file name to store in the server.
// why random ==> less likely to be the same as other existing file, and for security purpose.
$filename = rand(1000, 9999).md5($filename).rand(1000, 9999);


echo $filename;
?>