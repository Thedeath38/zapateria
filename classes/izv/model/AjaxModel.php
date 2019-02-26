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
                $dql = 'SELECT z FROM izv\data\Zapato z JOIN z.categoria c JOIN z.destinatario d ORDER BY d.id, c.id ASC';
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
        
        foreach($paginator as $zapato) {
            $tmp = $zapato->get();
            $tmp['categoria'] = $zapato->getCategoria()->get();
            $tmp['destinatario'] = $zapato->getDestinatario()->get();
            $tmp['imagenes'] = GestorImagenes::getUrlImagenes($zapato);
            $zapatos[] = $tmp;
        }
        $this->set('zapatos',$zapatos);
    }

}