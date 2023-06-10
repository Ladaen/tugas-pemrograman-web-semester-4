<?php  
$host = "localhost";
$username = "root";
$password = "";
$database = "crud_db";

// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if (!$mysqli) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>