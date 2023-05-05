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
}