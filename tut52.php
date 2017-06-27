<?php 

$find = array('Minh', 'Phuc', 'Andy'); // Names to find in the user input.
$replace = array("M***", 'P***', 'A***'); 

// Server side.
if (isset($_POST['user_input_text']) && !empty($_POST['user_input_text'])) {
	$user_input_text = $_POST['user_input_text'];
	echo 'User Input text: '.$user_input_text;

	// replace the words in array $find that by the words in $replace in that respective order.
	$user_input_new = str_replace($find, $replace, $user_input_text);
	echo '<br>Formated text: '.$user_input_new;

	// str_ireplace for INCENSITIVE CASE REPLACE.
} 
?>


<hr>

<form action="tut52.php" method="POST">
	<textarea name="user_input_text" rows="7" cols="30">  </textarea> <br> <br>
	<input type="submit" value="Submit">
</form>