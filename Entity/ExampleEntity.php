<?php

    namespace SmartCrudBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use SmartCrudBundle\Attribute\Configurable;

    #[ORM\Entity]
    #[Configurable]
    class ExampleEntity
    {
      #[ORM\Id]
      #[ORM\GeneratedValue]
      #[ORM\Column(type: 'integer')]
      private $id;

      #[ORM\Column(type: 'string', length: 255)]
      private $name;

      // Getters and setters
    }
