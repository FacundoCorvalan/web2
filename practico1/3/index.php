<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <!-- Escribir un programa que mediante un formulario html un usuario pueda ingresar su nombre, apellido y edad para que sean enviados al servidor. El programa, debe recibir los datos y mostrar la información por pantalla. 
Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué situaciones considera mejor utilizar uno u el otro?
Investigue las diferencias entre los arreglos $_POST $_GET y $_REQUEST de PHP
Genere validaciones de datos en el servidor. Ningún campo puede estar vacío. ¿Cuál es la diferencia entre realizar estas verificaciones del lado del cliente o del lado del servidor? 
 -->
    <form action="index.php" method="get">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido">
        <input type="number" name="edad" id="edad">
        <input type="submit" value="Enviar">

    </form>
    
    <?php

        
        if(!empty($_GET['nombre'])&&!empty($_GET['apellido'])&&!empty($_GET['edad'])){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $edad = $_GET['edad'];
    ?>
        <h2>Nombre: <?php echo $nombre ?></h2>
        <h2>Apellido: <?php echo $apellido ?></h2>
        <h2>Edad: <?php echo $edad ?></h2>
    <?php
        }
        else{
            echo "No hay valores en los inputs";
        }
    ?>

</body>
</html>