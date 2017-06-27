<?php 
//BASIC ARRAY
$food = array('Pasta', 'Chicken', 'Beef');
echo $food[1]; // prints the first elementi n the array.
echo '<br>';
echo print_r($food); // prints the entire array.


# Change value in an array.
echo '<br>';
$food[2] = 'Piazza';
echo print_r($food); 

// ASSOCIATIVE ARRAY - DICTIONARY.
echo '<br>';
$associative_arr = array('Chicken'=>10, 'Bird'=>20, 'Dog'=>30);
echo $associative_arr ['Bird'];


// MULTIDIM Associative ARRAY
echo '<br>';
$multi_dim_array = array('Class10B'=>
									array('Minh', 'Phuc', 'Andy'), 
						'Class10C'=>
									array('Bao', 'Duy', 'Huy'));

echo $multi_dim_array['Class10B'][0],' is Minh';

?>