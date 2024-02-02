<?php

//this method is similar to get method
//the difference is this method is used when we try to assign value to the private 
//or undefined property insted of accessing it

class Abc{
    private $name = "Parth";

    public function show(){
        echo $this->name;
    }
    
    public function __get($property){ //this will run if we try to access
        echo "You are trying to access private or non-existing property($property)";
    }
    public function __set($property, $value){ //this will run if we try to assign value
        // echo "You are trying to give value to private or non-existing property: ($property)<br>";
        // echo "you cannot give " . $value . " value to this property <br>";
        if(property_exists($this, $property)){
            $this->$property = $value;
        }else{
            echo "Property does not exist: $property";
        }
    }
}
$abc = new Abc();
$abc->name = 'parth';

//we can also use this method to asign value to private property variables as shown

$abc->show();

?>