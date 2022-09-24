<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <!-- Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias entre arreglos asociativos e indexados -->

    <?php
        $items = ["item 1", "item 2", "item 3", "item 4", "item 5"];
        foreach ($items as $item) {
    ?>
    <ul>
        <li><?php echo $item ?></li>

    </ul>
    <?php

        }//cierre foreach

    ?>
</body>

</html>