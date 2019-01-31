<?php

require_once '../../vendor/autoload.php';
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

    class Bootstrap{
        private $entityManager;
        function __construct(){

            $paths = array('./src');
            $isDevMode = true;
            $dbParams = array(
                'driver'   => 'pdo_mysql',
                'user'     => 'mvc',
                'password' => 'mvc',
                'dbname'   => 'mvc'
            );
            $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
            $this->entityManager = EntityManager::create ($dbParams, $config); //gestor
        }
        function getEntityManager() {
            return $this->entityManager;
        }

    }