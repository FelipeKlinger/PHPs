<?php

require_once __DIR__ . "/./controllers/moviesController.php";
$controller = new MoviesController();

switch ($_GET['accio'] ?? null) {

    case 'afegir':
        $controller->AfegirMovies();
        break;

    default:
        $controller->llegirMovies();
        break;

}


?>