<?php
echo 'Hello ';

//exit('DIE'); 
// die('ERROR');
echo 'World<br>';


// connecting to mysql. 
// use die/exit to
mysql_connect('localhost', 'minh', '') or die("ERROR making connction with database.");

// If not die ==> must has been connected to the server.
echo 'Connected';
?>