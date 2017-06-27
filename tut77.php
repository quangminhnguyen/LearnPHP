<?php
$file_to_write = fopen('names.txt', 'w'); 
// Changes to fopen('names.txt', 'a') if you want to appennd to the file.
fwrite($file_to_write, "halo");
fwrite($file_to_write, "\nsilly");
fwrite($file_to_write, "\nhoho");
fclose($file_to_write);
?>


