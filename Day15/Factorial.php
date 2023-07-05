<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    $n=10;
    $fact=1;
    for($i=1;$i<=$n;$i++){
        $fact=$fact*$i;
    }
    echo "Factorial of 1 to 10 is: ".$fact;
    ?>
</body>
</html>