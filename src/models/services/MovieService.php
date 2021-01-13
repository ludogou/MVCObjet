<?php
namespace MVCObjet\models\services;

use MVCObjet\models\DAOS\ActorDao;
use MVCObjet\models\DAOS\DirectorDao;
use MVCObjet\models\DAOS\GenreDao;
use MVCObjet\models\DAOS\MovieDao;

use MVCObjet\models\entities\actor;
use MVCObjet\models\entities\director;
use MVCObjet\models\entities\genre;
use MVCObjet\models\entities\movie;

class MovieService
{
    private $movieDao;
    private $actorDao;
    private $genreDao;
    private $directorDao;

    public function __construct()
    {
        $this->movieDao = new MovieDao();
        $this->actorDao = new ActorDao();
        $this->genreDao = new GenreDao();
        $this->directorDao = new DirectorDao();

    }
    public function getById($id){
        $movie = $this->movieDao->findById($id);
       //

    $genre = $this->genreDao->findByMovie($id);
    $movie->setGenre($genre);

    $director = $this->directorDao->findByMovie($id);
    $movie->setDirector($director);
   return $movie;
    }

}