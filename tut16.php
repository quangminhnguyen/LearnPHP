
<?php
$text = 'Hello World';
$number = 100;


// Display variables to the user
echo $text;
print($number);

// A line break
echo '<br>';

// Concatenation
$day = 'Thursday';
$date = 30;
$year = 2012;

// Use dot and ' ' to do concatenation.' ==> Best way.
echo 'The date is '.$day.' '.$date.' '.$year;

// line break again.
echo '<br>';

echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';

// What go into <> are interpreted as HTML code.



// Alternative way using double quotation mark instead.
echo '<br>';
echo "The date is $day $date $year";

?>