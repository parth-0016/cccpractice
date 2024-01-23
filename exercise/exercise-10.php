<?php

function fact($num){
    $p=1;
    for($i=1; $i<=$num; $i++){
        $p=$p*$i;
    }
    echo $p;
}
$n=7;
fact($n);

?>