<?php

namespace Grupo3PAW\App\Controllers;

class PageController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ ."/../../";
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
    public function index()
    {
        $titulo = htmlspecialchars($_GET["nombre"]??"PAW");
        require $this->viewDir . 'index.view.php';
    }
    public function consultarturno()
    {
        $titulo = "Consultar turno";
        $main = "Página para consultar el turno";
        require $this->viewDir . 'consultarturno.view.php';
    }
    public function solicitarturno()
    {
        $titulo = "Solicitar turno";
        $main = "Página para solicitar el turno";
        require $this->viewDir . 'solicitarturno.view.php';
    }
    public function confirmardatos()
    {
        $titulo = "Confirmar datos";
        $main = "Página para confirmar datos";
        require $this->viewDir . 'confirmardatos.view.php';
    }
    public function staff()
    {
        $titulo = "Staff";
        $main = "Página para ver al Staff";
        require $this->viewDir . 'staff.view.php';
    }
    public function valores()
    {
        $titulo = "Valores";
        $main = "Página para ver los valores";
        require $this->viewDir . 'valores.view.php';
    }
    public function noticias()
    {
        $titulo = "Noticias";
        $main = "Página para ver las noticias";
        require $this->viewDir . 'noticias.view.php';
    }
    public function obrasocial()
    {
        $titulo = "Obra Social";
        $main = "Página para ver las obras sociales";
        require $this->viewDir . 'obra-social.view.php';
    }
    public function especialidadesprofesionales()
    {
        $titulo = "Especialidades y Profesionales";
        $main = "Página para ver las especialidades y los profesionales";
        require $this->viewDir . 'especialidades-profesionales.view.php';
    }

}