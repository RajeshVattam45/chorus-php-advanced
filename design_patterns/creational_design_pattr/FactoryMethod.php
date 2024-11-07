<?php

// Purpose: This function creates fruit objects based on the given name, 
// displayFruit() method acts as a factory, allowing object creation without directly invoking constructors.

// Create Apple class.
class Apple {
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

// Create Banana class.
class Banana {
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


// Method to create the appropriate fruit object.
function displayFruit($name) {

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

try {
    // Create an Apple object using the factory.
    $apple = displayFruit('Apple');
    echo $apple->displayFruit();
    echo '<br>';

    // Create a Banana object using the factory.
    $banana = displayFruit('banana');
    echo $banana->displayFruit();
}
catch (Exception $e) {
    echo $e->getMessage();
}
