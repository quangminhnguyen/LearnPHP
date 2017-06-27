<?php

// Print hello 10 times.
$counter = 0;
while ($counter <= 10) {
	echo 'Hello<br>';
	$counter++;
}



// Do while loop, don't evaluate condition at the start.
echo '<br>';
do {
	echo 'This will ALWAYS  show at least once.';
} while ($counter == 11);



//for loop
echo '<br>';
for ($i = 0; $i++; $i <10) {
	echo 'i='.$i.'<br>';
}
?>