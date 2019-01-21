<?php

namespace izv\mvc;

class Router{
    private $rutas,$ruta;
    
    function __construct($ruta){
        $this->rutas = array(
            "index" => new Route("Model","View","Controller")
        );
        $this->ruta = $ruta;
    }
    
    function getRoute(){
        $ruta = $this->rutas["index"];
        if(isset($this->rutas[$this->ruta])){
            $ruta = $this->rutas[$this->ruta];
        }
        return $ruta;
    }
}