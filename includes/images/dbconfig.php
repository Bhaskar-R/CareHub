<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "id13641166_root";
$dbPassword = "n<!)r>0yUi**r31f";
$dbName     = "id13641166_hospital";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>