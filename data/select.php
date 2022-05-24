<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Select data from DB table

$sql_query = "SELECT * FROM users_info";
$data = null;
if(!$conn->connect_error){
    $data = $conn->query($sql_query);
    if (!$data) {
        die("Error: " . $sql_query . "<br>" . $conn->error);
    }

    $conn->close();
}
