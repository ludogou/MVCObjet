<?php
require_once "vendor/autoload.php";
use MVCObjet\controllers\FrontController;

// voir les espaces de noms
// https://openclassrooms.com/fr/courses/1217456-les-espaces-de-noms-en-php
// use permet de créer un alias 
// ici c'est comme si on disait :
// use MvcObjet\Controllers\FrontController as FrontController


/*$fc = new FrontController();
$fc->index();*/


// pour klein redirection .htaccess
/*-------------------------------------
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule . index.php [L] 
--------------------------------------*/


$base  = dirname($_SERVER['PHP_SELF']);
// PHP_SELF -> nom du chemin + php de la racine (ex: /afpa/mvcobjet/index.php)
// dirname = /afpa/mvcobjet 
// REQUEST_URI = /afpa/mvcobjet/hello-world
//  apres trim REQUEST_URI => afpa/mvcobjet (utilisé par dispatch de klein)
if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}
$router = new \Klein\Klein();
$router->respond ('GET','/hello-world',function(){
    return 'hello world!!';
    
});
$router->dispatch();