<?php
$number = 1;

switch ($number) {
	case 1:
		echo 'One';
	break;

	case 2;
		echo 'Two';
	break;

	case 3:
		echo  'Three';
	break;

	default: // Default value not found.
		echo 'Number not Found';
	break;
}


// Case statement for srting.
echo '<br>';
$day = 'Sunday';

switch ($day) {

	// 2 consecutive statement 
	case 'Saturday':
	case 'Sunday':
		echo 'It\'s a weekend';
	break;

	default:
		echo '';
	break;
}
?>