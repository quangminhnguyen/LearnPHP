<?php
// create a function
function fcn() {
	echo 'Minh';
}

echo 'My name is <br>';
fcn(); // Call the function.



// Tut 31: function with arguments.
echo '<br>';
function add ($number1, $number2) {
	echo $number1 + $number2;
}

$num1 = 10;
$num2 = 1;

// Call the function with the arguments.
add($num1, $num2);




// Tut 31: Functions with arguments [2]
echo '<br>';
function displayDate($day, $date, $year) {
	echo $day.' '.$date.' '.$year;
}

displayDate('Monday', '31', '2011');




// Tut 32 function with RETURN VALUE.
echo '<br>';
function add2 ($number1, $number2) {
	$result = $number1 + $number2;
	return $result; // remember the keyword return.
}

$return_value = add2(2, 3);
echo $return_value;

function modulus ($number1, $number2) {
	return $number1 % $number2;
}

echo '<br>';
$return_value2 = modulus(10, 4);
echo $return_value2;

?>



