<?php

namespace Paw\App\Controllers;

class PageController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        parent::showView('index.view.php');
    }

    public function consultarturno()
    {
        parent::showView('consultarturno.view.php');
    }

    public function solicitarturno()
    {
        parent::showView('solicitarturno.view.php');
    }

    public function confirmardatos()
    {
        parent::showView('confirmardatos.view.php');
    }

    public function staff()
    {
        parent::showView('staff.view.php');
    }

    public function valores()
    {
        parent::showView('valores.view.php');
    }

    public function noticias()
    {
        parent::showView('noticias.view.php');
    }

    public function obrasocial()
    {
        parent::showView('obra-social.view.php');
    }

    public function especialidadesprofesionales()
    {
        parent::showView('especialidades-profesionales.view.php');
    }

    public function solicitarturnoProcess()
    {
        $formulario = $_POST;
        //hay que hacer algo con estos datos
        $this->solicitarturno();
    }

    public function confirmardatosProcess()
    {
        $formulario = $_POST;
        //hay que hacer algo con estos datos
        $this->confirmardatos();
    }

    public function confirmarturnoProcess()
    {
        $formulario = $_POST;
    }

    public function consultarturnoProcess()
    {
        $formulario = $_POST;
    }

}