<?php

    namespace SmartCrudBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class CrudController extends AbstractController
    {
      #[Route('/{entityName}', name: 'app_crud_index', methods: ['GET'])]
      public function index(Request $request): Response
      {
        $entityName = $this->getEntityName($request);
        $entityClass = $this->getEntityClass($entityName);
        $repository = $this->entityManager->getRepository($entityClass);
        $entities = $repository->findAll();

        return $this->render('@SmartCrud/crud/index.html.twig', [
          'entities' => $entities,
          'entityName' => $entityName,
        ]);
      }

      // Autres méthodes CRUD : new, update, delete, show...
    }
