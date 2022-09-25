<?php
    require_once 'lista.php';
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    // leo el parametro accion
    $action = 'verTodos'; // accion por defecto
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];  // action => about/juan
    }

    // parsea la accion Ej: about/juan --> ['about', 'juan']
    $params = explode('/', $action); // genera un arreglo

    switch ($params[0]) {
        case 'verTodos':
            getItems();
            break;
        case 'list':
            getCant($params[1]);
            break;
        default:
            echo "404 not found";
            # code...
            break;
    }
