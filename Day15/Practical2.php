<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 2</title>
</head>
<body>
    <?php
    $a = "123.abc";
    echo "Type of a is: ".gettype($a)."<br>";
    settype($a,"int");
    echo "After Conversion type of a is: ".gettype($a);
    ?>
</body>
</html>