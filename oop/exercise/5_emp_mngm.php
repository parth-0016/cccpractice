<?php

class Employee{
    public $name;
    public $position;
    public $salary;

    public function calculateyearlyBonus(){
        return $this->salary*0.1;
    }
}

$employee = new Employee();
$employee->name = "Parth";
$employee->position = "Intern";
$employee->salary = 2500000;

echo $employee->calculateyearlyBonus();

?>