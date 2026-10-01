<?php

// Interface
interface HasInfo
{
    public function getInfo();
}


// Address class
class Address implements HasInfo
{
    public $street;
    public $number;
    public $city;

    // Constructor
    public function __construct($street, $number, $city)
    {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    // getInfo method
    public function getInfo()
    {
        return "Address: street " . $this->street .
               ", number " . $this->number .
               ", city " . $this->city;
    }
}


// Phone class
class Phone implements HasInfo
{
    public $prefix;
    public $number;

    // Constructor
    public function __construct($prefix, $number)
    {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    // getInfo method
    public function getInfo()
    {
        return "Number: " . $this->prefix .
               " / " . $this->number;
    }
}


// User class
class User implements HasInfo
{
    public $name;
    public $surname;

    private $address;
    private $phone;

    // Constructor
    public function __construct($name, $surname, $address, $phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    // getInfo method
    public function getInfo()
    {
        return "User: " . $this->name . " " .
               $this->surname . " " .
               $this->address->getInfo() . " " .
               $this->phone->getInfo();
    }
}


// Creating Address object
$address = new Address("New Road", 25, "Kathmandu");

// Creating Phone object
$phone = new Phone("+977", "9841235890");

// Creating User object
$user = new User("Abina", "Dahal", $address, $phone);


// Display information
echo $user->getInfo();

?>