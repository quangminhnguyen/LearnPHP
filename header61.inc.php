<?php 
// Want the form to be dynamically submit to the page that includes the form.
$script_name = $_SERVER['SCRIPT_NAME'];
?>

<form action= <?php echo $script_name;?> method="POST"> 
<input type="submit" name="submit" value="Submit">
</form>