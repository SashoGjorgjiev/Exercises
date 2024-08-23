<?php

class Vehicle
{
    public $make;
    public $model;
    public $year;
    public $rentalRate;
    public $rented = false;
    public function __construct($make, $model, $year, $rentalRate)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->rentalRate = $rentalRate;
    }
}


class RentalService
{
    public $vehicle = [];
    public function  addVehicle(Vehicle $vehicle)
    {
        $this->vehicle[] = $vehicle;
    }

    public function removeVehicle(Vehicle $vehicle)
    {
        $key = array_search($vehicle, $this->vehicle);
        if ($key !== false) {
            unset($this->vehicle[$key]);
        }

        $this->vehicle = array_values($this->vehicle);
    }

    public function rentVehicle(Vehicle $vehicle)
    {
        $key = array_search($vehicle, $this->vehicle);
        if ($key !== false && !$this->vehicle[$key]->rented) {
            $this->vehicle[$key]->rented = true;
            echo "Vehicle rented successfully.\n";
        } else {
            echo "Vehicle is already rented or does not exist.\n";
        }
    }

    public function returnVehicle(Vehicle $vehicle)
    {
        $key = array_search($vehicle, $this->vehicle);
        if ($key !== false && $this->vehicle[$key]->rented) {
            $this->vehicle[$key]->rented = false;
            echo "Vehicle returned successfully.\n";
        } else {
            echo "Vehicle was not rented or does not exist.\n";
        }
    }
}
$car = new Vehicle('Toyota', 'Corolla', 2021, 50);
$service = new RentalService();

$service->addVehicle($car);
$service->rentVehicle($car);
$service->returnVehicle($car);
