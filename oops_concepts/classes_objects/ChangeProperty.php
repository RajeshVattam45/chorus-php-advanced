<?php

// Question: How to changes the property of the class.
// To change a class property, use a setter method within the class.
class ChangeProperty {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }
}

// Creating new object for the ChangeProperty class.
$change_property = new ChangeProperty();
$change_property->setName('hello php');
echo $change_property->name;
echo '<br>';

// Changing the property outside of the class.
class ChangePropertyOutSideClass {
    public $name;
}

// Creating new instance for the class.
$property = new ChangePropertyOutSideClass();
$property->name = 'Change the name outside of the class';
echo $property->name;
