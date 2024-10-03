<?php

// Class 'ProtectedModifier' with protected properties and methods.
class ProtectedModifier {

    // Protected properties are accessible only within the class and its subclasses.
    protected string $name;
    protected int $age;

    // Constructor to initialize the name and age properties.
    function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Protected method to get the name.
    protected function getName() {
        return $this->name;
    }
}

// Uncommenting the following code will result in an error, 
// because protected methods and properties cannot be accessed directly outside the class.
// $protected_modifier = new ProtectedModifier('Hello', 33);
// echo $protected_modifier->getName();

// Define a class 'ExtendsProtectedClass' that inherits from 'ProtectedModifier'.
class ExtendsProtectedClass extends ProtectedModifier {
    // Public method to access the protected 'getName' method from the parent class.
    public function getNameValue() {
        echo $this->getName();
    }
}

// Create an instance of 'ExtendsProtectedClass' and pass name and age.
$protected = new ExtendsProtectedClass('Protected', 22);
echo $protected->getNameValue();
