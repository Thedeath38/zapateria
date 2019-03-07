<?php

namespace izv\data;


class FiltroPesonalizado{
    use \izv\common\Common;
    
    private $text,$marcas,$preciodesde,$preciohasta,$colores,$cubiertas,$numeros,$categorias,$destinatario;
    
    function __construct(){
        
    }
    
    function getText(){
        return $this->text;
    }
    function getMarcas(){
        return $this->marca;
    }
    function getPreciodesde(){
        return $this->preciodesde;
    }
    function getPreciohasta(){
        return $this->preciohasta;
    }
    function getColores(){
        return $this->color;
    }
    function getCubiertas(){
        return $this->cubierta;
    }
    function getNumeros(){
        return $this->numero;
    }
    function getCategorias(){
        return $this->categoria;
    }
    function getDestinatario(){
        return $this->destinatario;
    }
    
    
    function setText($text){
        $this->text = $text;
        return $this;
    }
    function setMarcas($marca){
        $this->marca = $marca;
        return $this;
    }
    function setPreciodesde($preciodesde){
        $this->preciodesde = $preciodesde;
        return $this;
    }
    function setPreciohasta($preciohasta){
        $this->preciohasta = $preciohasta;
        return $this;
    }
    function setColores($color){
        $this->color = $color;
        return $this;
    }
    function setCubiertas($cubierta){
        $this->cubierta = $cubierta;
        return $this;
    }
    function setNumeros($numero){
        $this->numero = $numero;
        return $this;
    }
    function setCategorias($categoria){
        $this->categoria = $categoria;
        return $this;
    }
    function setDestinatario($destinatario){
        $this->destinatario = $destinatario;
        return $this;
    }
    
    function isFilterActive(){
        if($this->text !== NULL ||
            $this->marcas !== NULL ||
            $this->preciodesde !== NULL ||
            $this->preciohasta !== NULL ||
            $this->colores !== NULL ||
            $this->cubiertas !== NULL ||
            $this->numeros !== NULL ||
            $this->categorias !== NULL ||
            $this->destinatario !== NULL
        ){
            return true;
        }
        return false;
    }
}