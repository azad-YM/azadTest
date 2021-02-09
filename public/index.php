<?php 
define('ROOT', dirname(__DIR__));


require ROOT .'/App/Autoloader.php';
App\Autoloader::callAutoloader();

$router = new App\Router\Router($_GET['url']);
$router->get('post/', function(){echo "hello word";});
$router->get('post/:id', function($id){echo "Afficher l'article $id";});
$router->get('post/:slug- :id', function($slug, $id){echo "Afficher l'article $id : $slug";})->with('id', '[0-9]+')->with("slug", "[0-9\-a-z]");

$router->post('post/:id', function($id){echo "Afficher l'article $id";});

$router->run();

