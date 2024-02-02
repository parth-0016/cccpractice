<?php

//this method is exactly same as the get method
//the only differene is call method is userd to show sophisticated error massages
//for privated/undefined methods instead of private/undefined properties

class Abc{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __call($method, $arguments){
        // echo "This is private/non-existing method : $method <br>";
        // print_r($arguments);
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $arguments); //call-back function
            //wherever gets called from, retruns there and executes function
        }else{
            "Method does not exist : $method";
        }
    }
}

$abc = new Abc();

$abc-> setName("Parth", "Khakhkhar");

//we can also call and apply private methods using call method as mentioned

echo "<pre>";
print_r($abc);
echo "</pre>";

?>