<?php

class Bike implements Transport
{
    public function move()
    {
        return 'The bike is moving on ';
    }

    public function fuelType()
    {
        return 'Manpower';
    }
}
