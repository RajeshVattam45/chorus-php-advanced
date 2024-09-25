<?php

class GetMagicMethod {

    // Private property, not directly accessible.
    private $name = 'Rajesh V';

    // Magic method __get to handle inaccessible properties.
    public function __get($name) {
        if($name === 'name'){
            return $this->name;
        }
        return "the property $name doesn\' exists";
    }

}

// Trying to access a private property (inaccessible directly).
$get_obj = new GetMagicMethod();
echo $get_obj->name;
echo '<br>';
// Trying to access a non-existing property.
echo $get_obj->value;
