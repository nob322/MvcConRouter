<?php
//require_once 'router/Router.php';

// Crear una instancia del enrutador
//$router = new Router();

// Obtener la URI actual (removiendo el prefijo del proyecto si es necesario)
//$uri = str_replace('/mvc-exampleConRouter', '', $_SERVER['REQUEST_URI']);

// Pasar la URI al enrutador para que procese la solicitud
//$router->route($uri);





// index.php
require_once 'router/Router.php';
$router = new Router();
// Capturar la URI sin el directorio base
$uri = str_replace('/mvc-exampleConRouter/', '', $_SERVER['REQUEST_URI']);
$router->route($uri);
?>
