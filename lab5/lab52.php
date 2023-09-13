<?php
$acceptable = array(
    'image/jpeg',
    'image/jpg',
    'image/gif',
    'image/png'
);

$error = 0;
$maxFileSize = 1000000;
if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name']))
{
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    if ($_FILES['nombre_archivo_cliente']['size'] > $maxFileSize)
    {
        echo "Archivo demasiado grande. Tamaño maximo (1MB) <br>";
        $error = 2;
    }
    elseif(!in_array($_FILES['nombre_archivo_cliente']['type'], $acceptable) && $error != 2)
    {
        echo "Tipo de archivo invalido. Solo se aceptan imagenes (JPG, JPGE, GIF Y PNG) <br>";
        $error = 1;
    }
    elseif (is_file($nombreCompleto) && $error == 0)
    {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Arhivo repetido, se cambiara el nombre a $nombrearchivo <br>";

        move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);

        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    }
    elseif ($error == 0)
    {    
        move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
    
        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    }
}
else
    echo "No se ha podido subir el archivo <br>";
?>