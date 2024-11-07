<?php

// Define the custom error handler.
function error_function($error_level, $error_message, $error_file, $error_line, $error_context = null) {
    // Format error message.
    echo "<b>Error [$error_level]:</b> $error_message in <b>$error_file</b> on line <b>$error_line</b><br>";
    
    // Optionally stop the script for fatal errors.
    if ($error_level == E_USER_ERROR) {
        exit(1);
    }
}

// Set the custom error handler.
set_error_handler("error_function");

// Example 1: Custom error for division by zero.
function divide($a, $b) {
    if ($b == 0) {
        trigger_error("Cannot divide by zero!", E_USER_WARNING);
        return false;
    }
    return $a / $b;
}

// Creating class 'MyClass'.
class MyClass {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Createing object.
$object = new MyClass('Rajesh');
echo checkObjectProperty($object, 'name');

// Example 2: Custom error for undefined object property.
function checkObjectProperty($obj, $property) {
    if (!property_exists($obj, $property)) {
        trigger_error("Property '$property' is not defined in object!", E_USER_NOTICE);
        return false;
    }
    return $obj->$property;
}

// Example 3: Custom error for type mismatch.
function checkType($variable) {
    if (!is_int($variable)) {
        trigger_error("Expected an integer, but received " . gettype($variable), E_USER_ERROR);
    }
    return $variable;
}

// 1. Division by zero.
echo divide(10, 0);

// 2. Undefined object property.
$obj = new stdClass();
$obj->name = "Rajesh";
checkObjectProperty($obj, 'age');

// 3. Type mismatch.
checkType("string");
