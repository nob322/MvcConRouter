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






// 5. Estructura del Proyecto en el Hosting
// Tu proyecto debería tener esta estructura:
// / (raíz del hosting)
// │
// ├── controllers/
// │   ├── HomeController.php
// │   ├── AboutController.php
// │   ├── ContactController.php
// │   └── UserController.php
// ├── views/
// │   ├── home_view.php
// │   ├── about_view.php
// │   ├── contact_view.php
// │   ├── user_view.php
// │   └── errors/
// │       ├── 404.php
// │       └── 500.php
// ├── router/
// │   └── Router.php
// ├── index.php
// └── .htaccess
?>