<?php 

//Want to submit a form that is included from another file ==> need to update the page to be submitted on hte fly.
include 'header61.inc.php';

// predefied set of environmental information.
//$script_name = $_SERVER['SCRIPT_NAME']; // $_SESSION, S_SERVER
//echo $script_name;

if (isset($_POST['submit'])) {
	echo 'Process 1';
}


?>

