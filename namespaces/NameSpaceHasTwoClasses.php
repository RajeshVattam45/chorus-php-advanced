<?php

namespace namespaces\NameSpaceHasTwoClasses;

class Students {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function displayNme() {
        return $this->name;
    }
}

class Employes {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function displayNme() {
        return $this->name;
    }
}