<?php

// Define the Fruits class.
class Fruits {

    public $name;
    public $color;

    // Constructor to initialize the object's properties when a new instance is created.
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Get the name property.
    public function getName() {
        return $this->name;
    }

    // Get the color property.
    public function getColor() {
        return $this->color;
    }
}

// Create an instance of the Fruits class.
$apple = new Fruits('Apple', 'Red');
echo $apple->getName() . ' ' . $apple->getColor();
