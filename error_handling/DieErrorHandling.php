<?php

// connect with MySql server.
$server_name = 'localhost';
// Giving wrong user.
$user_name = 'rot';
$password = '';

$conn = new mysqli($server_name, $user_name, $password);

// Check if connect has error throw error.
if($conn->connect_error) {
    // Die function throw an error.
    die('Error ' . $conn->connect_error);
} else {
    echo 'Connected';
}
