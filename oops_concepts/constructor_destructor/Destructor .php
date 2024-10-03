<?php

// Create the Destructor class.
class Destructor {
    public int $number;
    public string $data;

    // Constructor to initialize properties.
    function __construct(int $number, string $data) {
        $this->number = $number;
        $this->data = $data;
    }

    // Function to get the number property.
    public function getNumber() {
        return $this->number;
    }

    // Function to get the data property.
    public function getData() {
        return $this->data;
    }

    // The __destruct() function is automatically called at the end of the script.
    // Destructor is called when the object is destructed or the script is stopped or exited.
    function __destruct() {
        echo "The Number is {$this->number} and data is {$this->data}";
    }
}

// Create a new instance of the Destructor class.
$destructor = new Destructor(200, 'Hello PHP destructor');
echo '<br>';

class Fruits {
    public $name; // Property to hold the name of the fruit.

    // Constructor to initialize the name property.
    function __construct($name) {
        $this->name = $name;
    }

    // Function to create a new instance of Fruits.
    function getCreateObject() {
        $banana = new Fruits('Banana'); // Create a new instance of Fruits.
    }

    // Destructor to clean up when the object is destroyed.
    function __destruct() {
        echo "Fruit name is: {$this->name}";
    }
}

// Create an instance of the Fruits class.
$apple = new Fruits('Apple');
$apple->getCreateObject();
