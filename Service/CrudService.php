<?php

    namespace SmartCrudBundle\Service;

    use Doctrine\ORM\EntityManagerInterface;

    class CrudService
    {
      private $entityManager;

      public function __construct(EntityManagerInterface $entityManager)
      {
        $this->entityManager = $entityManager;
      }

      public function createEntity(string $entityClass, array $data)
      {
        $entity = new $entityClass();
        foreach ($data as $key => $value) {
          $setter = 'set' . ucfirst($key);
          if (method_exists($entity, $setter)) {
            $entity->$setter($value);
          }
        }
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
        return $entity;
      }
    }
