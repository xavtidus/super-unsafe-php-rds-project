<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Read JSON file
echo "starting..."

$json = file_get_contents('/tmp/config.json');

echo $json
?>
