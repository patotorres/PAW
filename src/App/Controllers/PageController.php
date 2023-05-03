<?php

namespace Paw\App\Controllers;
use Paw\Core\Validator;

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
        parent::showView('confirmardatos.view.php', $data);
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

        //agregar mas validaciones
        $data = Validator::remover_specialchar($data);
        $data['fecha_turno'] = Validator::validar_fecha($data['fecha_turno']);
        $data['email']  = Validator::validar_email($data['email']);

        parent::showView('solicitarturno.view.php', $data);
    }

    public function confirmardatosProcess()
    {
        $data = $_POST;
        $valido = true;

        //agregar mas validaciones
        $data = Validator::remover_specialchar($data);

        if (!Validator::validar_fecha($data['fecha_turno'])) {
            $data['fecha_turno_invalido'] = true;
            $valido = false;
        }

        if(!Validator::validar_email($data['email'])) {
            $data['email_invalido'] = true;
            $valido = false;
        }

        if($valido) {
            parent::showView('confirmardatos.view.php', $data);
        } else {
            parent::showView('solicitarturno.view.php', $data);
        }
        
    }

    public function confirmarturnoProcess()
    {
        $data = $_POST;

        //Acá hay que revalidar datos y mandar a la DB, mientras no tengamos sesiones esto queda comentado
        //agregar mas validaciones
        /*
        $data = Validator::remover_specialchar($data);
        $data['fecha_turno'] = Validator::validar_fecha($data['fecha_turno']);
        $data['email']  = Validator::validar_email($data['email']);
        */
        $data['enviado'] = true;
        parent::showView('confirmardatos.view.php', $data);      
    }

    public function consultarturnoProcess()
    {
        $formulario = $_POST;
    }

}