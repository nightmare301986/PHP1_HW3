<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class ErrorRoute
{
public function errorRoute()
    {
        $render = new Render();
        return $render->renderPage = ('error-route.tpl');
        //$this->view->render('error/index');       
    }
}