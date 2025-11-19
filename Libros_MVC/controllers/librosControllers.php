<?php

require_once __DIR__ . "/../models/librosModel.php";
class librosControllers
{

    private $model;

    public function __construct()
    {
        $this->model = new LibrosModels();
    }

    public function ListarLibros()
    {
        $CollectLibros = $this->model->ListarLibros();
        require __DIR__ . "/../views/Listar.php";
    }

    public function AgregarLibro()
    {
        $messege = "";
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $nombre = trim($_POST['nombre'] ?? "");
            $autor = trim($_POST['autor']) ?? "";
            $paginas = (int) trim($_POST['paginas'] ?? "");
            $editorial = trim($_POST['autor']) ?? "";

            if ($nombre == "" || $autor == "" || $paginas == "" || $editorial == "") {
                $messege = "Ningun campo debe estar vacio";
            } else {
                $this->model->AgregarLibro($nombre, $autor, $paginas, $editorial);
                $messege = "";
                header("Location: index.php"); 
                exit();
            }
        }
        require __DIR__ . "/../views/Agregar.php";
    }



}


?>