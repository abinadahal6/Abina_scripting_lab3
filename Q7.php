<?php

interface Shape
{
    public function calculateArea();
}


// Circle class
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}


// Square class
class Square implements Shape
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }
}


// Objects
$circle = new Circle(5);
$square = new Square(4);


// Display result
echo "Area of Circle: " . round($circle->calculateArea(), 2) . "<br>";
echo "Area of Square: " . $square->calculateArea();

?>