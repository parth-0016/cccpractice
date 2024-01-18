<?php

$name = "John";

//1.
$leftPad = str_pad($name, 10, "_", STR_PAD_LEFT);

//2.
$rightPad = str_pad($name, 8, "*");

//3.
echo $leftPad;
echo "<br><br>";
echo $rightPad;

?>