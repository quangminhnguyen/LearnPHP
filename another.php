<?php 
// Use the include statement to include a predefined page.
// include 'header.inc.php';

// Use require instead of include if you want to make sure that the required page is there before the rest of the code gets executed.
require 'header.inc.php';

$var = 10;
echo $var;

# call variable that is defined in the header file.
echo '<br>'.$MAX;


?>