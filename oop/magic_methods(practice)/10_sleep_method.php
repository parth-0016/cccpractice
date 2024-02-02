<?php

//serialize() function is used to convert object into array so we can use it accordingly
//now sleep magic method is called automatically when we use serialize() and it is used for getting selected value in the array instead of whole object

class Student{
    public $course = "PHP";
    private $name = "Parth";

    public function setName($name){
        $this->$name = $name;
    }

    public function __sleep(){
        return array('name');
    }
    
}

$obj = new Student();
$obj->setName("Ram");
$srl = serialize($obj);
echo $srl;

?>