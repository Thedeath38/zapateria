<?php

namespace izv\model;
use Doctrine\ORM\Tools\Pagination\Paginator;
use izv\managedata\Bootstrap;
use izv\tools\Pagination;
use izv\tools\Util;
use izv\data\Zapato;
use izv\tools\GestorImagenes;

class ZapatoModel extends Model {
    
    function getZapato($id){
        $resultado = null;
        $gestor = $this->getDatabase();
        $zapato = $gestor->getRepository('izv\data\Zapato')->findOneBy(array('id' => $id));
        $this->set("modelo",$zapato->getModelo());
        $this->set("precio",$zapato->getPrecio());
        $this->set("descripcion",$zapato->getDescripcion());
        $this->set("imagenes",GestorImagenes::getUrlImagenes($zapato));
        $numeros = array();
        for($i=$zapato->getNumerodesde();$i<=$zapato->getNumerohasta();$i++){
            $numeros[]=$i;
        }
        $this->set("numeros",$numeros);
        // $this->set("modelo",$zapato->getModelo());
        // $this->set("modelo",$zapato->getModelo());
    }
}