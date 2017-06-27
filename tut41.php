<?php 
// MULTIDIM Associative ARRAY
echo '<br>';
$multi_dim_array = array('Class10B'=>
									array('Minh', 'Phuc', 'Andy'), 
						'Class10C'=>
									array('Bao', 'Duy', 'Huy'));


// for each statement
foreach($multi_dim_array as $element => $inner_array) {
	echo $element.'<br>';
	foreach($inner_array as $inner_element) {
		echo $inner_element.'<br>';
	}
}
?>