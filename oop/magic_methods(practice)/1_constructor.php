<?php

// we use constructor function to initialise the value of objects
//this function will be called automatically when the object is made
//it is code optimizing because we don't have to intialize names everytime with this method if we use this function

class Person{
    public $person;
    public $age;
    public function __construct($n="unknown", $a=0){
        $this->name = $n;
        $this->age = $a;
    }
    public function show(){
        echo "Name is $this->name and Age is $this->age <br>";
    }
}

$p1 = new Person();
$p2 = new Person("Parth",20);
$p1->show();
$p2->show();


?>