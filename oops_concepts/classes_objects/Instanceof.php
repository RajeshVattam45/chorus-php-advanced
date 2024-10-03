<?php

// Defining a class named 'Animal'.
class Animal {
    public $name;

    // Constructor to initialize the name property.
    public function __construct($name) {
        $this->name = $name;
    }
}

// Creating an instance of the Animal class for a lion.
$lion = new Animal('lion');

// Using the `instanceof` keyword to verify if the $lion object is an instance of the Animal class.
var_dump($lion instanceof Animal);
