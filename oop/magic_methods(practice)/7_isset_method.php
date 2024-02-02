<?php

//this method is same as isset method we have been using so far
//isset($parameter) checks whether it's parameter has a value or not and
//it returns 0 or 1 according to whether value is available or not
//but isset magic method is used to check the same for the private members of the class
//normal isset method won't be able to check for private members so we use this

class Student{
    public $course;
    private $fname;
    private $lname;

    public function setName($fnamee, $lnamee){
        $this->fname = $fnamee;
        $this->lname = $lnamee;
    }

    public function __isset($property){
        echo isset($this->$property);
    }
}

$test = new Student();
// $test->fname = "Parth";  //printing error 
$test->setName("Parth", "Khakhkhar");

echo isset($test->fname);

?>