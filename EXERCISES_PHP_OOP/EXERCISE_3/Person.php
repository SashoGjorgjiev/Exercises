<?php

class Person
{
    public $name;
    public $age;


    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct()
    {
        echo "Person object with name {$this->name} and age {$this->age} has been destroyed.";
    }

    public function introduce()
    {
        echo 'Hi, my name is ' . $this->name . ' and I am ' . $this->age . ' years old.' . '<br>';
    }
}

$person = new Person("John", 25);
$person->introduce();
