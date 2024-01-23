<?php

function bubleSort(&$arr){
    $n = sizeof($arr);
    for($i=1; $i<$n-1; $i++){
        for($j=0; $j<$n-$i-1; $j++){
            if($arr[$j]>$arr[$j+1]){
                $tmp = $arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$tmp;
            }
        }
    }
    return $arr;
}
$arrayToSort = [64,34,25,12,22,11,90];
bubleSort($arrayToSort);
print_r($arrayToSort);

?>