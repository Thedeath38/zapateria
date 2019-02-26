<?php

namespace izv\model;
use Doctrine\ORM\Tools\Pagination\Paginator;
use izv\managedata\Bootstrap;
use izv\tools\Pagination;
use izv\data\Usuario;
use izv\tools\Util;

class UserModel extends Model {
    
    function login(Usuario $usuario) {
        $resultado = null;
        $gestor = $this->getDatabase();
        if($usuario->getCorreo() !== NULL || $usuario->getAlias() !== NULL){
            if($usuario->getCorreo() !== NULL){
                $databaseUser = $gestor->getRepository('izv\data\Usuario')->findOneBy(array('correo' => $usuario->getCorreo()));
            }else{
                $databaseUser = $gestor->getRepository('izv\data\Usuario')->findOneBy(array('alias' => $usuario->getAlias()));
            }
            $valid = false;
            if($databaseUser !==null){
                $valid = Util::verificarClave($usuario->getClave(),$databaseUser->getClave());
                $activate = $databaseUser->getActivo();
            }
            
            
            if($valid && $activate == 1){
                $resultado = $databaseUser;
            }
        }
        return $resultado;
    }
    
    function register(Usuario $usuario){
        $resultado = null;
        $gestor = $this->getDatabase();
        $gestor->persist($usuario);
        $gestor->flush();
    }
    
    function activate($id,$sendedMail){
        $manager = new ManageUsuario($this->getDatabase());
        $user = $manager->get($id);
        
        $resultado = 0;
        if($user !== null && $user->getCorreo() === $sendedMail) {
            $user->setActivo(1);
            $resultado = $manager->edit($user);
        }
        return $resultado;
    }
}