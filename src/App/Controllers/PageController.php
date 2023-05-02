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

    public function confirmardatos($data = null)
    {
        parent::showView('confirmardatos.view.php',$data);
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
        $data = $_POST;
        $validator = new validator();
        //agregar mas validaciones
        $data = $validator->remover_specialchar($data);
        $data['fecha_turno'] = $validator->validar_fecha($data['fecha_turno']);
        $data['email']  = $validator->validar_email($data['email']);
        parent::showView('solicitarturno.view.php',$data);
    }

    public function confirmardatosProcess()
    {
        $formulario = $_POST;
        //agregar mas validaciones
        $data = $validator->remover_specialchar($data);
        $data['fecha_turno'] = $validator->validar_fecha($data['fecha_turno']);
        $data['email']  = $validator->validar_email($data['email']);
        $this->confirmardatos($formulario);
    }

    public function confirmarturnoProcess()
    {
        $formulario = $_POST;
        //agregar mas validaciones
        $data = $validator->remover_specialchar($data);
        $data['fecha_turno'] = $validator->validar_fecha($data['fecha_turno']);
        $data['email']  = $validator->validar_email($data['email']);
        $formulario['enviado']=true;
        $this->confirmardatos($formulario);
    }


    public function consultarturnoProcess()
    {
        $formulario = $_POST;
    }

}