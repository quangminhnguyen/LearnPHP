
<?php
session_start();
// Log out page.
unset($_SESSION['username']);
unset($_SESSION['age']);


// Alternatively can call session_destroy to destroy all session data.
// session_destroy(); // unsetting all sessions between you and server.
?>