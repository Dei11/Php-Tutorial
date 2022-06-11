<?php
//same thing as db.php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$first = $_POST['firstName'];
$second = $_POST['secondName'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$password = $_POST['password'];

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$second', '$email', '$uid', '$password');";

mysqli_query($conn, $sql);
header("Location: ../index.php?singup=success");
