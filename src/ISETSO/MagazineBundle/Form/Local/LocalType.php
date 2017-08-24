<?php

namespace ISETSO\MagazineBundle\Form\Local;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use ISETSO\MagazineBundle\Entity\Local\TypeLocal;

class LocalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('designation', TextType::class, array('label' => 'magazine.field.designation'))
                ->add('typeLocal', EntityType::class, array('label' => 'magazine.field.typeLocal',  'choice_label' => 'designation','placeholder' => 'magazine.placeholder.typelocal','class' => TypeLocal::class))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Local\Local'
        ));
    }
}
