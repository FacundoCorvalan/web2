<?php
require_once './app/Controller/comments.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$commentController = new CommentController();


// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $commentController->showComments();
        break;
    case 'add':
        // obtengo el parametro de la acción
        $id = $params[1];
        $commentController->addComment($id);
        break;
    default:
        echo('404 Page not found');
        break;
}

