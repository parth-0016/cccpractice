<?php

function fib($num){
    $num1=0;
    $num2=1;

    $tmp = 0;
    while($tmp < $num){
        echo " ".$num1;
        $num3 = $num1 + $num2;
        $num1=$num2;
        $num2=$num3;
        $tmp++;
    }
}

$n = 17;
fib($n);

// $num = 10;
// if($num==1){
//     echo 0;
// }
// elseif($num==2){
//     echo "0"." "."1";
// }
// else{
//     echo "0" . " " . "1";
//     $tmp=1;
//     for($i=1; $i<=$num; $i++){
//         echo $i+$tmp." ";
//         $tmp=$i;
//     }
// }

?>