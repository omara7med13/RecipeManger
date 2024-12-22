<?php
$servername = "localhost";
$username = "root";
$password = ""; // Empty password for root in XAMPP
$database = "recipe_manager";
$port = 3307; // Ensure correct port (usually 3306, but using 3307 here)

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
