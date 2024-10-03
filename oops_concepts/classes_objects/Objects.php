<?php

// Defines the Animals class.
class Animals {
    public $name;
    public $color;
    public $weight;

    // Constructor to initialize the animal's properties.
    function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    // Method to get the name of the animal.
    public function getName() {
        return $this->name;
    }

    // Method to get the color of the animal.
    public function getColor() {
        return $this->color;
    }

    // Method to get the weight of the animal.
    public function getWeight() {
        return $this->weight;
    }
}

// Creating an object for the Animals class representing a lion.
$lion = new Animals('Lion', 'Orange', '200');
echo $lion->getName() . ' ' . $lion->getColor() . ' ' . $lion->getWeight();
echo '<br>';

// Creating another object for the Animals class representing a tiger.
$tiger = new Animals('Tiger', 'Yellow & Black', '300');
echo $tiger->getName() . ' ' . $tiger->getColor() . ' ' . $tiger->getWeight();
echo '<br>';

// Creating another object for the Animals class representing a fox.
$fox = new Animals('Fox', 'Orange', '40');
echo $fox->getName() . ' ' . $fox->getColor() . ' ' . $fox->getWeight();
