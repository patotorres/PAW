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
        parent::showView('solicitarturno.view.php', $_GET);
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
        $data = $_POST;
        $valido = true;

        //agregar mas validaciones
        $data = Validator::remover_specialchar($data);

        try {
            Validator::validar_fecha($data['fecha_turno'], true);
        } catch (\Exception $e) {
            $data['fecha_turno_invalido'] = $e->getMessage();
            $valido = false;
        }

        if(!Validator::validar_email($data['email'])) {
            $data['email_invalido'] = 'Correo inválido';
            $valido = false;
        }

        if(isset($_FILES['estudio']) && 
            isset($_FILES['estudio']['size']) && 
            ($_FILES['estudio']['size'] > 0)) {

            try {
                Validator::validar_imagen($_FILES['estudio']);
            } catch (\Exception $e) {
                $data['estudio_invalido'] = $e->getMessage();
                $valido = false;
            }

            $data['estudio'] = $_FILES['estudio']['name'];
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