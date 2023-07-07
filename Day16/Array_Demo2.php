<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Demo</title>
</head>
<body>
    <?php
    $a=array("xyz","abc","def");
    print_r($a);
    sort($a);
    echo "<br> After Sorting <br>";
    print_r($a);
    ?>
</body>
</html>