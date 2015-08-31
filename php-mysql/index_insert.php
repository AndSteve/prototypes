<?php
print_r($_POST);
require('mysql_connect.php');
$query = "INSERT INTO todo_items2 SET title = 'Play Badminton', details='hit some cocks around', timestamp = 12, user_id = 12";
//mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0) {
    print(mysqli_affected_rows($conn));
}