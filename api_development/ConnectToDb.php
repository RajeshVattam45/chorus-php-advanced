<?php

// Connecting to MySql server and DB.
$host = 'localhost';
$user_name = 'root';
$password = '';
$db = 'mydb';

// Createing new instance for the mysqli and pass the above 4 arguments.
$conn = new mysqli($host, $user_name, $password, $db);

// Check if connect failed thow an error.
if($conn->connect_error) {
    die('Error ' . $conn->connect_error);
}
