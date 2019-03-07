<?php

namespace izv\controller;

use izv\app\App;
use izv\model\Model;
use izv\tools\Session;
use izv\tools\Reader;

class ZapatoController extends Controller {
    
    function main() {
        //1º control de sesión
        if($this->getSession()->isLogged()) {
            //$this->getModel()->set('twigFile', '_mainlogged.html');
        } else {
            //5º producir resultado
            //$this->getModel()->set('twigFile', '_main.html');
        }
        $id = Reader::read("id");
        $this->getModel()->getZapato($id);
    }
}