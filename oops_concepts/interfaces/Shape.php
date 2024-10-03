<?php

// Define an interface Shape with a method to display the shape.
interface Shape {
    public function displayShape();
}

// Define a class Circle that implements the Shape interface.
class Circle implements Shape {
    public $name;

    // Constructor to initialize the name property.
    function __construct($name) {
        $this->name = $name;
    }

    // Implement the displayShape method from the Shape interface.
    public function displayShape() {
        return $this->name . ' shape is rounded';
    }
}

// Create an instance of the Circle class.
$circle = new Circle('Circle');
echo $circle->displayShape();
