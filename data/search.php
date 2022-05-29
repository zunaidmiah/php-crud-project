<?php
require_once '../db_connection.php';
if(isset($_GET['search'])){
    $txt = $_GET['search'];
    $sql_query = "SELECT * FROM users_info WHERE full_name LIKE '%$txt%' ORDER BY id DESC";
    if(!$conn->connect_error){
        $data = $conn->query($sql_query);
        $output = null;
        if($data){
            if ($data->num_rows > 0) {
                $i = 1;
                // output data of each row
                while($row = $data->fetch_assoc()) {
                    $output .=  "<tr>
                    <th>{$i}</th>
                    <td>{$row['full_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['gender']}</td>
                    <td>
                        <a href='create.php?id={$row['id']}' class='btn btn-primary'>
                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                        </a>
                        <a href='data/delete.php?id={$row['id']}' class='btn btn-danger'>
                            <i class='fa fa-trash-o' aria-hidden='true'></i>
                        </a>
                    </td>
                </tr>";
                $i++;
                }
                echo $output;
            } else {
                echo "<tr> No Result</tr>";
            }
        }
    }
}