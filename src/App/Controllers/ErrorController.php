<?php

namespace Paw\App\Controllers;

class ErrorController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ ."/../Views/";
        $this->menu=[
            [
                "href"=>"/",
                "name"=>"Index",
            ],
            [
                "href"=>"/consultarturno",
                "name"=>"Consultar Turno",
            ],
            [
                "href"=>"/solicitarturno",
                "name"=>"Solicitar Turno",
            ],
            [
                "href"=>"/confirmardatos",
                "name"=>"Confirmar Datos",
            ],
            [
                "href"=>"/staff",
                "name"=>"Staff",
            ],
            [
                "href"=>"/valores",
                "name"=>"Valores",
            ],
            [
                "href"=>"/noticias",
                "name"=>"Noticias",
            ],
            [
                "href"=>"/obrasocial",
                "name"=>"Obra social",
            ],
            [
                "href"=>"/especialidadesprofesionales",
                "name"=>"Especialidades y profesionales",
            ]
        ];
    }
    public function notFound()
    {
        http_response_code(404);
        require $this->viewsDir . 'not-found.view.php';
    }

    public function internalError()
    {
        http_response_code(500);
        require $this->viewsDir . 'internal-error.view.php';
    }
}