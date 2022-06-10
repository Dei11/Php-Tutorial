<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'testdatabase') or die('Error connecting to MySQL server.');

    $name = $_POST['user'];
    $email = $_POST['email'];
    // $age = $_POST['age'];
    if (isset($_POST['user']) && isset($_POST['email'])) {
        $sql = "INSERT INTO user  (name, email) VALUES ('$name', '$email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Successfully added!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
