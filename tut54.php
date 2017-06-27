<?php
if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) {
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	$offset = 0; // Starting to search from the start of the text.


	// substr_replace -> replaces the string knowing the starting index.
	// str_replace -> replace all occurences in the string.
	if (!empty($text)&&!empty($search)&&!empty($replace)) {

		// Use while to search for ALL substring in the text.
	
		while ($strpos = strpos($text, $search, $offset)) {

			// $strpos is the order to be replaced. 
			$text = substr_replace($text, $replace, $strpos, strlen($search));
			$offset = $strpos +strlen($search);
		} 

		
		// Second method, using str_replace instead.
		// $text = str_replace($search, $replace, $text); 


	} else {
		echo 'Please fill in all fields.';
	}
	echo '<br>'.$text;
}
?>

<form action="tut54.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for: <br>
	<input type="text" name="searchfor"><br><br>
	Replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and Replace">

</form>