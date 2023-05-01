<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;

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
} else if ($path == '/obra-social'){
    $controller->obrasocial();
} else if ($path == '/especialidades-profesionales'){
    $controller->especialidadesprofesionales();
} else {
    $controller =  new ErrorController;
    $controller->notFound();
}