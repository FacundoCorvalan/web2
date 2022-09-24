<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <!-- Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el tamaño de la lista generada. Por ejemplo:
 -->

    
    <ul>

        <nav>
            
            <li><a href="http://localhost/web2/practico1/4/index.php?cant=5">Ver los primeros 5</a></li>
            <li><a href="http://localhost/web2/practico1/4/index.php?cant=20">Ver los primeros 20</a></li>
            <li><a href="http://localhost/web2/practico1/4/index.php?cant=100">Ver los primeros 100</a></li>
            <li><a href="http://localhost/web2/practico1/4/index.php?verTodos">Ver todos</a></li>
        </nav>
    </ul>
    <ul>
    <?php
        $items=[];
        $topeMax=200;
        /* Creating an array with 200 items. */
        for($i = 1; $i<=200;$i++){
            array_push($items, $i);
        }
        /* Checking if the variable `cant` is set in the URL. If it is, it will loop through the array
        and print the first `cant` items. */
        if(isset($_GET['cant'])){
            for($i = 0; $i<$_GET['cant'];$i++){
                echo "<li> item $items[$i] </li>";
        }
        }else if(isset($_GET['verTodos'])){
            foreach($items as $item){
                echo "<li> item $item </li>";
            }
        }

        
    
    ?>
    </ul>
        
</body>
</html>