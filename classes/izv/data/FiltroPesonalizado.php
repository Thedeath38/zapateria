<?php

namespace izv\data;


class FiltroPesonalizado{
    use \izv\common\Common;
    
    private $text,$marca,$modelo,$preciodesde,$preciohasta,$color,$cubierta,$forro,$suela,$numero,$disponible,$categoria,$destinatario,$detalles;
    
    function __construct(){
        
    }
    
    function getText(){
        return $this->text;
    }
    function getMarca(){
        return $this->marca;
    }
    function getModelo(){
        return $this->modelo;
    }
    function getPreciodesde(){
        return $this->preciodesde;
    }
    function getPreciohasta(){
        return $this->preciohasta;
    }
    function getColor(){
        return $this->color;
    }
    function getCubierta(){
        return $this->cubierta;
    }
    function getForro(){
        return $this->forro;
    }
    function getSuela(){
        return $this->suela;
    }
    function getNumero(){
        return $this->numero;
    }
    function getDisponible(){
        return $this->disponible;
    }
    function getCategoria(){
        return $this->categoria;
    }
    function getDestinatario(){
        return $this->destinatario;
    }
    function getDetalles(){
        return $this->detalles;
    }
    
    
    function setText($text){
        $this->text = $text;
        return $this;
    }
    function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }
    function setModelo($modelo){
        $this->modelo = $modelo;
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
    function setColor($color){
        $this->color = $color;
        return $this;
    }
    function setCubierta($cubierta){
        $this->cubierta = $cubierta;
        return $this;
    }
    function setForro($forro){
        $this->forro = $forro;
        return $this;
    }
    function setSuela($suela){
        $this->suela = $suela;
        return $this;
    }
    function setNumero($numero){
        $this->numero = $numero;
        return $this;
    }
    function setDisponible($disponible){
        $this->disponible = $disponible;
        return $this;
    }
    function setCategoria($categoria){
        $this->categoria = $categoria;
        return $this;
    }
    function setDestinatario($destinatario){
        $this->destinatario = $destinatario;
        return $this;
    }
    function setDetalles($detalles){
        $this->detalles = $detalles;
        return $this;
    }
    
    function isFilterActive(){
        if($this->text !== NULL ||
            $this->marca !== NULL ||
            $this->modelo !== NULL ||
            $this->preciodesde !== NULL ||
            $this->preciohasta !== NULL ||
            $this->color !== NULL ||
            $this->cubierta !== NULL ||
            $this->forro !== NULL ||
            $this->suela !== NULL ||
            $this->numero !== NULL ||
            $this->disponible !== NULL ||
            $this->categoria !== NULL ||
            $this->destinatario !== NULL ||
            $this->detalles !== NULL
        ){
            return true;
        }
        return false;
    }
}