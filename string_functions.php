<?php

$x = 'parth';

// strlen(string)
// returns the length of the given string
// echo strlen($x);
// echo "<br>";
// echo strlen('   parth');

// str_replace(find, replace, string, count-optional)
// replaces all occurances of substring with given substring 
// echo str_replace("Parth", "Rahul", "Parth Khakhkhar");
// echo str_replace("Parth", "Rahul", "Parth parth Parthh PParth pParth Partth");

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
// converts special or predefined characters( < and > ) into html entities - basically it will turn html ouptut into the tags themselves
// $str = "This is some <b> bold </b> text.";
// echo "$str -without htmlspecialchars function";
// echo "<br>";
// echo htmlspecialchars("$str -with htmlspecialchars function");

// htmlentities(string)
// to convert some characters into html entities - basically it will turn link into the text
// $str = '<a href="https://www.google.com">Google it</a>';
// echo htmlentities($str);

// str_repeat(string, repeat)
//it repeates the string given number of times
// echo str_repeat('parth <br>',7);

// strrev(string)
// reverses the string
// echo strrev("My name is parth");

// str_shuffle(string)
// randomly shuffels all characters of the string - shuffles every time you reload the page
// echo str_shuffle("My name is parth");

// str_split(string, length)
// splits the string into given length array
// print_r(str_split("My name is parth",3));

// str_word_count(string)
//counts number of words in given string
// echo str_word_count("My name is parth")
//if converted into an array then it returns 3 kind of values
// 0-number of words
// 1-array of words
// 2- array or words with the index position of the words
// print_r(str_word_count("My name is parth",2));

// substr_replace(string, replace, start index, length)
// replsces words from the string with given word
// echo substr_replace("My name is parth", "ram", 11, 2);

// str_pad()
//pad to the right side of the string, to a new length of given number of characters
// echo str_pad("Parth Khakhkhar", 27, ".");
// echo "<br>";
//we have to specify if we want to add pad to left or both side as STR_PAD_LEFT and STR_PAD_BOTH
// echo str_pad("Parth Khakhkhar", 27, ".", STR_PAD_BOTH);

// strcoll()
//compares two strings
// echo strcoll("Parth Khakhkhar", "Parth Khakhkhar");
// echo strcoll("Hello Word","hello word")

// strcspn()
//finds the number of characters before the given character - case sensitive
// echo strcspn("My name is parth", "p");

// stristr()
//find the occurence of given word in the string and returns the rest of the string
// echo stristr("My name is parth, i am a php developer", "parth");

// strrev()
//reverses the string
// echo strrev("My name is parth");

// ucfirst()
//converts the first character of the string to uppercase
// echo ucfirst("my name is parth");

// ucwords()
//converts first character of each word of string to uppercase
// echo ucwords("my name is parth");

?>