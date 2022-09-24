
    <!-- Crear una calculadora básica server side. Esta calculadora debe permitir generar operaciones básicas dado dos números leídos desde un formulario.
Ademas, se deberá incluir una barra de navegación para 
Acceder a una sección número pi: esta sección debe mostrar mostrar una descripción de lo que representa este número y su valor. Investigue diferentes formas de obtener este valor en PHP.
Acceder a una sección about que indique los creadores de la calculadora. Si le indicamos con un parametro un desarrollador en particular debe mostrar solo eso: ejemplo: about.php?developer=juan
 -->
<?php 
    require 'templates/header.php';
?>

 <form action="index.php" method="get">
    <input type="number" name="numero1" id="">
    <select name="op" id="op">
        <option disabled selected>Elige una operacion</option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="mult">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    <input type="number" name="numero2" id="">
    <input type="submit" value="Enviar">
 </form>

 <?php
    require_once 'operaciones.php';
    if(!empty($_GET['numero1'])&&!empty($_GET['op'])&&!empty($_GET['numero2'])){
        $nro1 = $_GET['numero1'];
        $op = $_GET['op'];
        $nro2 = $_GET['numero2'];
        echo "Resultado " .$resultado = calcular($nro1,$op,$nro2);
    }
 ?>
</body>
</html>