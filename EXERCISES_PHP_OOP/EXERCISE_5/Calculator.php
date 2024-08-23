<?php

class Calculator
{

    public static function add($a, $b)
    {
        return $a + $b . '<br>';
    }

    public static function substract($a, $b)
    {
        return $a - $b . '<br>';
    }

    public static function multiply($a, $b)
    {
        return $a * $b . '<br>';
    }

    public static function divide($a, $b)
    {
        if ($b == 0) {
            echo 'Invalid amount , the amount must be grater than 0';
        } else {
            return $a / $b . '<br>';
        }
    }
}

echo Calculator::add(2, 3);
echo Calculator::substract(2, 3);
echo Calculator::multiply(10, 53);
echo Calculator::divide(10, 2);
