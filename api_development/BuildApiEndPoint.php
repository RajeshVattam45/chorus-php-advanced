<?php

// Include database connection file.
include 'ConnectToDb.php';

// Set headers to allow access from any origin and specify the content type as JSON.
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check if the request method is GET.
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Query to retrieve all records from the 'animals' table.
    $query = 'SELECT * FROM animals';
    $response = $conn->query($query);

    // Check if any records are found.
    if ($response->num_rows > 0) {

        $animals = [];
        // Loop through each record and store it in the $animals array.
        while ($row = $response->fetch_assoc()) {
            $animals[] = $row;
        }

        // Convert the array of records to a JSON format and output it.
        echo json_encode($animals);
    }
    else {
        // Set response code to 404 if no records are found and return an error message.
        http_response_code(404);
        echo json_encode(['message' => 'No records found']);
    }
}
else {
    // Set response code to 505 if the request method is not GET and return an error message.
    http_response_code(505);
    echo json_encode(['message' => 'GET request method required']);
}
