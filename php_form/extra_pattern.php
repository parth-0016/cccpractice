
<?php

$n=10;

if($n%2==0){
for($i=1; $i<$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($i<=$n/2){
            if($i<=$j and $j<=$n-$i+1){
                echo $j." ";
            }else{
                echo "-";
            }
        }else{
            if ($i >= $j-1 and $j >= $n-$i) {
                echo $j . " ";
            } else {
                echo "-";
            }
        }
    }
    echo "<br>";
}
}else{
for ($i = 1; $i < $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i <= ($n/2)+1) {
            if ($i <= $j and $j <= $n - $i + 1) {
                echo $j . " ";
            } else {
                echo "-";
            }
        } else {
            if ($i >= $j - 1 and $j >= $n - $i) {
                echo $j . " ";
            } else {
                echo "-";
            }
        }
    }
    echo "<br>";
}
}
?>