<?php
//prime number

function isPrime($num){
    if($num <= 1){
        return false;
    }
    for($i=2; $i<=sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}

$number = 17;

if(isPrime($number)){
    echo "$number is Prime";
}else{
    echo "$number is not prime";
}

?>