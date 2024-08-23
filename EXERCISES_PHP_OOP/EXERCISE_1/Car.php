<?php

class Car
{
    public $make;
    public $model;
    public $year;

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function printIt()
    {
        echo $this->getMake() . ' ' . $this->getModel() . ' ' . $this->getYear() . '<br>';
    }
}

$car1 = new Car();

$car1->setMake('Toyota');
$car1->setModel('Camry');
$car1->setYear(2020);
$car1->printIt();

$car2 = new Car();

$car2->setMake('Honda');
$car2->setModel('Civic');
$car2->setYear(2021);
$car2->printIt();
