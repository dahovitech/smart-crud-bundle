<?php

    namespace SmartCrudBundle\Form\Type;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class ProductFormType extends AbstractType
    {
      public function buildForm(FormBuilderInterface $builder, array $options)
      {
        $builder
          ->add('name')
          // Ajouter d'autres champs ici
        ;
      }

      public function configureOptions(OptionsResolver $resolver)
      {
        $resolver->setDefaults([
          // Configurer les options ici
        ]);
      }
    }
