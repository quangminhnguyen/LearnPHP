<?php
// Try tut87ver2.php
if(isset($_POST['submit'])) {
	$name = $_FILES['file']['name']; // Name of the files.
	//$size = $_FILES['file']['size'];
	//$type = $_FILES['file']['type'];

	// file when upload is stored intemporarily location on the server.
	$tmp_name = $_FILES['file']['tmp_name']; // temporarily name of the file.

	if (isset($name)) {
		if (!empty($name)) {
			// echo 'Ok';
			// Move the uploaded file from temporary location on the server to the folder called uploaded.
			$location = 'directory/';
			if (move_uploaded_file($tmp_name, $location.$name)) {
				echo 'uploaded!';
			} else {
				echo 'not uploaded!';
			}
		} else {
			echo 'Please choose a file';
		}
	} else {
		echo "name not set";
	}
} else {
	echo "?";
}

?>

<form action="tut87.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" name='submit' value="Submit">
</form> 
