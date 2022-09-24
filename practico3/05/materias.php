<?php
require_once './dbMaterias.php';
function showSubjects(){
    include './templates/header.php';
    $subjects = getSubjects();
    echo '<table class="table table-bordered">';
    echo '<thead>';
        echo '<tr>';
            echo '<th scope="col">Materia</th>';
            echo '<th scope="col">Profesor</th>';

        echo '</tr>';

    echo '</thead>';

    foreach($subjects as $subject){
        echo "<tr>";
            echo '<td>';
                echo $subject->nombre;
            echo '</td>';
            echo '<td>';
                echo $subject->nombre_profesor;
            echo '</td>';


        echo "</tr>";

    }
    //falta insertar materias
    
    include './templates/footer.php';
}