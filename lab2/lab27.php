<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $posicion = "arriba";

    switch("posicion"){
        case "arriba": //Bloque 1
            echo "La variable contiene";
            echo " el valor arriba"
            break;
        case "abajo": //Bloque 2
            echo "La variable contiene";
            echo " el valor abajo";
            break;
        default: //Bloque 3
            echo "La variable contiene otro valor";
            echo " distinto de arriba y abajo";    
    }
    ?>
</body>
</html>