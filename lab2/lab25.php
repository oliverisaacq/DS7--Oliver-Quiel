<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.5</title>
</head>
<body>
    <?php
    $figuras = array('cuadrado', 'triangulo', 'circulo');
    $figuras[1] = 'rectangulo';
    mostrar_figuras($figuras, "asignacio de rectangulo");

    array_push($figuras, 'pentangono');
    mostrar_figuras($figuras, "adiccion de pentagono al final");

    array_unshift($figuras, 'hexagono');
    mostrar_figuras($figuras, "adiccion de hexagono al inicio");

    array_pop($figuras);
    mostrar_figuras($figuras, "eliminacion del ultimo");

    array_shift($figuras);
    mostrar_figuras($figuras, "eliminacion de primero");

    function mostrar_figuras($figuras, $mensaje){
        echo "<br>Arreg;p des[ies de $mensaje <br>";
        foreach($figuras as $figuras){
            echo "$figuras <br>";
        }
    }
    ?>
</body>
</html>