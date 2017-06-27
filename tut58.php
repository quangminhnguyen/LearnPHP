<?php 
// return current time. It is the amount of seconds from the first of January, 1970.
$time =  time();
$actual_time = date('H:i:s', $time); // H: Hours, i: minutes, s: seconds
$actual_time2 = date('D M Y',$time); // Shows date month and year.
echo 'The current time is '.$actual_time;
echo 'The current date is'.$actual_time2;


?>