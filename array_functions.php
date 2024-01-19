<?php

//Array functions

//  1)  - Array creation and initialization

//1. - array() or []
$arr = array(1, 2, 'parth');
$array = [2, 3, 'fdfdf', 3];

//2. - Array merge
//Merges two or more arrays
// print_r(array_merge($arr, $array));

//3. - Combine array - Both arrays must have same number of elements
//creates an array using one array for keys and other for values
// print_r(array_combine($arr, $array));

//4. - range(start, end, step)
//creates an array containing range of elements
// print_r(range(3, 24, 3));

//  2) Array modification

//5. - push()
//adds one more elment at the end of the array
// print_r(array_push($arr,'mobile')); //returns number of elements 
// print_r($arr); //returns array elements
// echo "<br>";

//6. - pop()
//removes the last element from the array
// print_r(array_pop($arr)); //prints popped out element
// print_r($arr); //prints array after removing element 

//7. unshift()
//adds an element at the beginning of the array
// print_r(array_unshift($arr, 7)); //prints number of elements in array
// print_r($arr); //prints array after adding the element

//8. shift()
//removes an element at thi beginning of the array
// print_r(array_shift($arr)); //prints the removed element
// print_r($arr); // prints the array after removing element

//9. splice(array, start, length, replacement)
//Removes a portion of the array and replace it with the provided input
// print_r(array_splice($arr, 2, 2, [7,7,7,7,7,7,7,7,7])); //prints array with removed elemnts
// print_r($arr); //prints array after replacing the elements

//  3) Array access

//10. - count()
//counts the number of elements in array
// echo count($arr);
// echo count($array);

//11. - sizeof()
// same as the count
// echo sizeof($array);

//12. - array_key_exists()
// checks if given key/index is in the array or not
// var_dump(array_key_exists(4, $arr));

//13. - array_keys()
//return all the keys or a subset of keys in array 
// print_r(array_keys($arr));

//14. - array values()
//returns all the values of the array
// print_r(array_values($arr));


//3)    Array search

//15. - in_array()
//checks if the value exists in array
// var_dump(in_array(2, $arr));

//16. - array_search()
//seaches array for the value and returns the corresponding key
// echo array_search(1, $arr);
//returns null if the value is not present

// 17. array_reverse()
//reverses the array elements
// print_r(array_reverse($arr));

//4)    Array sorting

$ary = [1, 7, 3, 5, 2];
// 18. - sort()
// sorts an array
// sort($ary);
// print_r($ary);

// 19. - rsort()
//sorts the array in reverse order
// rsort($ary);
// print_r($ary);

// 20. - asort()
//sorts an associative array by values
// $asc = ['name' => 'parth', 'school'=>'navyug', 'college'=>'adit'];  //associative array
// asort($asc);
// print_r($asc);

// 21. - ksort()
//sorts an associative array by ketwords
// ksort($asc);
// print_r($asc);

// 22. - arsort()
//sorts an associative array by values in reverse order
// arsort($asc);
// print_r($asc);

// 23. - krsort()
//sorts an associative array by keywords in reverse order
// krsort($asc);
// print_r($asc);

// 6)   Array Filtring

// 24. - array_filter($array, $callback)
// filters the elements of array using callback function
// function odd($var){
//     return($var & 1);
// }
// print_r(array_filter($ary, "odd"));     //prints filtered array
// print_r($ary);  //prints normal array

// 25. - array_map($callback, $array)
//applies a callback function to each element of the array
// function myfunction($v1, $v2)
// {
//     if ($v1 === $v2) {
//         return "same";
//     }
//     return "different";
// }

// $a1 = array("Horse", "Dog", "Cat");
// $a2 = array("Cow", "Dog", "Rat");
// print_r(array_map("myfunction", $a1, $a2));

// 26. - array_reduce($array, function, intial-optional)
//iteratively reduce the array to a single value using a callback function
//send array of strings values and return a string
// function myfunction($v1,$v2)
// {
// return $v1 . "-" . $v2;
// }
// $a=array("Dog","Cat","Horse");
// print_r(array_reduce($a,"myfunction",5));

//we can also do the sum of numbers in the array
// function myfunction($v1, $v2)
// {
//     return $v1 + $v2;
// }
// $a = array(3, 7, 13);
// print_r(array_reduce($a, "myfunction", 5));

// 7)    Array slicing
 
// 27. - array_slice(array, start, length, preserve - true preserves keys, false does not)
// extracts a portion of array
// print_r(array_slice($ary, 1, 2, true));

// 28. - array_splice()
//removes a portion of the array and replaces it with something else
// print_r(array_splice($ary, 1, 3, [4,56,6]));
// print_r($ary);

?>