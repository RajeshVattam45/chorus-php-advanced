<?php

// Register an autoload function to automatically load required classes when they're used.
spl_autoload_register(function ($class) {
    // Convert the namespace into a file path
    $file = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';

    // Include the file if it exists
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "File for class $class not found.";
    }
});
