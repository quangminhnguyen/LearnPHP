<?php 
# require once checks if the file has been previously required in the page.
require_once 'header.inc.php';

# equivalent to require_once.
if (!defined('header.inc.php')) {
	require 'header.inc.php';
}
?>