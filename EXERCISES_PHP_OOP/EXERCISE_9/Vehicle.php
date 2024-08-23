<?php

abstract class Vehicle
{
    abstract public function fuelEfficiency();
    abstract public function description();
}

class Truck extends Vehicle
{
    public function fuelEfficiency()
    {
        return 10 . 'liters per 100 km' . '<br>';
    }

    public function description()
    {
        echo "This is a truck." . '<br>';
    }
}

class MotorCycle extends Vehicle
{
    public function fuelEfficiency()
    {
        return 8 . 'liters per 100 km' . '<br>';
    }

    public function description()
    {
        echo "This is a motor cycle." . '<br>';
    }
}


$truck = new Truck();
echo $truck->fuelEfficiency();
$truck->description();


$motorcycle = new MotorCycle();
echo $motorcycle->fuelEfficiency();
$motorcycle->description();
