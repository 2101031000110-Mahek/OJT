<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
</head>
<body>
    <?php
    $count=1;
    $num=5;
    while($count<=$num){
        $i=0;
        while($i<=($num-$count)){
            echo " ";
            $i++;
        }
        $i=0;
        while($i<(2*$count-1)){
            echo "*";
            $i++;
        }
        echo "<br>";
        $count++;
    }
    ?>
</body>
</html>