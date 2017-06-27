<?php
$redirect_page ='http://google.co.uk'; // URL of the page to be directed to.
$redirect = true;

# Use header function to specify the thep page we want to redirect users to.
header('Location: '.$redirect_page); // HEADER FUNCTION MUST BE CALLED BEFORE THE CONTENT.


/* Cannot have HTML content after calling header function.
if you want to have HTML content before php code. You use <? ob_start(); ?>; placing them before 
HTML code. Also use ob_end_clean() to clean the output buffer.
*/

?>
<h1> My Page </h1>