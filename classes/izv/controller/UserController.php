<?php

namespace izv\controller;

use izv\app\App;
use izv\model\Model;
use izv\tools\Session;
use izv\tools\Reader;

class UserController extends Controller {
    
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
    
    function doregister(){
        //1º control de sesión
        if($this->getSession()->isLogged()) {
            //5º producir resultado -> redirección
            header('Location: ' . App::BASE . 'index?op=register&r=session');
            exit();
        }

        //2º lectura de datos
        $usuario = Reader::readObject('izv\data\Usuario');
        $clave2 = Reader::read('clave2');
        $correo2 = Reader::read('correo2');
        $policy = Reader::read('privacy_policy');

        //3º validación de datos
        if($usuario->getClave() !== $clave2 ||
            mb_strlen($usuario->getClave()) < 4) {
            //5º producir resultado -> redirección
            header('Location: ' . App::BASE . '?op=register&r=password');
            exit();
        }
        if (!filter_var($usuario->getCorreo(), FILTER_VALIDATE_EMAIL)) {
            //5º producir resultado -> redirección
            header('Location: ' . App::BASE . '?op=register&r=email');
            exit();
        }
        
        /*Verificacion 2 correos son iguales*/
        if($usuario->getCorreo() !== $correo2) {
            header('Location: ' . App::BASE . '?op=registro&resultado=0');
            exit();
        }

        //4º usar el modelo
        $usuario->setActivo(0);
        $usuario->setAdministrador(0);
        
        
        $usuario->setClave(Util::encriptar($usuario->getClave()));
        $r = 0;
        if(!isset($policy)){
            $r = $this->getModel()->register($usuario);
        }

        if($r > 0) {
            $usuario->setId($r);
            $resultado2 = Mail::sendActivation($usuario);
        }
        //5º producir resultado -> redirección
        header('Location: ' . App::BASE . '?op=register&r=' . $r);
        exit();
    }
    
    function dologin() {
        //1º control de sesión
        if($this->getSession()->isLogged()) {
            //5º producir resultado -> redirección
            header('Location: ' . App::BASE);
            exit();
        }

        //2º lectura de datos
        $aliascorreo = Reader::read('aliascorreo');
        $usuario = Reader::readObject('izv\data\Usuario');
        if (!filter_var($aliascorreo, FILTER_VALIDATE_EMAIL)) {
            $usuario->setAlias($aliascorreo);
        }else{
            $usuario->setCorreo($aliascorreo);
        }
        
        //4º usar el modelo
        $r = $this->getModel()->login($usuario);
        if($r !== null) {
            $this->getSession()->login($r);
            $r = 1;
        } else {
            $r = 0;
        }

        //5º producir resultado -> redirección
        header('Location: ' . App::BASE . '?op=login&r=' . $r);
        exit();
    }
    
    function dologout() {
        $this->getSession()->logout();
        header('Location: ' . App::BASE);
        exit();
    }
}