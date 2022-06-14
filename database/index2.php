<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>

<body>
    <?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


    $sql = "SELECT * FROM users WHERE user_uid = 'Admin'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }
    }
    ?>
</body>

</html>