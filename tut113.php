<?php
$conn_error  = 'Cannot connect to the database';



// Connecting PHP to database.
$mysql_host = 'loclhost';
$mysql_user = 'root';
$mysql_pass = '';


$database_name = 'database110';
/* Login to database server. */
if (@mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {

	/* Select the database.*/
	if (@mysql_select_db($database_name)) {
		echo 'Connected';
	} else {
		echo 'Cannot connect to the server';
	}
} else {
	echo 'Cannot login to the database server.';
}




?>