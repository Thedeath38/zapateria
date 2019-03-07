<?php

namespace izv\model;

use Doctrine\ORM\Tools\Pagination\Paginator;

use izv\data\City;
use izv\database\Database;
use izv\managedata\Bootstrap;
use izv\tools\Pagination;
use izv\data\Zapato;
use izv\tools\Util;
use izv\tools\GestorImagenes;

class AjaxModel extends Model {

    function aliasAvailable($alias) {
        $gestor = $this->getDatabase();
        $dql = 'select count(u) from izv\data\Usuario u where u.alias = :alias';
        $query = $gestor->createQuery($dql)->setParameter('alias', $alias);
        $resultado = $query->getResult();
        $cuenta = $resultado[0][1];
        $resultado = 0;
        if($cuenta === '0'){
            $resultado = 1;
        }
        return $resultado;
    }
    
    function correoAvailable($correo) {
        $gestor = $this->getDatabase();
        $dql = 'select count(u) from izv\data\Usuario u where u.correo = :correo';
        $query = $gestor->createQuery($dql)->setParameter('correo', $correo);
        $resultado = $query->getResult();
        $cuenta = $resultado[0][1];
        $resultado = 0;
        if($cuenta === '0'){
            $resultado = 1;
        }
        return $resultado;
    }
    
    function getZapatos($pagina=1, $orden=null, $filtro=null){
        $limit = 9;
        $gestor = $this->getDatabase();
        
        if($filtro === null) {
            /*TODO mejorar esto*/
            if($orden===null){
                $dql = 'SELECT z FROM izv\data\Zapato z JOIN z.categoria c JOIN z.destinatario d group by z.modelo,z.marca ORDER BY d.id, c.id ASC';
            }else{
                $dql = 'SELECT z FROM izv\data\Zapato z JOIN z.categoria c JOIN z.destinatario d ORDER BY z.'. $orden .', d.id, c.id ASC';
            }
            
            $query = $gestor->createQuery($dql);
        } else {
            /*TODO mejorar esto*/
            $dql = 'select z from izv\data\Zapato z
                    where id like :filtro or nombre like :filtro or alias like :filtro or correo like :filtro or fechaalta like :filtro
                    order by '. $orden .', nombre, alias, correo, fechaalta, id limit :offset, :rpp';
            $parametros['filtro'] = '%' . $filtro . '%';
        }
        
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($pagina - 1))
            ->setMaxResults($limit);
        $pagination = new Pagination($paginator->count(), $pagina, $limit);
        
        $zapatos = array();
        foreach($paginator as $zapato) {
            $tmp = $zapato->get();
            $tmp['categoria'] = $zapato->getCategoria()->get();
            $tmp['destinatario'] = $zapato->getDestinatario()->get();
            $tmp['imagenes'] = GestorImagenes::getUrlImagenes($zapato);
            $zapatos[] = $tmp;
        }
        $this->set('zapatos',$zapatos);
    }
    
    function getCategorias(){
        $gestor = $this->getDatabase();
        $resultCat = $gestor->getRepository('izv\data\Categoria')->findBy(array(), array('nombre' => 'ASC'));
        
        $categorias = array();
        foreach($resultCat as $categoria){
            $categorias[]=$categoria->get();
        }
        $this->set('categorias',$categorias);
    }
    
    function getColores(){
        $gestor = $this->getDatabase();
        $dql = 'SELECT distinct(z.color) FROM izv\data\Zapato z ORDER BY z.color ASC';
        $query = $gestor->createQuery($dql);
        $resultado = $query->getResult();
        
        $this->set('colores',$resultado);
    }
    
    function getMateriales(){
        $gestor = $this->getDatabase();
        $dql = 'SELECT distinct(z.cubierta) FROM izv\data\Zapato z ORDER BY z.cubierta ASC';
        $query = $gestor->createQuery($dql);
        $resultado = $query->getResult();
        
        $this->set('materiales',$resultado);
    }
    
    function getMarcas(){
        $gestor = $this->getDatabase();
        $dql = 'SELECT distinct(z.marca) FROM izv\data\Zapato z ORDER BY z.marca ASC';
        $query = $gestor->createQuery($dql);
        $resultado = $query->getResult();
        
        $this->set('marcas',$resultado);
    }
    
    function getNumeros(){
        $gestor = $this->getDatabase();
        $dql = 'SELECT min(z.numerodesde),max(z.numerohasta) FROM izv\data\Zapato z';
        $query = $gestor->createQuery($dql);
        $resultado = $query->getResult();
        
        $this->set('numerodesdehasta',$resultado[0]);
    }
    
    // function getAllNumeros(){
    //     $gestor = $this->getDatabase();
    //     $dql = 'SELECT distinct(z.numerodesde) FROM izv\data\Zapato z ORDER BY z.numerodesde ASC';
    //     $dql2 = 'SELECT distinct(z.numerohasta) FROM izv\data\Zapato z ORDER BY z.numerohasta ASC';
    //     $query = $gestor->createQuery($dql);
    //     $query2 = $gestor->createQuery($dql2);
    //     $resultado = $query->getResult();
    //     $resultado2 = $query2->getResult();
        
    //     $numeros = array();
    //     $desde = array();
    //     $hasta = array();
        
    //     foreach($resultado as $indice => $numero){
    //         $desde[]=$numero[1];
    //     }
    //     foreach($resultado2 as $indice => $numero){
    //         $hasta[]=$numero[1];
    //     }
    //     $numeros['desde'] = $desde;
    //     $numeros['hasta'] = $hasta;
        
    //     var_dump($numeros);
        
    //     exit;
        
    //     $this->set('numerodesdehasta',$resultado);
    // }
    
    
    function getDestinatario(){
        
    }
}