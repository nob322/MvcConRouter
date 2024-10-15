<?php
// router/Router.php

//class Router {
  //  public function route($uri) {
        // Limpiar la URI de espacios y parámetros adicionales
    //    $uri = trim($uri, '/');
    //    $uri = strtok($uri, '?');
        
    //    switch ($uri) {
    //        case '':
    //        case 'welcome':
    //            require __DIR__ . '/../controllers/WelcomeController';
    //            $controller = new WelcomeController();
    //            $controller->index();
    //            break;

    //        case 'about':
    //            require_once __DIR__ . '/../controllers/AboutController.php';
    //            $controller = new AboutController();
    //            $controller->index();
    //            break;

    //        case 'contact':
    //            require_once __DIR__ . '/../controllers/ContactController.php';
    //            $controller = new ContactController();
    //            $controller->index();
     //           break;

    //        case 'user':
    //            require_once __DIR__ . '/../controllers/UserController.php';
    //            $controller = new UserController();
    //            $controller->index();
    //            break; 

    //        default:
    //            http_response_code(404);
    //            require_once __DIR__ . '/../views/404_view.php';
    //            break;
    //    }
   // }
//}







// router/Router.php

//class Router {
//    private $routes = [];

//    public function __construct() {
        // Definimos las rutas
//        $this->routes = [
//            '' => 'controllers/WelcomeController.php',
//            'mvc-exampleConRouter' => 'controllers/WelcomeController.php',
 //           'about' => 'controllers/AboutController.php',
 //           'contact' => 'controllers/ContactController.php',
//            'user' => 'controllers/UserController.php',
//        ];
 //   }

 //   public function route($uri) {
        // Limpiar la URI de espacios y quitar la consulta
 //       $uri = trim($uri, '/'); // Eliminar los espacios y las barras al inicio y al final
 //       $uri = strtok($uri, '?'); // Eliminar cualquier parámetro de consulta
    
        // Depuración: Imprimir la URI para ver qué se recibe
        // echo "URI: " . $uri . "<br>"; 
    
        // Verificar si la ruta existe en las definidas
 //       if (array_key_exists($uri, $this->routes)) {
            // Aquí se corrige la instanciación del controlador
 //           require __DIR__ . '/../' . $this->routes[$uri];
    
 //           $controllerName = basename($this->routes[$uri], '.php'); // Obtiene el nombre sin '.php'
 //           $controllerClass = ucfirst($controllerName); // Capitaliza el nombre para la clase
    
            // Verifica si la clase existe antes de instanciar
  //          if (class_exists($controllerClass)) {
  //              $controller = new $controllerClass(); // Instanciar el controlador
  //              $controller->index(); // Llamar al método 'index'
 //           } else {
                // Si la clase no existe, devuelve un error 500
 //               $this->handleError(500);
 //           }
 //       } else {
            // Si no existe, devuelve un error 404
 //           $this->handleError(404);
 //       }
 //   }
    

 //   private function handleError($errorCode) {
 //       http_response_code($errorCode);
  //      switch ($errorCode) {
  //          case 404:
 //               require __DIR__ . '/../views/errors/404.php';
  //              break;
  //          case 500:
  //              require __DIR__ . '/../views/errors/500.php';
   //             break;
   //         default:
   //             echo "<h1>Error $errorCode: An error occurred</h1>";
  //              break;
 //       }
 //   }
//}







































//enruta ok
//class Router {
//    public function route($uri) {
        // Elimina los espacios y barras adicionales
//        $uri = trim($uri, '/');
//        $uri = strtok($uri, '?');  // Ignorar parámetros GET

//        switch ($uri) {
//            case '':
//            case 'mvc-exampleConRouter':
//                require 'controllers/WelcomeController.php';
//                $controller = new WelcomeController();
//                break;

//            case 'about':
//                require 'controllers/AboutController.php';
//                $controller = new AboutController();
//                break;

//            case 'contact':
//                require 'controllers/ContactController.php';
//                $controller = new ContactController();
//                break;

//            case 'user':
//                require 'controllers/UserController.php';
//                $controller = new UserController();
//                break;

//            default:
                // Mostrar página 404 si la ruta no coincide con ninguna definida
//                http_response_code(404);
//                require 'views/errors/404.php';
//                exit;
//        }

        // Llamar al método 'index' del controlador correspondiente
//        $controller->index();
//    }
//}



























class Router {
    public function route($uri) {
        try {
            // Eliminar espacios y barras adicionales
            $uri = trim($uri, '/');
            $uri = strtok($uri, '?'); // Ignorar parámetros GET

            switch ($uri) {
                case '':
                case 'mvc-exampleConRouter':
                    require 'controllers/WelcomeController.php';
                    $controller = new WelcomeController();
                    break;

                case 'about':
                    require 'controllers/AboutController.php';
                    $controller = new AboutController();
                    break;

                case 'contact':
                    require 'controllers/ContactController.php';
                    $controller = new ContactController();
                    break;

                case 'user':
                    require 'controllers/UserController.php';
                    $controller = new UserController();
                    break;

                default:
                    // Si la ruta no coincide, lanzar una excepción 404
                    throw new Exception("Página no encontrada", 404);
            }

            // Llamar al método 'index' del controlador correspondiente
            $controller->index();

        } catch (Exception $e) {
            // Manejar los errores en función del código
            $this->handleError($e->getCode());
        }
    }

    private function handleError($errorCode) {
        switch ($errorCode) {
            case 404:
                http_response_code(404);
                require 'views/errors/404.php';
                break;

            case 500:
                http_response_code(500);
                require 'views/errors/500.php';
                break;

            case 401:
                http_response_code(401);
                require 'views/errors/401.php';
                break;

            case 403:
                http_response_code(403);
                require 'views/errors/403.php';
                break;

            default:
                http_response_code(500); // Error desconocido -> Internal Server Error
                require 'views/errors/500.php';
                break;
        }
        exit; // Asegurar que no se ejecute más código
    }
}
?>