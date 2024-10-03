<?php

// Define ParentClass which contains properties and methods.
class ParentClass {

    // Properties of the ParentClass.
    public string $name;
    protected string $type;
    public string $color;
    protected int $number;
    public float $float;

    // Constructor to initialize the object properties.
    public function __construct(string $name, string $type, string $color, int $number) {
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
        $this->number = $number;
    }

    // Method to get the name property.
    public function getName() {
        return $this->name;
    }

    // Method to get the type property.
    public function getType() {
        return $this->type;
    }

    // Method to get the color property.
    public function getColor() {
        return $this->color;
    }

    // Method to get the number property.
    public function getNumber() {
        return $this->number;
    }
}

// Define ChildClass that inherits from ParentClass.
class ChildClass extends ParentClass {

    // Property specific to ChildClass.
    public string $extraString;

    // Constructor to initialize the object properties, including those from the parent class.
    public function __construct(string $name, string $type, string $color, int $number, string $extraString) {
        // Call the parent class constructor to initialize inherited properties.
        parent::__construct($name, $type, $color, $number);

        // Initialize the property specific to ChildClass.
        $this->extraString = $extraString;
    }

    // Method to call a method from the parent class.
    public function callParentMethods() {
        return $this->getNumber();
    }

    // Method to get the extraString property.
    public function getExtraString() {
        return $this->extraString;
    }
}

// Create an instance of ChildClass.
$child = new ChildClass('Apple', 'Fruit', 'Red', 90, 'Additional Info');

// Output the result of calling methods.
echo $child->callParentMethods();
echo '<br>';
echo $child->getName();
echo '<br>';

// Access and set the float property from the ParentClass.
$child->float = 20.54;
echo $child->float;
echo '<br>';

// Access and output the property specific to ChildClass.
echo $child->getExtraString();
