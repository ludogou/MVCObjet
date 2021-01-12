<?php

namespace MVCObjet\models\services;


use MVCObjet\models\DAOS\DirectorDao;
use MVCObjet\models\entities\director;



class DirectorService
{
    private $directorDao;  

    public function __construct()
    {
        $this->directorDao = new DirectorDao();
    }

    public function getAllDirector()
    {
        $directors = $this->directorDao->findAll();
        return $directors;
    }
}