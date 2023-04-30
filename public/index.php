<?php

require __DIR__ . '/../vendor/autoload.php';

use Grupo3PAW\App\Controllers\PageController;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$controller = new PageController;

if ($path == '/'){
    $controller->index();
} else if ($path == '/consultarturno'){
    $controller->consultarturno();
} else if ($path == '/solicitarturno'){
    $controller->solicitarturno();
} else if ($path == '/confirmardatos'){
    $controller->confirmardatos();
} else if ($path == '/staff'){
    $controller->staff();
} else if ($path =='/valores'){
    $controller->valores();
} else if ($path == '/noticias'){
    $controller->noticias();
} else if ($path == '/obrasocial'){
   $controller->obrasocial();
} else if ($path == '/especialidadesprofesionales'){
    $controller->especialidadesprofesionales();
} else {
    http_response_code(404);
    require __DIR__ . '/../src/not-found.view.php';
}