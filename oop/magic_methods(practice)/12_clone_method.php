<?php

// $a = 5;
// $b = $a;    //copy by value - it will be copying value once
// $b = & $a;  //copy by reference - it'll change everytime we change the value because it assigns the same memory location
//but in class, we don't have to use &, it'll copy by referece in default
//we have to use 'clone' keyword to assign copy by value
//but there is a problem in using clone in classes, when we clone value from the same class, it'll clone it by value if we use clone keyword, but when the object is derived from another class(it's a sub object), the clone keyword doesn't work(it'll copy be reference despite the use of clone keyword)
//

class Student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }

    public function setCourse(Course $c){
        $this->course = $c;
    }

    public function __clone(){
        $this->course = clone $this->course;
    }
}
class Course{
    public $cname;
    
    public function __construct($n){
        $this->cname = $n;
    }
}

$student1 = new Student("Parth");
$course1 = new Course("PHP");
$student1->setCourse($course1);

$student2 = clone $student1;
$student2->name = "Ram";
$student2->course->cname = 'Python';

// echo $student1->name;
// echo $student2->name;
echo '<pre>';
print_r($student1);
print_r($student2);

?>