<?php

require_once __DIR__ . "/../config/db.php";
class MoviesModel
{
    private $pdo;
    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }


    public function llistaMovies()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies');
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function agregarMovies($titol, $director, $any, $puntiacio) {

        


    }


}

?>