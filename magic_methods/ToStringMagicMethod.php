<?php

class ToStringMagicMethod {

    // This method gets called when an object is treated as a string.
    public function __toString() {
        return 'You are using MagicMethod object as a String ';
    }

}

// Create object to class.
$to_string_obj = new ToStringMagicMethod();
echo $to_string_obj;
