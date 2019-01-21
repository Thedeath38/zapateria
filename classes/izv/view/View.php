<?php

namespace izv\view;
use izv\tools\Util;
use izv\model\Model;

class View{
    
    private $model;
    
    //Vista  -> 
    function __construct(Model $model){
        $this->model = $model;
    }
    
    function __destruct(){
        
    }
    
    function getModel(){
        return $this->model;
    }
    
    function render($accion){
        $datos = $this->getModel()->getViewData();
        return Util::varDump($datos);
    }
}