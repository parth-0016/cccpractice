<?php

//it is same as the constructor method but the difference is destruct method will
//be called when all the other function's execution is completed and it will be
//called automatically in last

class Abc{
    function __construct(){
        echo "This is constructor function<br>";
    }

    function __destruct(){
        echo "This is destructor function<br>";
    }
}

$abc = new Abc();

?>