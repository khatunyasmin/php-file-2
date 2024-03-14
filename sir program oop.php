<?php

// Base class: Vehicle
class Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $fuelType;

    public function __construct($make, $model, $year, $fuelType) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->fuelType = $fuelType;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getFuelType() {
        return $this->fuelType;
    }

    public function calculateFuelEfficiency($distance, $fuelConsumed) {
        return $distance / $fuelConsumed;
    }

    public function calculateDistanceTravelled($speed, $time) {
        return $speed * $time;
    }

    public function getMaxSpeed() {
        return "Unknown";
    }
}

// Subclass: Truck
class Truck extends Vehicle {
    public function getMaxSpeed() {
        return "80 mph";
    }
}

// Subclass: Car
class Car extends Vehicle {
    public function getMaxSpeed() {
        return "120 mph";
    }
}

// Subclass: Motorcycle
class Motorcycle extends Vehicle {
    public function getMaxSpeed() {
        return "160 mph";
    }
}

// Create instances of the classes
$truck = new Truck("Ford", "F-150", 2022, "Diesel");
$car = new Car("Honda", "Civic", 2023, "Gasoline");
$motorcycle = new Motorcycle("Yamaha", "YZF-R6", 2021, "Gasoline");

// Accessing properties and methods
echo "Truck: " . $truck->getMake() . " " . $truck->getModel() . ", Year: " . $truck->getYear() . ", Fuel Type: " . $truck->getFuelType() . "<br>";
echo "Max Speed: " . $truck->getMaxSpeed() . "<br>";

echo "Car: " . $car->getMake() . " " . $car->getModel() . ", Year: " . $car->getYear() . ", Fuel Type: " . $car->getFuelType() . "<br>";
echo "Max Speed: " . $car->getMaxSpeed() . "<br>";

echo "Motorcycle: " . $motorcycle->getMake() . " " . $motorcycle->getModel() . ", Year: " . $motorcycle->getYear() . ", Fuel Type: " . $motorcycle->getFuelType() . "<br>";
echo "Max Speed: " . $car->getMaxSpeed() . "<br>";
?>