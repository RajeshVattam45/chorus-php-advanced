<?php

// Class definition for PublicModifier.
class PublicModifier {

    // Public property to hold the name.
    public string $name;

    // Method to set the name property.
    public function setName($name) {
        $this->name = $name;
    }

    // Method to get the name property.
    public function getName() {
        return $this->name;
    }
}

// Create an instance of the PublicModifier class.
$public = new PublicModifier();

// Set the name property using the setName method.
$public->setName('Public');
echo 'Accessing public property: ' . $public->getName();
