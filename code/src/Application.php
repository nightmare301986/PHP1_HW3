<?php

namespace Geekbrains\Application1;
use Geekbrains\Application1\Render;


class Application
{

    private const APP_NAMESPACE = 'Geekbrains\Application1\Controllers\\';

    private string $controllerName;
    private string $methodName;

    public function run(): string
    {

        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if (isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        } else {
            $controllerName = "page";
        }

        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";

        if (class_exists($this->controllerName)) {
            // пытаемся вызвать метод
            if (isset($routeArray[2]) && $routeArray[2] != '') {
                $methodName = $routeArray[2];
            } else {
                $methodName = "index";
            }

            $this->methodName = "action" . ucfirst($methodName);

            if (method_exists($this->controllerName, $this->methodName)) {
                $controllerInstance = new $this->controllerName();
                return call_user_func_array(
                    [$controllerInstance, $this->methodName],
                    []
                );
            } else {
                return $this->errorRoute();
            }
        } else {
            return $this->errorRoute();
        }
    }


    public function errorRoute()
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        echo $_SERVER["SERVER_PROTOCOL"] . " 404 Not Found";
        $render = new Render();
        return $render->renderPage('error-route.tpl');
        //$this->view->render('error/index');       
    }

    public function render(array $pageVariables)
    {

    }
}