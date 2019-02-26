<?php

namespace izv\controller;

use izv\app\App;
use izv\model\Model;
use izv\tools\Session;
use izv\tools\Reader;
use izv\data\FiltroPesonalizado;

class AdminAreaController extends Controller {
    
    // function __construct(Model $model) {
    //     parent::__construct($model);
    //     $this->getModel()->set('twigFolder', 'twigtemplates/mosh');
    // }
    
    function main() {
        //1º control de sesión
        if($this->getSession()->isLogged()) {
            //$this->getModel()->set('twigFile', '_mainlogged.html');
        } else {
            //5º producir resultado
            //$this->getModel()->set('twigFile', '_main.html');
        }
    }
    
    function getZapatos(){
        $filtro = Reader::readObject("izv\data\FiltroPesonalizado");
        
        if(!$filtro->isFilterActive()){
            $filtro = NULL;
        }
    
        $pagina = Reader::read('pagina');
        if($pagina === null || !is_numeric($pagina)) {
            $pagina = 1;
        }
        $orden = Reader::read('orden');
        $zapatos = $this->getModel()->getZapatos($pagina, $orden, $filtro);
    }
    
    function getPedidos(){
    }
    
    function setZapato(){
        
    }
    
    function setPedido(){
        
    }
    
}