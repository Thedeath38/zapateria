<?php

namespace izv\tools;

use izv\app\App;

class GestorImagenes{
    
    //Return String
    static function getUrlDirectory(\izv\data\Zapato $zapato){
        $url = APP::BASE . '/img/zapatos/' . $zapato->getMarca() . '/' . $zapato->getModelo() . '/';
        $url = str_replace(" ", "_", $url);
        return $url;
    }
    
    //return Array{STRING}
    static function getUrlImagenes(\izv\data\Zapato $zapato){
        self::reorderDirectoryImagenes($zapato);
        $urls = [];
        $url = 'img/zapatos/' . $zapato->getMarca() . '/' . $zapato->getModelo() . '/';
        $url = str_replace(" ", "_", $url);
        if(is_dir($url)){
            $files = scandir($url);
            array_shift($files);
            array_shift($files);
            foreach ($files as $file){
                $urls[] = self::getUrlDirectory($zapato).$file;
            }
        }
        return $urls;
    }
    
    static function setImagenes(\izv\data\Zapato $zapato, array $imagenes){
        
    }
    
    static function renameDirectoryImagenes(\izv\data\Zapato $zapato, array $imagenes){
        //rename ( string $oldname , string $newname [, resource $context ] ) : bool
        
    }
    
    static function reorderDirectoryImagenes(\izv\data\Zapato $zapato){
        //rename ( string $oldname , string $newname [, resource $context ] ) : bool
        $url = 'img/zapatos/' . $zapato->getMarca() . '/' . $zapato->getModelo() . '/';
        $url = str_replace(" ", "_", $url);
        if(is_dir($url)){
            $files = scandir($url);
            array_shift($files);
            array_shift($files);
            $id = 0;
            foreach ($files as $file){
                $fileExplode = explode('.',$file);
                rename($url.$file,$url.$id.'.'.$fileExplode[1]);
                $urls[] = self::getUrlDirectory($zapato).$file;
                $id++;
            }
            return true;
        }
        return false;
    }
}