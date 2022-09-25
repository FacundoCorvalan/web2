<?php
require_once './dbMaterias.php';


function showSubjects()
{
    include './templates/header.php';
    $subjects = getSubjects();
    echo '<table class="table table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Materia</th>';
    echo '<th scope="col">Profesor</th>';

    echo '</tr>';

    echo '</thead>';

    foreach ($subjects as $subject) {
        echo "<tr>";
        echo '<td>';
        echo $subject->nombre;
        echo '</td>';
        echo '<td>';
        echo $subject->nombre_profesor;
        echo '</td>';


        echo "</tr>";

        include './templates/footer.php';
    }
}

function insertSubjectByForm()
{

    $materia = $_GET['subject_name'];
    $profesor = $_GET['teacher_name'];

    $subjects = getSubjects();
    foreach ($subjects as $subject) {
        $materia_anterior = $subject->nombre;
    }

    if ($materia != $materia_anterior) {
        $id = insertSubject($materia, $profesor);
        header("Location: " . BASE_URL);
    } else {
        echo 'no se puede ingresar la misma materia';
    }
}

function filterSubject()
{
    include './templates/header.php';

    $subject = $_GET['search_subject'];
    $materias = searchSubject($subject);
    $todasMaterias = getSubjects();
    var_dump($materias);
    foreach($todasMaterias as $unaMateria){
        $materiaBD = $unaMateria->nombre;
    }

    if($materiaBD == $materias){
        echo 'Esta materia no existe';
    }else{

        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Materia</th>';
        echo '<th scope="col">Profesor</th>';
    
        echo '</tr>';
    
        echo '</thead>';
    
        foreach ($materias as $materia) {
            echo "<tr>";
            echo '<td>';
            echo $materia->nombre;
            echo '</td>';
            echo '<td>';
            echo $materia->nombre_profesor;
            echo '</td>';
    
    
            echo "</tr>";
        }
    }



    include './templates/footer.php';
}
