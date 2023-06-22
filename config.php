<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$vars = explode("/",$_GET["config"]);

// Get values from the query string
$servername = $vars[0];
$username = $vars[1];
$password = $vars[2];
$dbname = $vars[3];

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

readfile('/tmp/config.json')

?>
