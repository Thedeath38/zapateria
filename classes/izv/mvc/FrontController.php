<?php

namespace izv\mvc;

class FrontController{
    private $model, $view, $controller,$accion;
    
    function __construct($ruta, $accion){
        $router = new Router($ruta);
        $route = $router->getRoute();
        $this->accion = $accion;
        
        $model = $route->getModel();
        $this->model = new $model();
        $controller = $route->getController();
        $this->controller = new $controller($this->model);
        $view = $route->getView();
        $this->view = new $view($this->model);
    }
    
    function doAction(){
        $accion = "main";
        if(method_exists($this->controller,$this->accion)){
            $accion = $this->accion;
        }
        $this->controller->$accion();
    }
    
    function render(){
        return $this->view->render($this->accion);
    }
}