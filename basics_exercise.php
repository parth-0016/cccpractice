<?php

//Data tyapes

//1. - integer(decimal value)
$integer = 20;
var_dump($integer);
echo "<br>";

//2. - float(float values)
$float = 20.2;
var_dump($float);
echo "<br>";

//3. - string(sequence or character/s)
$str = "parth";
var_dump($str);
echo "<br>";

//4. - boolean(true/false)
$bool  = true;
var_dump($bool);
echo "<br>";

//5. - Array(multiple values in stored in order)
$arr = array(1,"parth",2.3,true);
var_dump($arr);
echo "<br>";

//6. - NULL(variable without value)
$var = null;
var_dump($var);
echo "<br>";


//Typecasting

$tc = (array)$str;
print_r($tc);
echo "<br>";

// $tc1 = (unset)$str;
// var_dump($tc1);
// echo "<br>";
//we cannot cast variables into null after php 8.0.0.0 update  - unset won't work


//Mathfunctions

//1. - Basic arithmatic 
$x = -5.45;
echo abs($x); //aboslute value of the number
echo "<br>";

echo ceil($x); //rounds up number upto the nearest integer
echo "<br>";

echo floor($x); //rounds up number down to the absoulute integer
echo "<br>";

echo round($x, 0); //rounds number to nearest integer o precision
echo "<br>";


//2. - Power functions
echo pow(7, 3); //returns base raised to the power of the exponent
echo "<br>";
echo sqrt(49); //return the square root of the integer


//3. random number generation
echo(rand(1,10)); //generates random number between the provided min and max
echo "<br>";


//4. - number formatting
// echo number_format(1443,0,",","0000.")
echo number_format(1234,2,".",",");
echo "<br>";

//PHP Operations

//1. - Arithmetic operations
// $a = 7;
// $b = 3;
    //1. - Addition
    // echo $a + $b;
    // echo "<br>";

    //2. - Subtraction
    // echo $a - $b;
    // echo "<br>";

    //3. - Multiplication
    // echo $a * $b;
    // echo "<br>";

    //4. - Division
    // echo $a / $b;
    // echo "<br>";

    //5. - Modulus
    // echo $a % $b;
    // echo "<br>";

    //6. - Exponential
    // echo $a $b;

//2. - Assignment operators

    //7. - Assignment operator
    // $c = $a;$d = $b;
    // echo $a = $b;
    // echo "<br>";
    // echo $b = $a;
    // echo "<br>";

    //8. - addition assignment
    // echo $a += $b;
    // echo "<br>";
    // echo $b += $a;
    // echo "<br>";

    //9. - subtraction assignment
    // echo $a -= $b;
    // echo "<br>";
    // echo $b -= $a;
    // echo "<br>";

    //10. - Multiplication assignment
    // echo $a *= $b;
    // echo "<br>";
    // echo $b *= $a;
    // echo "<br>";

    //11. - Division assignment
    // echo $a /= $b;
    // echo "<br>";
    // echo $b /= $a;
    // echo "<br>";

    //12. - Modulus assignment
    // echo $a %= $b;
    // echo "<br>";
    // echo $b %= $a;
    // echo "<br>";

//3. Comparison operator
// $x = 3; $y = 1;
    
    //13. - Equal
    // var_dump($x == $y);
    //checks whether the values of both variable are same or not
    
    //14. - Identical
    // var_dump($x === $y);
    //check the type of the variabele along with the value to make sure both are identical

    //15. - Not equal
    // var_dump($x != $y); //or $x <> $y
    //opposite of equal

    //16. - Not identical
    // var_dump($x !== $y);
    //opposite of identical

    //17. - Greater than
    // var_dump($x > $y);

    //18. - Less than
    // var_dump($x < $y);

    //19. - Greater than or equal to
    // var_dump($x >= $y);
    
    //20. - Less than or equal to
    // var_dump($x <= $y);

//Logical operators
// $a = true; $b = false;
    //21. - Logical AND
    // var_dump($a && $b);
    //if a and b both are true

    //22. - Logical OR
    // var_dump($a || $b);
    //either a or b is true

    //23. Logical not
    // var_dump(!$a);

//Increment and Decrement operatos

    // $a = 3;

    //24. - Increment operator
    // echo ++$a;
    // echo $a++;
    // echo $a;

    //25. Decrement operator
    // echo --$a;
    // echo $a--;
    // echo $a;

//String operators

    // $a = 'parth'; $b = 'khakhkhar';

    //26. - Concatenation
    // echo $a . $b;

    //27. - Concationation assignment
    // echo $a .= $b;

//conditional/Ternary operator(Condition ? statement1 : statement2)

    // $a = 3; $b = 7;
    // echo $a>5 ? $b : "not";


//If statement

    // $con = true;
    // if($con){
    //     echo "Condition is true";
    // }


//If-else statement

    // $con = false;
    // if($con){
    //     echo "if executed";
    // }
    // else{
    //     echo "else executed";
    // }

//If-Elseif-Else statement

    // $num = 10;
    // if($num > 0){
    //     echo "Positive";
    // }
    // elseif($num <0){
    //     echo "Negative";
    // }
    // else{
    //     echo "num is zero";
    // }

//Nested if statement

    // $c1 = true;
    // $c2 = false;
    // if($c1){
    //     if($c2){
    //         echo "Both true";
    //     }
    //     else{
    //         echo "Only first is true";
    //     }
    // }
    // else{
    //     if($c2){
    //         echo "Only second is true";
    //     }
    //     else{
    //         echo "Both false";
    //     }
    // }


//Switch case

    $day = 'Monday';

    switch ($day) {
        case 'Monday':
            echo "It's monday";
            break;
        
        case 'Wednesday':
            echo "It's wednesday";
            break;

        case 'Saturday':
            echo "It's weekend";
            break;

        default:
            echo "Invalid day";
            break;
    }echo "<br><br>";


//Loops

//1. - For loop

    // for($i=1; $i<6; $i++){
    //     echo $i." ";
    // }

//2. - While loop

    // $i=1;
    // while ($i <= 5) {
    //     echo $i." ";
    //     $i++;
    // }

//3. - Foreach loop - Mainly used to travese array

    // $color = ['red', 'blue', 'white', 'black'];
    // foreach($color as $i){
    //     echo $i." ";
    // }

?>