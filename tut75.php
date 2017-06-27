<?php
$time = time();
setcookie('username', 'minh', $time + 10); // This cookie last 10 sec.

// To unset a cook we just do.
// setcookie('username', 'minh', $time - 10);
?>