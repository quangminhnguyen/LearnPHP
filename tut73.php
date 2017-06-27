<?php 

// THINK THIS AS THE LOGIN PAGE.

// Session stores user's information.
// Session is stored in the server, nad is hidden from the user. 
// There is no easy way to change session
// There is a table to store the user data.
// Session is more sectured than Cookies.

session_start();
$_SESSION['username']='Minh'; //Sets a session. 
$_SESSION['age']=20; // another sessional variable for age.
// This could be a login page. The hard code value 'Alex' 
// can replace the 
?>