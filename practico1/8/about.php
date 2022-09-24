<?php
    require 'templates/header.php';
    $devs = [
    "Facundo" => "Programador jr js",
    "Cristobal"=>"Programador Java",
    "Andres"=>"Programador Java",
    "Juan" => "Programador Senior js y Java"
];

    if(isset($_GET['developer'])){
        $desarrollador = $_GET['developer'];
        echo "Acerca de ".$desarrollador;
        
        
    }