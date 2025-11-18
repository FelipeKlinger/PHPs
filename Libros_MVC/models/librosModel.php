<?php

require_once __DIR__ . "/../config/db.php";

class LibrosModels
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function ListarLibros()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function AgregarLibro($nombre, $autor, $paginas, $editorial) {

        $stmt = $this->pdo->prepare("INSERT INTO libros (nombre, autor, paginas, editorial) VALUES (:nombre, :autor, :paginas, :editorial)");
        $stmt->execute([
            ':nombre' => $nombre,
            ':autor'=> $autor,
            ':paginas'=> $paginas,
            ':editorial'=> $editorial
        ]);
        
    }

}



?>