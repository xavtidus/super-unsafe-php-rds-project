<?php
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
file_put_contents('config.json', $json);

echo "Configuration saved.";
?>
