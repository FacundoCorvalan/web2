<?php
    require 'templates/header.php';
    require_once 'about.php';

    //about.php?developer=juan

    if(isset($_GET['developer'])){
        $desarrollador = $_GET['developer'];
        echo "Acerca de ";
        
    }