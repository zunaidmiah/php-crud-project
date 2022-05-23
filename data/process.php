<?php
require_once '../db_connection.php';
// insert data to DB table


if (isset($_POST['create'])) {
  $sql_query = "INSERT INTO users_info  (id, full_name, email, address, gender)
                VALUES (null, '{$_POST['full_name']}', '{$_POST['email']}', '{$_POST['address']}', '{$_POST['gender']}')";

  if(!$conn->connect_error){
    if ($conn->query($sql_query) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql_query . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
}
