<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class PageController
{

    public function actionIndex()
    {
        $render = new Render();
        date_default_timezone_set('Asia/Barnaul');
        $daten = date("d.m.y  H:i", time());
        return $render->renderPage('page-index.tpl', ['title' => 'Главная страница', 'date' => $daten]);
    }
}