<?php

namespace MVCObjet\models\services;


use MVCObjet\models\DAOS\GenreDao;
use MVCObjet\models\entities\Genre;



class GenreService
{
    private $genreDao;  

    public function __construct()
    {
        $this->genreDao = new GenreDao();
    }

    public function getAllGenres()
    {
        $genres = $this->genreDao->findAll();
        return $genres;
    }

}