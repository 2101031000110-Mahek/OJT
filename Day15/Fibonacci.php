<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <?php
    $n=10;
    $a=0;
    $b=1;
    for($i=1;$i<=$n;$i++){
        echo $a.",";
        $c=$a+$b;
        $a=$b;
        $b=$c;
    }
    ?>
</body>
</html>