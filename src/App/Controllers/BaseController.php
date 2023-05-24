<?php

namespace Paw\App\Controllers;

class BaseController
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . "/../Views/";
    }

    protected function showView(String $view, array $data = null)
    {
        if (isset($data)) {
            extract($data);
        }

        require $this->viewsDir . $view;
    }

    protected function json($data)
    {
        echo json_encode($data);
    }
}