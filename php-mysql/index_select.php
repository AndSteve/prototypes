<?php
require('mysql_connect.php');
$query = 'SELECT * FROM todo_items2 WHERE user_id = 12';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output[] = $row;
    }
}
print_r($output);