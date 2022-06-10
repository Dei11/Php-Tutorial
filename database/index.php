<?php

include_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_first'];
            echo "<br>";
        }
    }
    ?>
</body>

</html>