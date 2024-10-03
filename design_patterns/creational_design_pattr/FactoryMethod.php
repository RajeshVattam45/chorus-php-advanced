<?php

// This example factory that creates different fruit objects (Apple, Banana) based on input.
// The FactoryClass handles the object creation,
// simplifying the process and allowing for easy extension to new fruit types in the future.

// Define an interface for Fruits.
interface Fruits {
    public function displayFruit();
}

// Apple class implements Fruits interface.
class Apple implements Fruits {
    public string $name;

    // Constructor to initialize the fruit name.
    function __construct($name) {
        $this->name = $name;
    }

    // Method to display the name of the fruit.
    public function displayFruit() {
        return $this->name;
    }
}

// Banana class implements Fruits interface.
class Banana implements Fruits {
    public string $name;

    // Constructor to initialize the fruit name.
    function __construct($name) {
        $this->name = $name;
    }

    // Method to display the name of the fruit.
    public function displayFruit() {
        return $this->name;
    }
}

// FactoryClass responsible for creating instances of Fruits.
class FactoryClass {

    // Static method to create the appropriate fruit object.
    public static function displayFruit($name): Fruits {

        // Convert the name to lowercase and then capitalize the first letter.
        $name = strtolower($name);
        $upper_case = ucfirst($name);

        // Switch case to determine which fruit object to return.
        switch ($upper_case) {
            case 'Apple':
                // Create and return an Apple object
                return new Apple($upper_case);
            case 'Banana':
                // Create and return a Banana object.
                return new Banana($upper_case);
            default:
                throw new Exception('Error: Fruit type not recognized');
        }
    }

}

try {
    // Create an Apple object using the factory.
    $apple = FactoryClass::displayFruit('Apple');
    echo $apple->displayFruit();
    echo '<br>';

    // Create a Banana object using the factory.
    $banana = FactoryClass::displayFruit('banana');
    echo $banana->displayFruit();
}
catch (Exception $e) {
    echo $e->getMessage();
}
