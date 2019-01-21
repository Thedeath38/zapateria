<?php

namespace izv\controller;

use izv\app\App;
use izv\model\Model;
use izv\tools\Session;

class Controller{
    
    private $modelo;
    private $sesion;


    //Modelo  -> 
    function __construct(Model $model){
        $this->model = $model;
        $this->sesion = new Session(App::SESSION_NAME);
        $this->getModel()->set('urlbase',App::BASE);
    }
    
    function __destruct(){
        
    }
    
    function getModel(){
        return $this->model;
    }
    
    function getSession(){
        return $this->sesion;
    }
    
    /*acciones*/
    function main(){
        $this->getModel()->set('datos','Datos que envia el metodo main');
    }
}