<?php

// This example ensures that only one instance of the DataBase class is created.
// The getInstance() method returns the single instance, creating it if necessary.
// The constructor is private, and cloning and unserializing are disabled to prevent multiple instances.

class DataBase {

    // Static variable to hold the single instance.
    private static ?DataBase $instance = null;

    private $connection;

    // Private constructor to prevent direct object creation.
    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            // Handle PDO exception
            echo "Database connection error: " . $e->getMessage();
            exit();
        }
    }

    // Static method to get the single instance of the Database class.
    public static function getInstance(): DataBase {
        // If no instance exists, create a new one.
        if (self::$instance === null) {
            self::$instance = new DataBase();
        }
        return self::$instance;
    }

    // Method to get the PDO connection.
    public function getConnection() {
        return $this->connection;
    }

    // Prevent cloning the instance.
    private function __clone() {}

    // Prevent unserializing the instance.
    public function __wakeup() {}
}

// Function to test Singleton instance and perform a database query.
function createInstance() {
    try {
        // Get the singleton instance of the Database.
        $db1 = DataBase::getInstance();

        // Attempting to clone will throw a fatal error.
        // $clone_db1 = clone $db1;

        // Get the PDO connection.
        $conn = $db1->getConnection();

        // Perform the query.
        $query = "SELECT * FROM animals";
        $result = $conn->query($query);

        // Fetch the results.
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        // print_r($rows);

        // Get another instance and check if it is the same.
        $db2 = DataBase::getInstance();

        if ($db1 === $db2) {
            echo 'DB has only one instance';
        }
        else {
            throw new Exception('DB has two instances');
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}

// Call the function.
createInstance();
