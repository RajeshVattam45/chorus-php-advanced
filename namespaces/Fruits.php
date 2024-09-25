<?php

namespace namespaces\Fruits;

class Fruits {
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getcolor() {
        return $this->color;
    }
}