<?php

require_once('Transport.php');
require_once('Car.php');
require_once('Bike.php');
require_once('Plane.php');

$car = new Car();
$bike = new Bike();
$plane = new Plane();

echo $car->move();
echo $car->fuelType();
echo '<br/>';
echo $bike->move();
echo $bike->fuelType();
echo '<br/>';
echo $plane->move();
echo $plane->fuelType();
