<?php
$servername = "localhost"; // Change as required
$username = "root"; // Change as required
$password = ""; // Change as required
$dbname = "user_database"; // Change as required

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
