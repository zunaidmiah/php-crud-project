<?php
require_once 'db_connection.php';


// Select data from DB table

$sql_query = "SELECT * FROM users_info ORDER BY id desc";
$data = null;
$status = false;
$page = 1;
if(!$conn->connect_error){
    $data = $conn->query($sql_query);
    if($data->num_rows > 10){
        $status = true;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $offset = 10*($page-1);
        $sql_query = "SELECT * FROM users_info ORDER BY id desc LIMIT 10 OFFSET {$offset}";
        $data = $conn->query($sql_query);
    }
    if (!$data) {
        die("Error: " . $sql_query . "<br>" . $conn->error);
    }

    $conn->close();
}
