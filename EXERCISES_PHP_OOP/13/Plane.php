<?php

class Plane implements Transport
{
    public function move()
    {
        return 'Plane is moving on ';
    }

    public function fuelType()
    {
        return 'Jet fuel';
    }
}
