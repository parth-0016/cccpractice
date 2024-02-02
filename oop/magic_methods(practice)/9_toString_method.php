<?php

//toString() is called when we try to print object as a string

class Abc{
    public function __toString(){
        return "Cant't print object as a string of class: " . get_class($this);
    }
}

$test = new Abc();
echo $test;

?>