<?php
require_once 'pagos.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo
    
switch ($params[0]) {
    case 'home':
        showPayments();
        break;
    case 'insertHard':
        insertHardcode();
        break;
    case 'add':
        insertPaymentByForm();
        break;
    default:
        echo "404 not found";
        # code...
        break;
}