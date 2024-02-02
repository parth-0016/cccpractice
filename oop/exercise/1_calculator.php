<?php

class Calculator{
    public function add($a,$b){
        return $a+$b;
    }
    public function subtract($a,$b){
        return $a-$b;
    }
    public function multiply($a,$b){
        return $a*$b;
    }
    public function divide($a,$b){
        if($b!=0){
            return $a/$b;
        }else{
            echo "cannot divide by 0";
        }
    }
}
    $calc = new Calculator();
    echo $calc->add(5,3);
    echo "<br>";
    echo $calc->subtract(5,3);
    echo "<br>";
    echo $calc->multiply(5,3);
    echo "<br>";
    echo $calc->divide(5,3);

?>