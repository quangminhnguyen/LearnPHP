<?php
if(isset($_POST['submit'])) {
	if (isset($_FILES['file'])) {
		$name = $_FILES['file']['name']; // Real name of the files.
		echo $name;
		$tmp_name = $_FILES['file']['tmp_name']; // temporarily path of the file.
		echo '<br>';
		echo $tmp_name;

		if (move_uploaded_file($tmp_name, 'directory/'.$name)) {
			echo 'Successfully uploaded';
		} else {
			echo 'Please choose a file.';
		}
	} else {
		echo 'File not uploaded yet.';
	}
} 



?>

<form action="tut87ver2.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" name="submit" value="Submit">
</form> 
