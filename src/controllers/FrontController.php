<?php

namespace MVCObjet\controllers;
// l'espace de nom est le nom de mon projet + le nom du répertoire ou se trouve mpon controleur
// puis commande composer dumpautolaod 
// creation d'un répertoire vendor.composer/autoload.php
// qu'on peut injecter dans le fichier d'index pour chargement automatiquement les librairies


/*sur le version précédente j'utilisais DAO directement , ici on passe par les services
use MVCObjet\models\DAOS\GenreDao;
use MVCObjet\models\entities\Genre;*/

use MVCObjet\models\services\GenreService;
use MVCObjet\models\services\ActorService;
use MVCObjet\models\services\DirectorService;
use Twig\Environment;

class FrontController
{

    private $genreService;
    private $actorService;
    private $directorService;
    private $twig;
    

    public function __construct($twig)
    {
        // instanciation du service Genre
        $this->genreService = new GenreService();
        $this->actorService = new ActorService();
        $this->directorService = new DirectorService();
        $this->twig = $twig;
    }

    public function genres()
    {
        /* 
         sur la version précédente j'utilisais DAO directement , ici on passe par les services
             avant :$genreDao = new GenreDao();
                    $genres = $genreDao->findAll();
       */
        $genres = $this->genreService->getAllGenres();
        //  include_once __DIR__.'/../views/ViewGenre.php';
        echo $this->twig->render('genre.html.twig', ["genres" => $genres]);
    }

    public function acteurs()
    {
        $acteurs = $this->actorService->getAllActor();
       // print_r($acteurs);
        echo $this->twig->render('actor.html.twig', ["acteurs" => $acteurs]);
        //  include_once __DIR__.'/../views/ViewActor.php';

    }
    public function directors()
    {
        $directors = $this->directorService->getAllDirector();
        echo $this->twig->render('director.html.twig', ["directors" => $directors]);
}
}