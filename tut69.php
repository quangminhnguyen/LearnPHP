<?php 

// checked if the variables have been submitted.
// It is empty? or does value == NULL
// Display back to user.

if (isset($_GET['day'])  && isset($_GET['date']) && isset($_GET['year'])) {
	// echo 'halo';
	if (!empty($_GET['day']) && !empty($_GET['date']) && !empty($_GET['year']) ) {
		echo $_GET['day'].'<br>';
		echo $_GET['date'].'<br>';
		echo $_GET['year'].'<br>';
	} else {
		echo 'Fill in all fields';
	}
}


?>
<form action="tut69.php" method="GET">
	Day: <br> <input type="text" name="day"> <br>
	Date:<br> <input type="text" name="date"><br>
	Year: <br><input type ="text" name="year"><br>
	<input type="submit" value="Submit">
</form>