<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php snack</title>
</head>
<body>
    <!-- Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET. -->
    <h1>
        <?php 

            foreach ($_GET as $key => $value) {
                echo $key . " = ". $value . "<br>";

            }

        ?>
    </h1>
</body>
</html>