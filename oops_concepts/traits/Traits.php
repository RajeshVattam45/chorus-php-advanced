<?php

// Defining a trait named 'Dog'.
trait Dog {
    // Method to display the name 'Dog'.
    public function displayNameDog() {
        return 'Dog';
    }
}

// Defining a trait named 'Cat'.
trait Cat {
    public $property;

    // Constructor to initialize the property.
    function __construct($property) {
        $this->property = $property;
    }

    // Method to display the name 'Cat'.
    public function displayName() {
        return 'Cat';
    }
}

// Defining a class named 'Animals'.
class Animals {
    // Using the 'Dog' and 'Cat' traits.
    use Dog, Cat;
}

// Creating an object of the 'Animals' class.
$animal = new Animals();

// Calling the method from the 'Dog' trait.
echo $animal->displayNameDog();
echo '<br>';

// Calling the method from the 'Cat' trait.
echo $animal->displayName();
