<?php

// Parent User class
class User
{
    protected $name;
    protected $surname;
    protected $username;

    // Default value is false
    protected $is_admin = false;

    // Constructor
    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Check if user is admin
    public function isAdmin()
    {
        return $this->is_admin;
    }

    // Print full name
    public function printFullName()
    {
        $fullName = $this->name . " " . $this->surname;

        if ($this->is_admin) {
            echo $fullName . " (admin)<br>";
        } else {
            echo $fullName . "<br>";
        }
    }
}


// Customer class
class Customer extends User
{
    private $city;
    private $state;
    private $country;

    // Constructor
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
    }

    // City setter
    public function setCity($city)
    {
        $this->city = $city;
    }

    // City getter
    public function getCity()
    {
        return $this->city;
    }

    // State setter
    public function setState($state)
    {
        $this->state = $state;
    }

    // State getter
    public function getState()
    {
        return $this->state;
    }

    // Country setter
    public function setCountry($country)
    {
        $this->country = $country;
    }

    // Country getter
    public function getCountry()
    {
        return $this->country;
    }

    // Location method
    public function location()
    {
        return $this->city . ", " .
               $this->state . ", " .
               $this->country;
    }
}


// AdminUser class
class AdminUser extends User
{
    // Constructor
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);

        // Set admin value to true
        $this->is_admin = true;
    }
}


// Creating User object
$user = new User("Ram", "Sharma", "ram123");

// Creating Customer object
$customer = new Customer("Sita", "Thapa", "sita123");

$customer->setCity("Kathmandu");
$customer->setState("Bagmati");
$customer->setCountry("Nepal");

// Creating AdminUser object
$admin = new AdminUser("Hari", "Gurung", "hari_admin");


// Display User information
echo "<h3>User</h3>";
$user->printFullName();
echo "is_admin: " . ($user->isAdmin() ? "true" : "false") . "<br>";


// Display Customer information
echo "<h3>Customer</h3>";
$customer->printFullName();
echo "is_admin: " . ($customer->isAdmin() ? "true" : "false") . "<br>";
echo "Location: " . $customer->location() . "<br>";


// Display Admin information
echo "<h3>Admin User</h3>";
$admin->printFullName();
echo "is_admin: " . ($admin->isAdmin() ? "true" : "false") . "<br>";

?>