<?php
 // Filename: /module/Blog/src/Blog/Factory/ZendDbSqlMapperFactory.php
 namespace Blog\Factory;

 use Blog\Mapper\ZendDbSqlMapper;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;
 use Zend\Stdlib\Hydrator\ClassMethods;
 use Blog\Model\Post;

 class ZendDbSqlMapperFactory implements FactoryInterface
 {
     /**
      * Create service
      *
      * @param ServiceLocatorInterface $serviceLocator
      * @return mixed
      */
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         return new ZendDbSqlMapper(
             $serviceLocator->get('Zend\Db\Adapter\Adapter'),
             new ClassMethods(false),
             new Post()
         );
     }
 }

?>