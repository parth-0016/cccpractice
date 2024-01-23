<?php
function fun($hp)
{
    $a = 100;
    $b = (100 * ($a)) / ($a + $hp);
    return 100 - $b;
}

$hp = 10;
$c = fun($hp);
echo "if a is $hp% higher than b, then b is $c% lower than a ";
