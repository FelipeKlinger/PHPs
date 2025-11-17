<?php

require_once __DIR__ . "../models/moviesModel.php";

class MoviesController
{
    private $model;
    public function __construct()
    {
        $this->model = new MoviesModel();
    }

    public function llegirMovies(){

        $LlistaMovies = $this->model->llegirMovies();
        require __DIR__ .'../views/llegir.html';
        header('location: index.php') ;
        exit();

    } 

}


?>