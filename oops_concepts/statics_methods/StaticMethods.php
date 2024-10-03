<?php

// Define the Animals class with static properties and methods.
class Animals {
    public static string $name;
    public static int $weight;
    public static string $color;

    // Static method to set the properties of the animal.
    public static function setProperties(string $name, int $weight, string $color) {
        self::$name = $name;
        self::$weight = $weight;
        self::$color = $color;
    }

    // Static method to display the animal's properties.
    public static function displayAnimal() {
        echo 'Animal Name: ' . self::$name . ', Weight: ' . self::$weight . ' kg, and Color: ' . self::$color;
    }
}

// Set properties for the Animals class and display them.
Animals::setProperties('Tiger', 300, 'Yellow & Black');
Animals::displayAnimal();
echo '<br>';

// Define the Fruits class with an instance property.
class Fruits {
    public string $name;

    // Constructor to initialize the name property of the fruit.
    function __construct($name) {
        $this->name = $name;
    }

    // Method to display animal information using the Animals class.
    public function getMethod() {
        Animals::displayAnimal();
    }
}

// Create an instance of the Fruits class.
$apple = new Fruits('Apple');
echo $apple->name;
echo '<br>';
echo $apple->getMethod();
