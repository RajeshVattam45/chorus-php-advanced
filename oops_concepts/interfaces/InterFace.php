<?php

// Define an interface Flower.
interface Flower {
    // This method must be implemented by any class that implements the interface.
    public function displayName();
}

// Define a class Rose that implements the Flower interface.
class Rose implements Flower {

    // Implement the displayName method as required by the Flower interface.
    public function displayName() {
        return 'Rose';
    }
}

// Create an instance of Rose.
$rose = new Rose();
echo '<br>';

// Define an interface Animal.
interface Animal {
    // This method must be implemented by any class that implements the interface.
    public function displayAnimal();
}

// Define a class Lion that implements the Animal interface.
class Lion implements Animal {
    public $name;
    public $color;

    // Constructor to initialize object properties.
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Implement the displayAnimal method that returns a string.
    public function displayAnimal() {
        return 'Animal Name is: ' . $this->name . ' Color is ' . $this->color;
    }
}

// Create an instance of Lion.
$lion = new Lion('Lion', 'Yellow & Black');
echo $lion->displayAnimal();
