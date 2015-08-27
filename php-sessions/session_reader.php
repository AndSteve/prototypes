<?php
session_start();
$name = $_POST['name'];
$age = $_POST['age'];
$occupation = $_POST['occupation'];
$_SESSION['error'] = '';
if (preg_match("/^[a-zA-Z]{3,}$/", $name)) {
    $_SESSION['name'] = $_POST['name'];
} else {
    $_SESSION['error']['name'] = $_POST['name'];
}
if (preg_match("/^[0-9]{1,2}$/", $age)) {
    $_SESSION['age'] = $_POST['age'];
} else {
    $_SESSION['error']['age'] = $_POST['age'];
}
if (preg_match("/^[a-zA-Z]{3,99}$/", $occupation)) {
    $_SESSION['occupation'] = $_POST['occupation'];
} else {
    $_SESSION['error']['occupation'] = $_POST['occupation'];
}
header('location: session_setter.php');