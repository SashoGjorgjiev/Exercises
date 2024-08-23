<?php

class Bankaccount
{
    public int $acountnumber;
    public string $accountholder;
    public int $balance = 0;

    public function __construct(int $acountnumber, string $accountholder)
    {
        $this->accountholder = $accountholder;
        $this->acountnumber = $acountnumber;
    }
    public function deposit($amount): void
    {
        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        } else {
            echo 'Invalid amount,the amount must be grater than 0';
        }
    }

    public function withdraw($amount): void
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo 'Invalid amount';
        }
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}

$bankaccount1 = new Bankaccount(12345, 'John Doe');
$bankaccount1->deposit(1000);
echo $bankaccount1->getBalance();
