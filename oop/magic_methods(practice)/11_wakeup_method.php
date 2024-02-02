<?php

//unserialize() function is used to get back object from serialized array so we can use it accordingly
//now wakeup magic method is called automatically when we use unserialize() 

class Student{
    public $course = "PHP";
    private $name = "Parth";

    public function setName($name){
        $this->$name = $name;
    }

    public function __sleep(){
        return array('name');
    }
    public function __wakeup(){
        echo "This is wakeup method <br>";   
    }
}

$obj = new Student();
$obj->setName("Ram");
$srl = serialize($obj);
$unsrl = unserialize($srl);
print_r($unsrl);


?>