<?php

// Include Composer's autoload.
require 'C:/xampp/htdocs/vendor/autoload.php';

use GuzzleHttp\Client;

try {
    // Creating a new instance for guzzle client.
    $client = new Client();
    $url = 'http://localhost/chorus_php_oops/api_development/BuildApiEndPoint.php';
    
    // Sending request with URN and type.
    $response = $client->request('GET', $url);

    // Check if the response not empty get the data and decode the json.
    if ($response->getBody() !== '') {
        $data = json_decode($response->getBody(), true);
        $animals = [];

        foreach ($data as $key => $value) {
            // Construct each animal as an associative array with specific keys
            $animals[] = [
                'id' => $value['id'],
                'name' => $value['name'],
                'color' => $value['color'],
                'weight' => $value['weight'],
                'lifespan' => $value['lifespan'],
                'type' => $value['type']
            ];
        }
    }
    else {
        // Throw an exception.
        throw new Exception('Invalid Empty response');
    }
}
// Catch the exception message.
catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Displaying Tha Data</title>
</head>

<body>
    <div class="container mb-2">
        <h1 class="text-center fw-bold border rounded p-1">Product Details</h1>
        <div class="row">
            <?php foreach ($animals as $animal): ?>
                <!-- Dynamically generated card for each animal -->
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Display Data <?php echo $animal['id']; ?> </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $animal['name']; ?></li>
                            <li class="list-group-item"><?= $animal['color']; ?></li>
                            <li class="list-group-item"><?= $animal['weight']; ?></li>
                            <li class="list-group-item"><?= $animal['lifespan']; ?></li>
                            <li class="list-group-item"><?= $animal['type']; ?></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>