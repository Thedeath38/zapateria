<?php

namespace izv\mvc;

class Router{
    private $rutas,$ruta;
    
    function __construct($ruta){
        $this->rutas = array(
            "index" => new Route("UserModel","TiendaView","UserController"),
            "ajax" => new Route("AjaxModel","AjaxView","AjaxController"),
            "adminpanel" => new Route("UserModel","AdminPanelView","UserController"),
            "zapato" => new Route("ZapatoModel","ZapatoView","ZapatoController")
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