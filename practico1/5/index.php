<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Construir un programa que calcule el índice de masa corporal de una persona (IMC = peso [kg] / altura [m]2) e informe el estado en el que se encuentra esa persona en función del valor de IMC.

        Bajo peso        <18,50
        Normal        18,5 - 24,99
        Sobrepeso        ≥25,00
        Obesidad        ≥30,00
 -->
<form action="index.php" method="get">
    <input type="number" name="peso" id="" placeholder="Peso">
    <input type="number" name="altura" id="" placeholder="Altura">
    <input type="submit" value="Enviar">
</form>
 <?php
    require_once 'imc.php';
    if(!empty($_GET['peso'])&&!empty($_GET['altura'])){
        $peso = (int)$_GET['peso'];
        $altura = (int)$_GET['altura']/100;
        $imc =(int)calcularIMC($peso, $altura);

        if($imc < 18.50){
            echo "$imc - Bajo peso";
        }else if($imc>18.5 && $imc <25){
            echo "$imc - Normal";
        }else if($imc>=25 && $imc<30){
            echo "$imc - Sobrepeso";
        }else if($imc>=30){
            echo "$imc - Obesidad";
        }else{
            echo "Error";
        }
    }else{
        echo "Formulario incompleto";
    }
 
 ?>
</body>
</html>