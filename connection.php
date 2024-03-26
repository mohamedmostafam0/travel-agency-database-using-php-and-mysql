<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "matar"; // Change this to your MySQL username
$password = "matarspassword"; // Change this to your MySQL password
$database = "travel_agency"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; // Remove this line after testing
