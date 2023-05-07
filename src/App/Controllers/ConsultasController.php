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

        $data['nombre_apellido'] = Validator::limpiar_espacios($data['nombre_apellido']);
        $errors = Validator::validar_nombre_apellido($data['nombre_apellido']);
        if(count($errors) > 0) {
            $data['nombre_apellido_invalido'] = $errors;
            $valido = false;
        }

        $errors = Validator::validar_dni($data['dni']);
        if(count($errors) > 0) {
            $data['dni_invalido'] = $errors;
            $valido = false;
        }

        $errors = Validator::validar_telefono($data['telefono']);
        if(count($errors) > 0) {
            $data['telefono_invalido'] = $errors;
            $valido = false;
        }

        $errors = Validator::validar_fecha($data['fecha_nacimiento'], false, true);
        if(count($errors) > 0) {
            $data['fecha_nacimiento_invalido'] = $errors;
            $valido = false;
        }

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

        $errors = Validator::validar_hora($data['hora_turno']);
        if(count($errors) > 0) {
            $data['hora_turno_invalido'] = $errors;
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
        //Acá usamos los datos de la sesión para no revalidar
        //Hay que guardar en la db y mostrar pantalla de éxito

        parent::showView('confirmardatos.view.php', [ 'enviado' => true ]);      
    }

    public function consultarturnoProcess()
    {
        $formulario = $_POST;
    }
}