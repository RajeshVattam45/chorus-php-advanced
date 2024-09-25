<?php

namespace namespaces\Animal;

class Animals {
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

    public function getColor() {
        return $this->color;
    }
}
