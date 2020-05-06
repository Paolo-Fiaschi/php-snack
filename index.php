<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php snack</title>
</head>
<body>
    <!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.  -->
    <?php 

        foreach ($_GET as $value) {
            
            echo $value; 
            
        }
        if(in_array("Boolean", $_GET)){
            echo "<h1 class='green'>yes</h1>";
        }else{
            echo "<h1 class='red'>no</h1>";
        }
         
    ?>
    

</body>
</html>