<?php

//unset() method is used to unset the value of any variable 
//it will destroy the variable totally
//unset magic method is used to do the same for private properties of classes

class Abc{
    public $course = "PHP";
    private $fname = "Parth";

    public function setName($fname){
        $this->fname = $fname;
    }

    public function __unset($property){
        unset($this->$property);
    }
}

$test = new Abc();
$test->setName("Parth");
unset($test->fname);
// echo $test->fname;
print_r($test);


?>