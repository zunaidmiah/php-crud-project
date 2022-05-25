<?php
require_once 'db_connection.php';


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
