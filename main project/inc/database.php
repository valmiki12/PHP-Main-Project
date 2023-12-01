<?php
// Setting connection
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "Valmiki200524559";

// Create a connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
