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
    ?>
</body>

</html>