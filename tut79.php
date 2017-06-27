<?php 
if (isset($_POST['name'])) {
	if (!empty($_POST['name'])) {
		$file_to_write = fopen('names79.txt', 'a'); 
		fwrite($file_to_write, $_POST['name']."\n");
		echo 'Successfully append '.$_POST['name'];
		fclose($file_to_write); 
	} else {
		echo 'Please type in a name.';
	}
} 
?>

<form action='tut79.php' method="POST">
	Name:<br>
	<input type="text" name="name"><br><br>
	<input type="submit" value="Submit">
</form>