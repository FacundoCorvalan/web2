<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <!-- Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. Modifique el ejercicio para que el límite de la tabla sea ingresado por un usuario. -->
    <form action="tablaDel/" method="get">
        <input type="number" name="limiteTabla" id="">
        <input type="submit" value="Enviar">
    </form>
    <table>