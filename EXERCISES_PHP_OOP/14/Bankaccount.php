<?php

class Bankacount
{
    public $balance = 0;

    public function deposit($amount)
    {

        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "Invalid amount";
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance = $this->balance - $amount;
        } else {
            echo "Invalid amount";
        }
    }


    public function getBalance()
    {
        return $this->balance;
    }
}

class SavingsAccount extends Bankacount
{

    public function calculateInterest($amount, $years)
    {

        return $amount * $years * 0.01;
    }
}


class CheckingAccount extends Bankacount
{

    public function applyOverdraftFee($amount)
    {
        if ($amount > 0) {
            $this->balance = $this->balance - $amount;
        } else {
            echo "Invalid amount";
        }
    }
}

$bankacount1 = new Bankacount();
$bankacount1->deposit(1000);
echo $bankacount1->getBalance();

$bankacount2 = new SavingsAccount();
$bankacount2->deposit(1000);
echo $bankacount2->getBalance();

$bankacount3 = new CheckingAccount();
$bankacount3->deposit(1000);
$bankacount3->withdraw(500);
$bankacount3->applyOverdraftFee(100);
echo $bankacount3->getBalance();
