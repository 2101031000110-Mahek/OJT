<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested If Else</title>
</head>
<body>
    <?php
    $a=5;
    $b=2;
    $c=10;
    if($a>$b){
        if($a>$c){
            echo "<br>".$a." is grater";
        }
        else{
            echo "<br>".$c." is grater";
        }
    }
    else if($b>$a){
        if($b>$c){
            echo "<br>".$b." is grater";
        }
        else{
            echo "<br>".$c." is grater";
        }
    }
    else{
        echo "<br>".$c." is grater";
    }
    ?>
</body>
</html>