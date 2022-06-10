<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>

<body>
    <?php
    setcookie("user", "John Doe", time() - 86400);
    $_SESSION['user'] = "23";
    echo $_SESSION['user'];

    echo "<br>";

    if (!isset($_SESSION['user'])) {
        echo "Session is not set";
    } else {
        echo "Session is set";
    }
    ?>
</body>

</html>