<?php

class MagicMethods {

    function __construct() {
        echo 'Constructor Called!! <br>';
    }

    function __destruct() {
        echo 'Destructer called!! <br>';
    }

}

// Creats object to MagicMethods class.
$obj = new MagicMethods();
