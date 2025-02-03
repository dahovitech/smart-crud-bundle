<?php

    namespace SmartCrudBundle\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class TranslationController extends AbstractController
    {
      #[Route('/{entityName}/{entityId}/translations', name: 'app_translation_index', methods: ['GET'])]
      public function index(Request $request, string $entityName, int $entityId): Response
      {
        $entityClass = $this->getEntityClass($entityName);
        $entity = $this->entityManager->getRepository($entityClass)->find($entityId);

        if (!$entity) {
          throw $this->createNotFoundException('Entity not found');
        }

        $translationClass = $this->getTranslationEntityClass($entityName);
        $translations = $this->entityManager->getRepository($translationClass)->findBy(['object' => $entity]);

        return $this->render('@SmartCrud/translation/index.html.twig', [
          'translations' => $translations,
          'entityName' => $entityName,
          'entityId' => $entityId,
        ]);
      }
    }
