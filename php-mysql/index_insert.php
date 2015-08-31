<?php
print_r($_POST);
$title = $_POST['title'];
$details = $_POST['details'];
$time = $_POST['time'];
$dingdong = $_POST['dingdong'];
require('mysql_connect.php');
$query = "INSERT INTO todo_items2 SET title = '$title', details='$details', timestamp = '$time', user_id = 12";
mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0) {
    //print(mysqli_affected_rows($conn));
    print('SUCCESS!');
}