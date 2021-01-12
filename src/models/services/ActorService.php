<?php

namespace MVCObjet\models\services;


use MVCObjet\models\DAOS\ActorDao;
use MVCObjet\models\entities\actor;

class ActorService
{
    private $actorDao;

    public function __construct()
    {
        $this->actorDao= new ActorDao();
    }

    public function getAllActor(){
        $acteurs = $this->actorDao->findAll();
        return $acteurs;
    }

}