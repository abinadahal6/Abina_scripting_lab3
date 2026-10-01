<?php

class Product
{
    private $description;
    private $quantity;
    private $price;

    // Constructor
    public function __construct($description, $quantity, $price)
    {
        // Check description
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.<br>";
        }

        // Check quantity
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.<br>";
        }

        // Check price
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.<br>";
        }
    }

    // Description setter
    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Description getter
    public function getDescription()
    {
        return $this->description;
    }

    // Quantity setter
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    // Quantity getter
    public function getQuantity()
    {
        return $this->quantity;
    }

    // Price setter
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Price getter
    public function getPrice()
    {
        return $this->price;
    }

    // Calculate total price
    public function calculatePrice()
    {
        return $this->quantity * $this->price;
    }
}


// Creating Product object
$product = new Product("Laptop", 2, 75000);


// Printing properties
echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price: " . $product->getPrice() . "<br>";

echo "Total Price: " . $product->calculatePrice();

?>