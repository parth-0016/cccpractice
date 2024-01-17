<?php

$x = 'parth';

// strlen(string)
// returns the length of the given string
// echo strlen($x);

// str_replace(find, replace, string, count-optional)
// replaces all occurances of substring with given substring 
// echo str_replace("Parth", "Rahul", "Parth Khakhkhar");

// strpos(string, occurence)
// find the first occurence of a substring in the string
// echo strpos("My name is parth, i am parth", "parth");

// substr(string, starting position, length-optional)
// returns part of the string of given length from given position
// echo substr("My name is parth", 11, 3);

// strtolower(string)
// converts all characters to lowercase
// echo strtolower("My name is PARTH");

// strtoupper()
// converts all characters to uppercase
// echo strtoupper("My name is Parth");

// trim(string, charlist)
// removes whitespace and other predefined characters from the string
// echo trim("  My name is parth",'th');

// implode(seperator, array)
// join array elements with a string
// $arr = array('my', 'name', 'is', 'parth');
// not able to print $arr directly so we use implode
// echo implode(" ", array('my','name','is','parth'));

// explode(seperator, string)
// break  a string into an array
// $str = "My name is parth";
// print_r(explode(" ", $str));

// htmlspecialchars(string)
// converts special or predefined characters( < and > ) into html entities
// $str = "This is some <b> bold "

?>