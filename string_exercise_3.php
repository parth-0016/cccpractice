<?php

$sentence = "The quick brown fox jumps over the lazy dog";

//1.
echo strpos($sentence, "fox");
echo "<br><br>";

//2.
echo strpos($sentence, "cat");

//3.
echo substr($sentence, 0, 19);

?>