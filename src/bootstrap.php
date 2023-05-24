<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\Core\Router;
use Paw\Core\Config;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$handler = new StreamHandler(__DIR__ . "/../" . Config::getLogFile());
$handler->setLevel(Config::getLogLevel());

$log = new Logger('mvc-app');
$log->pushHandler($handler);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router;
$router->get('/', 'PageController@index');
$router->get('/consultarturno', 'ConsultasController@consultarturno');
$router->get('/solicitarturno', 'ConsultasController@solicitarturno');
$router->post('/solicitarturno', 'ConsultasController@solicitarturnoProcess');
$router->post('/confirmarturno', 'ConsultasController@confirmarturnoProcess');
$router->post('/consultarturno', 'ConsultasController@consultarturnoProcess');
$router->get('/staff', 'PageController@staff');
$router->get('/valores', 'PageController@valores');
$router->get('/noticias', 'PageController@noticias');
$router->get('/obra-social', 'PageController@obrasocial');
$router->get('/especialidades-profesionales', 'PageController@especialidadesprofesionales');
$router->get('not_found', 'ErrorController@notFound');
$router->get('internal_error', 'ErrorController@internalError');
$router->get("/sala-espera", "ConsultasController@salaEspera");
