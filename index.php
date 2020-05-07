<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php snack</title>
    <?php 
        require_once "db.php";
        $min = $_GET["min"];
        $max = $_GET["max"];
        $count = $_GET["count"];    
    ?>
</head>
<body>
    <!-- stampare 10 numeri presi dal localhost -->
    <h1>
        <?php 
            for ($i=0; $i < $count; $i++) { 
                echo rand($min, $max) . "<br>";
                
            }

    
        ?>

    </h1>
    

</body>
</html>