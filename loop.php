<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>

<body>
    <?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    echo "<br>";
    echo "<br>";

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    echo "<br>";
    echo "<br>";

    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
</body>

</html>