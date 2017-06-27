<?php 
/*
// Random number in is automatically seed.
$random_number = rand(); // No argument or 2 arugment
$max_random_number = getrandmax();
echo $random_number;
echo '<br>';
echo $max_random_number;
echo '<br>';
*/
if (isset($_POST['roll'])) {
	$rand = rand(1, 6);
	echo $rand;
}

?>


<form action="tut60.php" method="POST">
		<input type="submit" name="roll" value="Roll dice.">
</form> 