<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <!-- Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. Modifique el ejercicio para que el límite de la tabla sea ingresado por un usuario. -->
    <form action="index.php" method="get">
        <input type="number" name="limiteTabla" id="">
        <input type="submit" value="Enviar">
    </form>
    <table>
    <?php

        if(!empty($_GET['limiteTabla'])){
            $mult = $_GET['limiteTabla'];
            for($i=1;$i<=$mult;$i++){
                echo "<tr>";
                for($j=1;$j<=$mult;$j++){
    
                    if($i == $j || ($i*$j)==$i || ($i*$j)==$j){
                        echo "<td class='colorear'>". $i * $j . "</td>" ;//td
                    }
                    else{
                        echo "<td>". $i * $j . "</td>" ;//td
    
                    }


                    
                }
                echo "<tr>";
            }
        }else{
            echo "Formulario vacio";
        }
    ?>

    </table>
</body>
</html>