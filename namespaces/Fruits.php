<?php

// Define a namespace 'namespaces\Fruits'.
namespace namespaces\Fruits;

// Define a class called Fruits.
class Fruits {
    // Public properties for name and color.
    public $name;
    public $color;

    // Constructor to initialize name and color.
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Method to get the name of the fruit.
    public function getName() {
        return $this->name;
    }
    
    // Method to get the color of the fruit.
    public function getcolor() {
        return $this->color;
    }
}
