<?php

class MagicCallMethod {

    // This method gets called when a method or property is called which has not been defined.
    public function __call($name, $arguments) {
        echo 'Method name: ' . $name;
        print_r($arguments);
    }

}

$call_obj = new MagicCallMethod();
echo $call_obj->undefinedMethod('callMethod', 'Arguments');
