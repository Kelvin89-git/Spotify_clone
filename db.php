<?php
// Database connection parameters
$servername = "localhost"; // Usually localhost for XAMPP
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Leave password empty for XAMPP
$dbname = "spotify_db"; // Replace with the actual name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
  