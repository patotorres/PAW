<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Paw\Core\Router;
use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log',Logger::DEBUG));


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router;
$router->loadRoutes('/','PageController@index');
$router->loadRoutes('/consultarturno','PageController@consultarturno');
$router->loadRoutes('/solicitarturno','PageController@solicitarturno');
$router->loadRoutes('/confirmardatos','PageController@confirmardatos');
$router->loadRoutes('/staff','PageController@staff');
$router->loadRoutes('/valores','PageController@valores');
$router->loadRoutes('/noticias','PageController@noticias');
$router->loadRoutes('/obra-social','PageController@obrasocial');
$router->loadRoutes('/especialidades-profesionales','PageController@especialidadesprofesionales');
$router->loadRoutes('not_found','ErrorController@notFound');
$router->loadRoutes('internal_error','ErrorController@internalError');
