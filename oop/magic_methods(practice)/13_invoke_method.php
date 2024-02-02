<?php

//it calls object itself as a function, withoud this method there'll be a fatal error

class Add{
    public $a;
    public $b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function __invoke(){
        echo $this->a + $this->b;
    }
    public function sum(){
        echo $this->a + $this->b;
    }
}

$obj = new Add(3,4);
// $obj->sum();
$obj();
?>