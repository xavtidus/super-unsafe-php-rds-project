<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Get values from the query string
$servername = $_GET['servername'];
$username = $_GET['username'];
$password = $_GET['password'];
$dbname = $_GET['dbname'];

// Create an associative array with the config
$config = [
    "servername" => $servername,
    "username" => $username,
    "password" => $password,
    "dbname" => $dbname
];

// Encode the array into a JSON string
$json = json_encode($config);

// Write the JSON string to config.json
file_put_contents('/tmp/config.json', $json);

echo "Configuration saved.";
?>
