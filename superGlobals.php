<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
</head>

<body>
    <?php
    $text = "Hello World";
    function test()
    {
        echo $GLOBALS['text'];
    }
    test();
    ?>
</body>

</html>