<?php
require_once "vendor/autoload.php";

use MVCObjet\controllers\FrontController;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__.'/src/views');
$twig = new Environment($loader,['cache'=>false]);

// voir les espaces de noms
// https://openclassrooms.com/fr/courses/1217456-les-espaces-de-noms-en-php
// use permet de créer un alias 
// ici c'est comme si on disait :
// use MvcObjet\Controllers\FrontController as FrontController


$fc = new FrontController($twig);
/*$fc->index();*/


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
if (ltrim($base, '/')) {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}
$klein = new \Klein\Klein();
$klein->respond('GET', '/hello-world', function() {
    return 'hello world!!';
});
$klein->respond('GET', '/genres', function() use($fc) {
    // use est une manière d'effectuer une closure en PHP 
    $fc->genres();
});
$klein->respond('GET', '/acteurs', function() use($fc) {
    $fc->acteurs();
});
$klein->respond('GET', '/directors', function() use($fc) {
    $fc->directors();
});
$klein->dispatch();