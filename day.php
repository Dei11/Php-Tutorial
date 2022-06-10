<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
    <style>
        p {
            color: red;
        }
    </style>

</head>

<body>
    <?php
    $dayofweek = date("w");
    switch ($dayofweek) {
        case 0:
            echo "It's Sunday";
            break;
        case 1:
            echo "It's Monday";
            break;
        case 2:
            echo "It's Tuesday";
            break;
        case 3:
            echo "It's Wednesday";
            break;
        case 4:
            echo "It's Thursday";
            break;
        case 5:
            echo "<p>It's Friday</p>";
            break;
        case 6:
            echo "It's Saturday";
            break;
        default:
            echo "It's not a day of the week";
            break;
    }
    ?>
</body>

</html>