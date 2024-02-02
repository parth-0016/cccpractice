<?php

class BankAccount{
    private $accountNumber;
    private $accountHolder;
    private $balance=0;

    public function __construct($accountNumber, $accountHolder, $balance){
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    public function deposit($amt){
        $this->balance += $amt;
    }

    public function withdraw($amount){
        if($this->balance <= $amount){
            $this->balance -= $amount;
        }else{
            "Not enough money to withdraw";
        }
    }

    public function display(){
        echo "Account number : $this->accountNumber<br>";
        echo "Account holder : $this->accountHolder<br>";
        echo "Balance : $this->balance Rs<br>";
    }
}

$account1 = new BankAccount(1234567, "Parth khakhkhar", 700);

$account1->deposit(500);
$account1->withdraw(200);
$account1->display();

?>