<?php

// Note: Both the Animal and Fruits classes have the same methods (getName(), getColor()).
// We are using namespaces to avoid conflicts between these two classes with similar method names.

// Including the required files where Animal and Fruits classes are defined.
require_once 'Animal.php';
require_once 'Fruits.php';
require_once 'NameSpaceHasTwoClasses.php';

// Using the namespaces to reference the correct classes.
use namespaces\Animal\Animals;
use namespaces\Fruits\Fruits;
use namespaces\NameSpaceHasTwoClasses\Employes;
use namespaces\NameSpaceHasTwoClasses\Students;

class GetMethods {

    // Retrieve and display the name and color of an Animal and a Fruit.
    public function retRiveMethod() {

        // Creating an instance of the Animals class.
        $object_animal = new Animals('Tiger', 'Yellow & Black');

        // Output the name and color of the Animal object.
        echo $object_animal->getName();
        echo '<br>';
        echo $object_animal->getColor();
        echo '<br>';

        // Creating an instance of the Fruits class.
        $obj_fruits = new Fruits('Apple', 'Red');

        // Output the name and color of the Fruit object.
        echo $obj_fruits->getName();
        echo '<br>';
        echo $obj_fruits->getColor();
        echo '<br>';
    }

    // Retrieve Student and Employee class propertices and methods.
    public function getAll() {
        $students = new Students('Rajesh');
        echo $students->displayNme();
        echo '<br>';
        $employee = new Employes('Developer');
        echo $employee->displayNme();
    }
}

// Create an instance of the GetMethods class.
$obj = new GetMethods();
$obj->retRiveMethod();
$obj->getAll();
