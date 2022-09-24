<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio 7</title>
</head>

<body>
    <!-- Una persona desea invertir dinero en un banco, el cual le otorga un % de interés mensual. Escribir un programa para simular la inversión que imprima cuál será la cantidad de dinero que esta persona tendrá mes a mes durante un año. Genere una tabla HTML para mostrar el resultado. -->

    <form action="index.php" method="get">
        <input type="number" name="dinero" id="" placeholder="Ingrese inversion">
        <input type="submit" value="Enviar">
    </form>
    <?php
    require 'calculoInversiones.php';

    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    if (!empty($_GET['dinero'])) {
        $dinero = $_GET['dinero'];
        echo "<table>";
            echo "<tr>";
                echo "<td>";
                    echo "Inversion Inicial";
                echo "</td>";
                
                for($i = 0; $i < 12; $i++){
                    echo "<td>";
                        echo $meses[$i];
                    echo "</td>";

                }
            echo "</tr>";


            echo "<tr>";
                echo "<td>";
                    echo $dinero;
                echo "</td>";
                for ($i = 0; $i < 12; $i++) {
                    echo "<td>";
                        echo  $dinero += calcularInversion($dinero);
                    echo "</td>";
                }
            echo "</tr>";
        echo "</table>";
    }

    ?>

</body>

</html>