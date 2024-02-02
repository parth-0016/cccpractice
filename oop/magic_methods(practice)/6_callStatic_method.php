<?php

//static properties/methods can be used without creating an object
//i.e. - public static print() / public static $name
//accessed like Abc::print() / Abc::$name
//we cannot use $this in static methods since there will be no object
//we can use self insted of this in that case
// public static print(){
//     echo self::$name;
// }
//if all the variables and methods of the class are static then and only then
//the class is static too

class Student{
    private static function hlw($n='koi nhi'){
        echo "This is  $n";
    }
    public static function __callStatic($method, $arguments){
        // echo "This is a private static method : $method <br>";
        if(method_exists(__CLASS__,$method)){
            call_user_func_array([__CLASS__,$method], $arguments);
        }else{
            echo "Method does not exist";
        }
    }
}

student::hlw("Parth<br>");
student::hlw();

//we can use this method to call and implement private static functions


?>