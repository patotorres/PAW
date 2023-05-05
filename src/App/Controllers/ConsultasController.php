<?php

namespace Paw\App\Controllers;
use Paw\Core\Validator;

class ConsultasController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function consultarturno()
    {
        parent::showView('consultarturno.view.php');
    }

    public function solicitarturno()
    {
        parent::showView('solicitarturno.view.php', $_GET);
    }

    public function confirmardatos()
    {
        parent::showView('confirmardatos.view.php');
    }

    public function solicitarturnoProcess()
    {
        $data = $_POST;
        $valido = true;

        //agregar mas validaciones
        $data = Validator::remover_specialchar($data);

        $errors = Validator::validar_fecha($data['fecha_turno'], true);
        if(count($errors) > 0) {
            $data['fecha_turno_invalido'] = $errors;
            $valido = false;
        }

        $errors = Validator::validar_email($data['email']);
        if(count($errors) > 0) {
            $data['email_invalido'] = $errors;
            $valido = false;
        }

        if(isset($_FILES['estudio']) && 
            isset($_FILES['estudio']['size']) && 
            ($_FILES['estudio']['size'] > 0)) {

            $errors = Validator::validar_imagen($_FILES['estudio']);
            if(count($errors) > 0) {
                $data['estudio_invalido'] = $errors;
                $valido = false;
            }
        }

        if($valido) {
            parent::showView('confirmardatos.view.php', $data);
        } else {
            parent::showView('solicitarturno.view.php', $data);
        }
    }

    public function confirmarturnoProcess()
    {
        //Acá usamos los datos de la sesión para no revalidar
        //Hay que guardar en la db y mostrar pantalla de éxito

        parent::showView('confirmardatos.view.php', [ 'enviado' => true ]);      
    }

    public function consultarturnoProcess()
    {
        $formulario = $_POST;
    }
}