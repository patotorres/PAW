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
        $var_names = [
            'nombre_apellido',
            'email',
            'especialidad',
            'profesional',
            'fecha_turno',
        ];
        $data = [];
        foreach ($var_names as $var_name) {
            if (isset($formulario[$var_name])) {
                $data[$var_name] = htmlspecialchars($formulario[$var_name]);
            } 
        }
        $regex = '/^\d{4}-\d{2}-\d{2}$/';
        if (!preg_match($regex,$data['fecha_turno'])) {
            $data['fecha_turno']=null;
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email']=null;
        }
       parent::showView('solicitarturno.view.php',$data);
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