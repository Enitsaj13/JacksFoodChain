<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fosdb';

// Attempt to connect to the database
$con = mysqli_connect($host, $user, $password, $database);

// Check if connection was successful
if (!$con) {
    // Display error message and terminate script execution
    die("Connection failed: " . mysqli_connect_error());
}
?>
