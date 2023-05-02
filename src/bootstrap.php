<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Paw\Core\Router;
use Monolog\Handler\StreamHandler;

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__.'/../logs/app.log', Logger::DEBUG));


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router;
$router->get('/', 'PageController@index');
$router->get('/consultarturno', 'PageController@consultarturno');
$router->get('/solicitarturno', 'PageController@solicitarturno');
$router->post('/solicitarturno', 'PageController@solicitarturnoProcess');
$router->get('/confirmardatos', 'PageController@confirmardatos');
$router->post('/confirmardatos', 'PageController@confirmardatosProcess');
$router->post('/confirmarturno', 'PageController@confirmarturnoProcess');
$router->post('/consultarturno', 'PageController@consultarturnoProcess');
$router->get('/staff', 'PageController@staff');
$router->get('/valores', 'PageController@valores');
$router->get('/noticias', 'PageController@noticias');
$router->get('/obra-social', 'PageController@obrasocial');
$router->get('/especialidades-profesionales', 'PageController@especialidadesprofesionales');
$router->get('not_found', 'ErrorController@notFound');
$router->get('internal_error', 'ErrorController@internalError');
