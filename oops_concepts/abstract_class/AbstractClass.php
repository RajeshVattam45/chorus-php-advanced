<?php

// Define an abstract class 'Animals' with a method to be implemented by subclasses.
abstract class Animals {
    // Abstract method that subclasses must define.
    abstract public function getName();
}

// Define the 'Dog' class, which inherits from the 'Animals' class.
class Dog extends Animals {

    // Property to store the type of the animal.
    public $type;

    // Constructor to initialize the animal's type.
    function __construct($type) {
        $this->type = $type;
    }

    // Method to retrieve the type of the animal.
    public function getType() {
        return $this->type;
    }

    // Implement the abstract method to return the name 'Dog'.
    public function getName() {
        return 'Dog';
    }
}

// Instantiate a 'Dog' object.
$dog = new Dog('Animal');

// Display the dog's name and type.
echo $dog->getName();
echo '<br>';
echo $dog->getType();
echo '<br>';

// Define the 'Fox' class, which inherits from the 'Animals' class.
class Fox extends Animals {
    // Implement the abstract method to return the name 'Fox'.
    public function getName() {
        return 'Fox';
    }
}

// Instantiate a 'Fox' object.
$fox = new Fox();

// Display the fox's name.
echo $fox->getName();
echo '<br>';
