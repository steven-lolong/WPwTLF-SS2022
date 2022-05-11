<?php 
$servername = "localhost";
$scheme = "wpwlf";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $scheme);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// close connection 
// $conn->close();
?>