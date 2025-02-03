<?php

    namespace SmartCrudBundle\Service;

    use Doctrine\ORM\EntityManagerInterface;

    class ApiService
    {
      private $entityManager;

      public function __construct(EntityManagerInterface $entityManager)
      {
        $this->entityManager = $entityManager;
      }

      public function getEntity(string $entityClass, int $id)
      {
        return $this->entityManager->getRepository($entityClass)->find($id);
      }
    }
