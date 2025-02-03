<?php

    namespace SmartCrudBundle\DependencyInjection;

    use Symfony\Component\Config\Definition\Builder\TreeBuilder;
    use Symfony\Component\Config\Definition\ConfigurationInterface;

    class Configuration implements ConfigurationInterface
    {
      public function getConfigTreeBuilder()
      {
        $treeBuilder = new TreeBuilder('smart_crud');
        $rootNode = $treeBuilder->getRootNode();

        // Définir la configuration ici

        return $treeBuilder;
      }
    }
