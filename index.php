<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Read JSON file
$json = file_get_contents('config.json');

$tmp_cfg_file_path = "/tmp/config.json"

if (file_exists($tmp_cfg_file_path)) {
    $message = "The config in the temp dir exists, loading";
    $json = file_get_contents($tmp_cfg_file_path);
} else {
    $message = "The config in the temp dir does not exist, loading defaults";
    $json = file_get_contents('config.json');
}

// Decode JSON file into an associative array
$config = json_decode($json, true);

// Extract values from the config
$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Always remember to close the connection once you're done
$conn->close();
?>
