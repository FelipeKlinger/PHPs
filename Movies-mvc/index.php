<?php
require_once __DIR__ . "/controllers/movieController.php";

$controller = new MoviesController();


switch ($_GET['request'] ?? 'listaMovies') {

    case 'agregar':
        $controller->AgregarMovies();
        break;

    default:
        $controller->llistaMovies();
        break;

}


?>