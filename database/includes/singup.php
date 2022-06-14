<?php
//same thing as db.php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$first = mysqli_real_escape_string($conn, $_POST['firstName']);
$second = mysqli_real_escape_string($conn, $_POST['secondName']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$second', '$email', '$uid', '$password');";

mysqli_query($conn, $sql);
header("Location: ../index.php?singup=success");
