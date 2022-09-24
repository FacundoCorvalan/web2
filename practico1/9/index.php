<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <!-- Modifique el ejercicio 3 para agregar elementos avanzados al formulario. Investigue cómo se envían y reciben este tipo de datos:
Género (radiobutton - una sola opción)
País (select - una sola opción) 
Intereses: (checkbox - selección múltiple) Investigue el uso de array en los inputs.
 -->
    <form action="index.php" method="get">
        <fieldset>
            <legend>Ingrese sus datos</legend>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                <input type="text" name="apellido" id="apellido" placeholder="Apellido">
                <input type="number" name="edad" id="edad" placeholder="Edad">


            <select name="pais" id="">
                <option selected disabled>Seleccione un pais</option>
                <option value="argentina">Argentina</option>
                <option value="brasil">Brasil</option>
                <option value="chile">Chile</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Seleccione su genero</legend>
            <input type="radio" name="genero" id="" value="Femenino">Femenino
            <input type="radio" name="genero" id="" value="Masculino">Masculino

        </fieldset>

        
        <fieldset>
            <legend>Seleccione sus intereses</legend>
            <input type="checkbox" name="intereses[]" id="interes1" value="musica">
            <label for="interes1">Musica</label>
            <input type="checkbox" name="intereses[]" id="interes2 " value="peliculas">
            <label for="interes2">Peliculas</label>
            <input type="checkbox" name="intereses[]" id="interes3" value="libros">
            <label for="interes3">Libros</label>
        </fieldset>

        <input type="submit" value="Enviar">


    </form>

    <?php


    if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['edad'])&& !empty($_GET['pais']) && !empty($_GET['genero'])
            && !empty($_GET['intereses'])&& is_array($_GET['intereses'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $pais = $_GET['pais'];
        $genero = $_GET['genero'];

    ?>
        <h2>Nombre: <?php echo $nombre ?></h2>
        <h2>Apellido: <?php echo $apellido ?></h2>
        <h2>Edad: <?php echo $edad ?></h2>
        <h2>Pais: <?php echo  $pais?></h2>
        <h2>Genero: <?php echo $genero ?></h2>
        <h2>Intereses</h2>
        <ul>
            <?php
                foreach($_GET['intereses'] as $interes){
                    echo "<li>";
                    echo $interes;
                    echo "</li>";
                }
            ?>
        </ul>
    <?php
    } else {
        echo "No hay valores en los inputs";
    }
    ?>
</body>

</html>