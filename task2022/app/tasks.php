<?php   

    function showTask(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_task2021;charset=utf8', 'root', '');
        $query = $db->prepare( "select * from tarea");
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
        var_dump($tasks);

        
    }