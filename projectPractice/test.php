<?php

$ary = [3,5,7,1,9];
 sort($ary);
// print_r($ary);
// print_r($ary);

function maxx($a=[]){
    $b=0;
    for($i=1; $i<=4; $i++){
        $b += $a[$i]; 
    }
    // foreach($a as $i){
    //     $b += $i;
    // }
    echo "$b<br>";
}
function minn($a=[]){
    $b=0;
    $c = array_reverse($a);
    for($i=1; $i<=4; $i++){
    $b += $c[$i]; 
    }
    // foreach($a as $i){
    // $b += $i;
    // }
    echo $b;
}
maxx($ary);
minn($ary);

?>


Root Folder
/app/code/local
/Product/
/Model
/Controller
/View
/Customer
/Model
/Controller
/View
/design/frontend/tempalte/
/product
/form.phtml
/list.phtml
/grid.phtml
/customer/
/form.phtml
/list.phtml
/address/
form.phtml