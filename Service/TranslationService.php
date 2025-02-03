<?php

    namespace SmartCrudBundle\Service;

    use Doctrine\ORM\EntityManagerInterface;

    class TranslationService
    {
      private $entityManager;

      public function __construct(EntityManagerInterface $entityManager)
      {
        $this->entityManager = $entityManager;
      }

      public function createTranslation(string $translationClass, array $data)
      {
        $translation = new $translationClass();
        foreach ($data as $key => $value) {
          $setter = 'set' . ucfirst($key);
          if (method_exists($translation, $setter)) {
            $translation->$setter($value);
          }
        }
        $this->entityManager->persist($translation);
        $this->entityManager->flush();
        return $translation;
      }
    }
