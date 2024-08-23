<?php
class BankAccount
{
    private $balance = 0;
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo 'Invalid amount , the amount must be grater than 0';
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(-10);
$account->withdraw(50);
echo $account->getBalance();
