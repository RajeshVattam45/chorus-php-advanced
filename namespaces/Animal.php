<?php

// Declare a namespace 'namespaces\Animal'.
namespace namespaces\Animal;

// Define a class called Animals.
class Animals {
    // Public properties to hold the name and color of the animal.
    public $name;
    public $color;

    // Constructor method to initialize the object with name and color
    function __construct($name, $color) {
        // Assign values to the name and color properties.
        $this->name = $name;
        $this->color = $color;
    }

    // Method to get the name of the animal.
    public function getName() {
        return $this->name;
    }

    // Method to get the color of the animal.
    public function getColor() {
        return $this->color;
    }
}
