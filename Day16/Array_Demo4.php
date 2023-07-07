<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Demo 4</title>
</head>
<body>
    <?php
    $a=array("abc","def","hij","kmn");
    print_r($a);
    echo "<br> Array Reverse";
    $rev=array_reverse($a);
    echo "<br>";
    print_r($rev);
    echo "<br>";
    echo count($a);
    ?>
</body>
</html>