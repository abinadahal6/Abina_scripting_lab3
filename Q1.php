<?php

// Interface
interface Vehicle
{
    public function startEngine();
    public function stopEngine();
}

// Car class
class Car implements Vehicle
{
    // Private properties
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getters
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

    // Setters
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

    // Start method
    public function start()
    {
        echo "Car started.<br>";
    }

    // Display information
    public function displayInfo()
    {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }

    // Interface methods
    public function startEngine()
    {
        echo "Engine started.<br>";
    }

    public function stopEngine()
    {
        echo "Engine stopped.<br>";
    }

    // Description method
    public function getDescription()
    {
        return $this->make . " " . $this->model . " (" . $this->year . ")";
    }
}

// ElectricCar class
class ElectricCar extends Car
{
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge()
    {
        echo "Electric car is charging.<br>";
    }

    // Override getDescription()
    public function getDescription()
    {
        return parent::getDescription() .
               " - Battery: " . $this->batteryCapacity . " kWh";
    }
}


// Creating Car object
$car = new Car("Toyota", "Corolla", 2022);

echo "<h3>Car Information</h3>";

$car->start();
$car->displayInfo();

echo "Description: " . $car->getDescription() . "<br>";

$car->startEngine();
$car->stopEngine();


// Creating ElectricCar object
$electricCar = new ElectricCar("Tesla", "Model 3", 2024, 75);

echo "<h3>Electric Car Information</h3>";

$electricCar->start();
$electricCar->displayInfo();

$electricCar->charge();

echo "Description: " . $electricCar->getDescription() . "<br>";

$electricCar->startEngine();
$electricCar->stopEngine();

?>