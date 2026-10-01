<?php

class Student
{
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private property
    private $tuition;

    // Protected property
    protected $indexNumber;

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Getter for surname
    public function getSurname()
    {
        return $this->surname;
    }

    // Public method
    public function helloWorld()
    {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily()
    {
        return "Hello Family";
    }

    // Private method
    private function helloMe()
    {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition()
    {
        echo "Tuition: " . $this->tuition . "<br>";
    }

    // Public method to set tuition
    public function setTuition($tuition)
    {
        $this->tuition = $tuition;
    }

    // Public method to call private methods
    public function showPrivateMethods()
    {
        echo $this->helloMe() . "<br>";
        $this->getTuition();
    }
}


// Subclass
class PartTimeStudent extends Student
{
    // Public method
    public function helloParent()
    {
        return $this->helloFamily();
    }
}


// Creating Student object
$student = new Student();

$student->name = "Abina";
$student->surname = "Dahal";
$student->country = "Nepal";

$student->setTuition(50000);

echo "<h3>Student Information</h3>";

echo "Name: " . $student->getName() . "<br>";
echo "Surname: " . $student->getSurname() . "<br>";
echo "Country: " . $student->country . "<br>";

echo $student->helloWorld() . "<br>";

$student->showPrivateMethods();


// Creating PartTimeStudent object
$partTimeStudent = new PartTimeStudent();

$partTimeStudent->name = "Ram";
$partTimeStudent->surname = "Sharma";
$partTimeStudent->country = "Nepal";

echo "<h3>Part Time Student</h3>";

echo "Name: " . $partTimeStudent->getName() . "<br>";
echo "Surname: " . $partTimeStudent->getSurname() . "<br>";
echo "Country: " . $partTimeStudent->country . "<br>";

echo $partTimeStudent->helloWorld() . "<br>";
echo $partTimeStudent->helloParent() . "<br>";

?>