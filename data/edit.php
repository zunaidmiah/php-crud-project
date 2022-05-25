<?php
if(isset($_POST['create'])) require_once '../db_connection.php';
else require_once 'db_connection.php';

$data = null;
if(!$conn->connect_error){
    if(isset($_POST['create'])){
        $sql_query = "UPDATE users_info  SET full_name='{$_POST['full_name']}', email='{$_POST['email']}', address='{$_POST['address']}', gender='{$_POST['gender']}' where id ={$_POST['id']} ";
        if ($conn->query($sql_query) === TRUE) {
            session_start();
            $_SESSION['message'] = 'Updated successfully';
            header("Location: ../index.php");
            exit;
            } else {
            echo "Error: " . $sql_query . "<br>" . $conn->error;
            }
    } else{
        $sql_query = "SELECT * FROM users_info where id={$_GET['id']}";
        $data = $conn->query($sql_query);
        if (!$data) {
            die("Error: " . $sql_query . "<br>" . $conn->error);
        }
    }

    $conn->close();
}

