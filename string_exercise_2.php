<?php

$text = "Hello, World! How are you doing?";

//1.
echo strlen($text);
echo "<br><br>";

//2.
echo strtolower($text);
echo "<br><br>";

//3.
echo strtoupper($text);
echo "<br><br>";

//4.
echo substr_replace($text, "Fine, thank you!", 14);
echo "<br><br>";

//5.
echo substr($text, 0, 9);
echo "<br><br>";

//6.
echo substr($text, 7);

?>