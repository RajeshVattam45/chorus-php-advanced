<?php

// Initialize a cURL session.
$curl = curl_init();

// Set the URL of the API
$url = "http://localhost/chorus_php_advanced/api_development/BuildApiEndPoint.php";

// Set cURL options.
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request and get the response.
$response = curl_exec($curl);

// Check for errors.
if (curl_errno($curl)) {
    echo 'Error:' . curl_error($curl);
}
else {
    // Decode the JSON response to an associative array.
    $data = json_decode($response, true);
    print_r($data);
}

// Close the cURL session.
curl_close($curl);
