<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php snack</title>
    <?php


    ?>
</head>
<body>
    <!-- 10 numeri casuali, poi il min, max e media-->
    <h1>
        <?php 
            
            $min = 100;
            $max = 1;
            $avg = 0;
            for ($i=0; $i < 10; $i++) { 
                $myNewInt = rand(1, 100);
                if ($myNewInt < $min) {
                   $min = $myNewInt;
                }
                if ($myNewInt > $max) {
                    $max = $myNewInt;
                }
                $avg += $myNewInt;
                echo $myNewInt . "<br>";
            }
            $avg /= 10; //$avg = $avg /10
            echo "<br>-----------------<br>";
            echo "min: " . $min . "<br>";
            echo "max: " . $max . "<br>";
            echo "avg: " . $avg . "<br>";


        ?>

    </h1>
    

</body>
</html>