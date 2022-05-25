<?php
require_once '../db_connection.php';


if(!$conn->connect_error){
    if(isset($_GET['id'])){
        $sql_query = "DELETE FROM users_info where id ={$_GET['id']} ";
        if ($conn->query($sql_query) === TRUE) {
            session_start();
            $_SESSION['message'] = 'Deleted successfully';
            header("Location: ../index.php");
            exit;
            } else {
            echo "Error: " . $sql_query . "<br>" . $conn->error;
            }
    }
    $conn->close();
}

