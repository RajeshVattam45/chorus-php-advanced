<?php

include_once 'Autoload.php';

// Import the classes with their complete namespaces.
use Vehicles\Car;
use Vehicles\Bike;
use Vehicles\Auto;

// Create an instance of the 'Car' class.
$car = new Car();
echo $car->drive();
echo '<br>';

// Create an instance of the 'Bike' class.
$bike = new Bike();
echo $bike->ride();
echo '<br>';

// Create an instance of the 'Auto' class.
$auto = new Auto();
echo $auto->drive();
