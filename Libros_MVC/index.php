<?php
require_once __DIR__ . "/./controllers/librosControllers.php";
$controller = new librosControllers();

switch ($_GET['request'] ?? null) {

    case 'Agregar':
        $controller->AgregarLibro(); 
        break;

    default:
    $controller->ListarLibros();
        break;
}




?>