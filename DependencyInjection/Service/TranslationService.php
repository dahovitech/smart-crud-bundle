<?php

namespace Dahovitech\SmartCrudBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

class TranslationService
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function handleTranslations(object $entity, string $entityName): void
    {
        // Logique pour gérer les traductions
    }
}