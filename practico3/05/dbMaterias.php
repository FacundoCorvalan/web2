<?php
function getDB() {
    $db = new PDO('mysql:host=localhost;'.'dbname=practica;charset=utf8', 'root', '');
    return $db;
}

function getSubjects(){
    // 1. abro conexión a la DB
    $db = getDB();

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $db->prepare("SELECT * FROM materias");
    $query->execute();

    // 3. obtengo los resultados
    $subjects = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $subjects;
}

function insertSubject($subject_name,$teacher_name){
    $db = getDB();
    $query = $db->prepare("INSERT INTO materias (nombre, nombre_profesor) VALUES (?, ?)");
    
    $query->execute([$subject_name, $teacher_name]);
    return $db -> lastInsertId();
}


//SELECT * FROM materias WHERE nombre LIKE '%or%'
function searchSubject($subject_name){
    $db = getDB();
    $query = $db->prepare("SELECT * FROM materias WHERE nombre LIKE  ? ");
    //$query->bindValue(1, "%fy", PDO::PARAM_STR);
    $query->execute([$subject_name]); 
    $subjects = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    return $subjects;

}