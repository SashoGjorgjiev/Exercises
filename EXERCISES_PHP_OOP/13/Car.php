<?php

class Car implements Transport
{

    public function move()
    {
        return 'Car is moving on ';
    }

    public function fuelType()
    {
        return 'Petrol';
    }
}
