<?php

namespace izv\controller;

use izv\app\App;
use izv\model\Model;
use izv\tools\Session;
use izv\tools\Reader;
use izv\data\FiltroPesonalizado;

class AjaxController extends Controller {
    
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
    
    function dochecknick(){
        $alias = Reader::read('alias');
        $result = $this->getModel()->aliasAvailable($alias);
        if($result === 1 && trim($alias) !== ''){
            $result = true;
        }else{
            $result = false;
        }
        $this->getModel()->set('aliasAvaible',$result);
    }
    
    function docheckmail(){
        $result = false;
        $correo = Reader::read('correo');
        if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $result = $this->getModel()->correoAvailable($correo);
            if($result === 1 && trim($correo) !== ''){
                $result = true;
            }else{
                $result = false;
            }
        }
        $this->getModel()->set('correoAvailable',$result);
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
    
    function getCategorias(){
        $this->getModel()->getCategorias();
    }
    
    /*color - cubierta - marca - numero - texto*/
    function getColores(){
        $this->getModel()->getColores();
    }
    
    function getMateriales(){
        $this->getModel()->getMateriales();
    }
    
    function getMarcas(){
        $this->getModel()->getMarcas();
    }
    
    function getNumeros(){
        $this->getModel()->getNumeros();
    }
    
    
    function test(){
        var_dump(Reader::readArray('hola'));
        exit;
    }
    
}
    
    