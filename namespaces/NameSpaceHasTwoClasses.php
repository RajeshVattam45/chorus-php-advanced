<?php

// Define a namespace 'namespaces\NameSpaceHasTwoClasses'
namespace namespaces\NameSpaceHasTwoClasses;

// Define a class called Students.
class Students {
    // Public property for student's name.
    public $name;

    // Constructor to initialize the student's name.
    function __construct($name) {
        $this->name = $name;
    }

    // Method to display the student's name.
    public function displayNme() {
        return $this->name;
    }
}

// Define another class called Employes.
class Employes {
    // Public property for employee's name.
    public $name;

    // Constructor to initialize the employee's name.
    function __construct($name) {
        $this->name = $name;
    }

    // Method to display the employee's name.
    public function displayNme() {
        return $this->name;
    }
}
