<?php
require_once './app/Controller/products.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$productController = new ProductController();


// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $productController->showProducts();
        break;
    case 'verProducto':
        // obtengo el parametro de la acción
        $id = $params[1];
        $productController->showProduct($id);
        break;
    default:
        echo('404 Page not found');
        break;
}

