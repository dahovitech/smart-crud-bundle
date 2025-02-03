<?php

namespace Dahovitech\SmartCrudBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

class CrudService
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function getAllEntities(string $entityClass): array
    {
        return $this->entityManager->getRepository($entityClass)->findAll();
    }

    public function getEntityById(string $entityClass, int $id): object
    {
        return $this->entityManager->getRepository($entityClass)->find($id);
    }

    public function persistEntity(object $entity): void
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function removeEntity(object $entity): void
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }
}