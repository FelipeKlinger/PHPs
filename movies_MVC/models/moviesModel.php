<?php
require_once __DIR__ . "/../config/db.php";
class MoviesModel
{

    private $pdo;

    public function __construct(){
        global $pdo;
        $this->pdo = $pdo;
    }

    public function llegirMovies()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM movies');
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

?>