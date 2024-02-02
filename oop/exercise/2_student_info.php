<?php 

class Student{
    public $name;
    public $age;
    public $grades;

    public function displayInfo(){
        echo "Name: $this->name, Age: $this->age, Grades: $this->grades";
    }
}

$student = new Student();
$student->name = "Parth";
$student->age = "20";
$student->grades = "AA";
$student->displayInfo();

?>