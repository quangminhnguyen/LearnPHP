<?php
$string = 'This is a sample string.';

// Count many words are there in the string.

$string_word_count = str_word_count($string);
echo $string_word_count;


// array of words correspond to the order of the word. 
echo '<br>';
$string_array = str_word_count($string, 1);
print_r($string_array);


// associative array. key correponds to the starting character of the word.
echo '<br>';
$string_array = str_word_count($string, 2);
print_r($string_array);

// Want the colon to show up in last word.
// Last parameter/symbols, is the punctuation that you want to include.
$string = 'This is a sample string.';
echo '<br>';
$string_array = str_word_count($string, 1, '.');
print_r($string_array);


// test without the third parameter. The symbol & doesn't include in the array.
$string = 'This is a & sample string.';
echo '<br>';
$string_array = str_word_count($string, 1);
print_r($string_array);


// shuffle character in the srting.
echo '<br>';
$string_shuffle = str_shuffle($string); 
echo $string_shuffle;


// ssubstring
echo '<br>';
echo substr($string_shuffle, 0, 4); // take the first 4 character of the substring.

// strlen
echo '<br>';
$len = strlen($string_shuffle);
echo 'The string len is '.$len;

// str_reversed.


// use similar_text to compare the percentage of difference.
echo '<br>';
$str1 = 'I am super smart';
$str2 = 'I am super stupid';
similar_text($str1, $str2, $result_var);
echo 'The percentage of similarity between two strings is '.$result_var.'%';


// trim white space from left and right side of a string.
echo '<br>';
$str_original = '      aa a a á s ';
echo trim($str_original);


//rtrim, ltrim to get rid of the white spaces on the left only or on the right only respectively.


?>

