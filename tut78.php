<?php 
if (isset($_POST['name'])) {
	if (!empty($_POST['name'])) {
		$file_to_write = fopen('names78.txt', 'a'); 
		fwrite($file_to_write, $_POST['name']."\n");
		//secho 'Successfully append '.$_POST['name'];
		fclose($file_to_write); 


		// Use file functionto read line by line.
		echo 'List of current names: <br>';
		$readin = file('names78.txt');
		$length = count($readin);
		$count = 0;
		foreach($readin as $fname) {
			echo trim($fname);
			$count += 1;
			// Only any comma behind if itis not hte last name.
			if ($count != $length) {
				echo ', ';
			}

		}

	} else {
		echo 'Please type in a name.';
	}
} 
?>

<form action='tut78.php' method="POST">
	Name:<br>
	<input type="text" name="name"><br><br>
	<input type="submit" value="Submit">
</form>