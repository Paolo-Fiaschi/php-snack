<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php snack</title>
    <?php 
        require_once "db.php";
    ?>
</head>
<body>
    <!-- stampare nome descrizione e voto di ogni hotel -->
    <h1>
        <?php 

            foreach ($hotels as $key => $hotel) {
                
                echo $hotel ["name"] . "<br>";
                echo $hotel ["description"] . "<br>";
                echo $hotel ["vote"] . "<br>-----------<br>";
                
            }
    
        ?>

    </h1>
    

</body>
</html>