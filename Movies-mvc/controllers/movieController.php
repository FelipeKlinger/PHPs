<?php
require_once __DIR__ . "/../models/movieModel.php";
class MoviesController
{
    private $model;
    public function __construct()
    {
        $this->model = new MoviesModel();
    }


    public function llistaMovies()
    {
        $listaMovies = $this->model->llistaMovies();
        require __DIR__ . "/../views/listaMovies.php";
    }

    public function AgregarMovies()
    {
        $messege = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $titol = trim($_POST['titol'] ?? '');
            $director = trim($_POST['director'] ?? '');
            $any = (int) trim($_POST['any'] ?? '');
            $puntuacio = (int) trim($_POST['puntuacio'] ?? '');

            if ($titol == '' || $director == '' || $any == '' || $puntuacio == '') {
                $messege = 'Ningun campo debe estar vacio';
            } elseif ($any < 1900 || $any > 2100) {
                $messege = 'El año  debe estar dentro del 1900 y 2100';
            } elseif ($puntuacio < 1 || $puntuacio > 10) {
                $messege = " La puntuación debe estar entre 1 y 10, error: puntuación : $_POST[puntuacio]";
            } else {
                $this->model->agregarMovies($titol, $director, $any, $puntuacio);
                header('Location: index.php');
                exit(); // nos redirecciona y salimos del script
            }
        }
        require __DIR__ . "/../views/AgregarMovie.php";
    }




}


?>