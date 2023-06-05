<?php
declare(strict_types=1);
class Dog
{
    public string $name;
    public string $color;
    public string $size;
    public string $breed;

    // Constructor
    public function __construct()
    {
        $this->name = 'name';
        $this->color = 'color';
        $this->size = '12';
        $this->breed = '$breed';
    }
    public function setName(string $name) {
        $this->name = $name;
    }
  

    // Method to display information about the dog
    public function displayInfo()
    {
        echo "Name: " . $this->name . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Size: " . $this->size . "\n";
        echo "Breed: " . $this->breed . "\n";
    }
    public function printProperties() {
        echo "Name: " . $this->name . "\n";
        echo "Color: " . $this->color . "\n";
        echo "Size: " . $this->size . "\n";
        echo "Breed: " . $this->breed . "\n";
    }
    public function getName() {
        return $this->name;
    }
    
    // Getter method for retrieving the color
    public function getColor() {
        return $this->color;
    }
    
    // Getter method for retrieving the size
    public function getSize() {
        return $this->size;
    }
    
    // Getter method for retrieving the breed
    public function getBreed() {
        return $this->breed;
    }
}

// Create an instance of the Dog class
$dog = new Dog();
$dog->setName('hello');
echo $dog->getName();

// Display information about the dog
//$dog1->displayInfo();
// echo "Created another method to call  the properties of same class: <br>";
// $dog2 = new Dog("Shampoo<br>","White<br>","Medium<br>","Vodafone wala kutta<br>");
// $dog2->printProperties();
// echo "Name:".$dog2->getName()."<br>";
// echo "Color:".$dog2->getColor()."<br>";
// echo "Size:".$dog2->getSize()."<br>";
// echo "Breed" .$dog2->getBreed()."<br>";

?>