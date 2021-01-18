<?php
namespace MVCObjet\controllers;

use MVCObjet\models\services\MovieService;

class BackController
{
   private $movieService;
   private $twig;
   
   public function __construct($twig)
   {
       $this->movieService = new MovieService();
       $this->twig = $twig;
   }

   public function addMovie($movieData){
     $addMovie =  $this->movieService->create($movieData);
       echo $this->twig->render('formulaire.html.twig', ['movie'=>$addMovie]);
   }
}