<?php

// Define a class 'Example'.
class Example {
    private string $privateProperty = "I'm private!";
    
    private function privateMethod() {
        return "This is a private method.";
    }
    
    // Public method to access private properties and methods
    public function getPrivateInfo() {
        return $this->privateProperty . " " . $this->privateMethod();
    }
}

$example = new Example();

// Trying to access private property directly - will cause an error.
// echo $example->privateProperty;

// Trying to call private method directly - will cause an error.
// echo $example->privateMethod();

// Accessing private information via a public method.
echo $example->getPrivateInfo();
