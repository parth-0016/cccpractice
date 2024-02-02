<?php

//It is used to display sophisticated error massage if we try to access private or
//non existing property and will show the massage we have written

class Abc{
    private $name = "Parth";
    
    public function __get($property){
        echo "You are trying to access private or non-existing property($property)";
    }
}
$abc = new Abc();
echo $abc->name;

//we can also use this method to get elements from private associative array 
//i.e.:
// public function __get($key){
//     if(array_key_exists($key, $this->data)){
//         return $this->data;
//     }else{
//         echo "The key is not defined."
//     }
// }
//This will return the key if available or it will print the massage
?>