<?php

class Bicycle
{
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight;

    // Getter for bike information
    public function getInfo()
    {
        return $this->brand . " " . $this->model .
               " (" . $this->year . ")";
    }

    // Getter for weight
    public function getWeight($inKilograms = false)
    {
        if ($inKilograms) {
            return $this->weight / 1000;
        }

        return $this->weight;
    }

    // Setter for weight
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}


// First bicycle object
$bike1 = new Bicycle();

$bike1->brand = "Giant";
$bike1->model = "Escape 3";
$bike1->year = 2023;
$bike1->description = "Used bicycle";
$bike1->setWeight(12000);


// Second bicycle object
$bike2 = new Bicycle();

$bike2->brand = "Trek";
$bike2->model = "Marlin 5";
$bike2->year = 2024;
$bike2->description = "Mountain bicycle";
$bike2->setWeight(13500);


// Display first bicycle
echo "<h3>Bicycle 1</h3>";

echo "Information: " . $bike1->getInfo() . "<br>";
echo "Description: " . $bike1->description . "<br>";
echo "Weight in kilograms: " . $bike1->getWeight(true) . " kg<br>";
echo "Weight in grams: " . $bike1->getWeight() . " g<br>";


// Display second bicycle
echo "<h3>Bicycle 2</h3>";

echo "Information: " . $bike2->getInfo() . "<br>";
echo "Description: " . $bike2->description . "<br>";
echo "Weight in kilograms: " . $bike2->getWeight(true) . " kg<br>";
echo "Weight in grams: " . $bike2->getWeight() . " g<br>";

?>